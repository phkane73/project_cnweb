<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/c45226403c.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    require_once __DIR__ . '/../bootstrap.php';
    ?>
    <?php
    include '../partials/header.php';
    include '../partials/carousel.php';
    ?>
    <div class="container">
        <div class="row mt-5">
            <div class="bigbanner_1 rounded">Thời trang, phong cách, lịch lãm</div>
        </div>
        <div class="row" style="height: 600px;">
            <div class="col-sm-4 mt-3">
                <div class="col border rounded shadow p-0">
                    <a href="#">
                        <img src="/image/shirt/aosm001.jpg" alt="" class="img-fluid" width="100%">
                    </a>
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <div class="col border rounded shadow p-0">
                    <a href="#">
                        <img src="/image/shirt/aopolo.jpg" alt="" class="img-fluid" width="100%">
                    </a>
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <div class="col border rounded shadow p-0">
                    <a href="#">
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
                    <a href="#">
                        <img src="/image/shirt/aolua01.jpg" alt="" class="img-fluid" width="100%">
                    </a>
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <div class="col border rounded shadow p-0">
                    <a href="#">
                        <img src="/image/shirt/vaydam01.jpg" alt="" class="img-fluid" width="100%">
                    </a>
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <div class="col border rounded shadow p-0">
                    <a href="#">
                        <img src="/image/shirt/vaydam02.jpg" alt="" class="img-fluid" width="100%">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include '../partials/footer.php';
    ?>
    <script src="./app.js"></script>

</body>

</html>