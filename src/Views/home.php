<?php
define('HOMENAME', "IVY moda");
$this->layout("layouts/default", ["title" => HOMENAME]);
?>
<?php $this->start("page") ?>

<?php
include '../partials/carousel.php';
?>
<div class="container">
    <div class="row mt-5">
        <div class="bigbanner_1 rounded">Thời trang, phong cách, lịch lãm</div>
    </div>
    <div class="row" style="height: 600px;">
        <div class="col-sm-4 mt-3">
            <div class="col border rounded shadow p-0">
                <a href="/male">
                    <img src="/image/shirt/aosm001.jpg" alt="" class="img-fluid" width="100%">
                </a>
            </div>
        </div>
        <div class="col-sm-4 mt-3">
            <div class="col border rounded shadow p-0">
                <a href="/male">
                    <img src="/image/shirt/aopolo.jpg" alt="" class="img-fluid" width="100%">
                </a>
            </div>
        </div>
        <div class="col-sm-4 mt-3">
            <div class="col border rounded shadow p-0">
                <a href="/male">
                    <img src="/image/shirt/aosm02.jpg" alt="" class="img-fluid" width="100%">
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="bigbanner_2 rounded">Quyến rũ, sang trọng, quý phái</div>
    </div>
    <div class="row" style="height: 600px;">
        <div class="col-sm-4 mt-3">
            <div class="col border rounded shadow p-0">
                <a href="/female">
                    <img src="/image/shirt/aolua01.jpg" alt="" class="img-fluid" width="100%">
                </a>
            </div>
        </div>
        <div class="col-sm-4 mt-3">
            <div class="col border rounded shadow p-0">
                <a href="/female">
                    <img src="/image/shirt/vaydam01.jpg" alt="" class="img-fluid" width="100%">
                </a>
            </div>
        </div>
        <div class="col-sm-4 mt-3">
            <div class="col border rounded shadow p-0">
                <a href="/female">
                    <img src="/image/shirt/vaydam02.jpg" alt="" class="img-fluid" width="100%">
                </a>
            </div>
        </div>
    </div>
</div>
<?php $this->stop() ?>