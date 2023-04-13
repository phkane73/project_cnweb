<?php

namespace App\Controllers;


use App\SessionGuard as Guard;
use App\Models\Products;

class AdminController extends Controller
{
    public function adminHome()
    {
        if (Guard::admin()) {
            $this->sendPage('admin/adminHome');
        } else {
            redirect('/');
        }
    }

    public function listProducts()
    {
        if (Guard::admin()) {
            $this->sendPage('admin/listProducts');
        } else {
            redirect('/');
        }
    }

    public function addProduct()
    {
        $targetDir = "../public/image/products/";
        $targetFile = $targetDir . basename($_FILES["imageSP"]["name"]);
        $hasErrors = false;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $extensions = array("jpeg", "jpg", "png", "gif");

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["imageSP"]["tmp_name"]);
            if ($check == false) {
                echo "File is not an image.";
                $hasErrors = true;
            }
        }

        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, file already exists.";
            $hasErrors = true;
        }

        // Allow certain file formats
        if (!in_array($imageFileType, $extensions)) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $hasErrors = true;
        }

        // Check if $hasErrors is set to 0 by an error
        if ($hasErrors) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            move_uploaded_file($_FILES["imageSP"]["tmp_name"], $targetFile);
        }

        $data = $this->filterProductData($_POST, $_FILES);
        $this->createProduct($data);
        redirect('/admin');
    }

    protected function filterProductData(array $data, array $file)
    {
        return [
            'tenSP' => $data['tenSP'] ?? null,
            'donGia' => $data['donGia'] ?? null,
            'gender' => $data['gender'] ?? null,
            'imageSP' => $file['imageSP']['name'] ?? null
        ];
    }

    protected function createProduct($data)
    {
        return Products::create([
            'tenSP' => $data['tenSP'],
            'donGia' => $data['donGia'],
            'gender' => $data['gender'],
            'imageSP' => $data['imageSP']
        ]);
    }
}
