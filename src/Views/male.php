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
                    <a href="/">Trang chủ</a>
                    <span>></span>
                    <span class="text-secondary" style="cursor: default;">Nam</span>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $this->stop() ?>