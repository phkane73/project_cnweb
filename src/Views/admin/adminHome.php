<?php
$this->layout("layouts/admindefault");
?>
<?php $this->start("pageadmin") ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" style=" background-color: #0F56A9;">
            <a href="/admin" class="btn btn-light d-block mt-4 ml-2" style="width: 200px; font-size: 18px;">Thêm sản phẩm</a>
            <a href="/admin/listProducts" class="btn btn-light mt-4 ml-2" style="width: 200px; font-size: 18px;">Danh sách sản phẩm</a>
        </div>
        <div class="col-md-10" style=" background-color: #E0EBF4;">
            <h1 class="text-uppercase text-center mt-4">Thêm sản phẩm</h1>
            <form action="/admin" method="post" enctype="multipart/form-data" class="my-5" style="padding: 0 200px;">
                <div class="form-group">
                    <label for="tenSP">Tên sản phẩm :</label>
                    <input type="text" class="form-control" name="tenSP" placeholder="Nhập tên sản phẩm" id="tenSP" autofocus required>
                </div>
                <div class="form-group">
                    <label for="donGia">Giá sản phẩm :</label>
                    <input type="text" class="form-control" name="donGia" placeholder="Nhập giá sản phẩm" id="donGia" required>
                </div>
                <div>
                    <div class="custom-file mt-3" style="width: 450px;">
                        <input type="file" class="custom-file-input" id="imageSP" name="imageSP" required>
                        <label class="custom-file-label" for="imageSP" name="lable_input">Chọn ảnh sản phẩm</label>
                    </div>
                </div>
                <div style="margin-top: 30px; width: 140px;">
                    <select name="gender" class="custom-select" required>
                        <option selected>Mặt hàng</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-4 float-right" value="AddProduct" style="margin-bottom: 175px;">Thêm sản phẩm</button>
            </form>
        </div>
    </div>
</div>


<?php $this->stop() ?>