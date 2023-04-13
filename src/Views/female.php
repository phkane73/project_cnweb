<?php
define('HOMENAME', "IVY moda");
$this->layout("layouts/default", ["title" => HOMENAME]);
?>
<?php $this->start("page") ?>
<div class="container-fluid" style=" background-color: #f3f2ee;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="height: 150px;">
                <div class="pt-5 pb-5">
                    <h5>Thời trang nam</h5>
                    <a href="/" style="color: black;">Trang chủ</a>
                    <span>></span>
                    <span class="text-secondary" style="cursor: default;">Nữ</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 p-0 d-flex" style="flex-wrap: wrap;">
            <?php

            use App\Models\Products;

            $products = Products::where('gender', 'Nữ')->get();
            foreach ($products as $product) {
                echo ' <div class="card mr-2 mb-4" style="width:24%">
                <img class="card-img-top" src="./image/products/' . $product->imageSP . '">
                <div class="card-body">
                    <h5 class="card-title">' . $product->tenSP . '</h5>
                    <p class="card-text">' . number_format($product->donGia) . '$' . '</p>
                    <a href="#" class="btn btn-dark">Thêm vào giỏ hàng</a>
                </div>
            </div>';
            }
            ?>
        </div>
    </div>
</div>
<?php $this->stop() ?>