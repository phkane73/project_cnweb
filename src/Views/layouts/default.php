<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/c45226403c.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/image/logo/logowebsite.png" type="image/x-icon" />
    <style>
        a {
            text-decoration: none !important;
            color: black;
        }

        ul {
            list-style-type: none !important;
            margin: 0 !important;
        }

        .bigbanner_1 {
            width: 100%;
            height: 180px;
            background-image: url(/image/slider/banner_1.jpg);
            background-size: 50%;
            background-repeat: repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 50px;
            text-transform: uppercase;
        }

        .bigbanner_2 {
            width: 100%;
            height: 180px;
            background-image: url(/image/slider/banner_2.jpg);
            background-size: 50%;
            background-repeat: repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 50px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <?php include '../partials/header.php'; ?>

    <?= $this->section("page") ?>

    <?php include '../partials/footer.php'; ?>
</body>

</html>