<?php
define('ERROR', 'Error404');
$this->layout("layouts/default", ["title" => ERROR]);
?>

<?php $this->start("page") ?>

<body>
    <div class="d-flex align-items-center justify-content-center mb-5">
        <div class="text-center">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
            <p class="lead">
                The page you’re looking for doesn’t exist.
            </p>
            <a href="/" class="btn btn-dark">Go Home</a>
        </div>
    </div>
</body>
<?php $this->stop() ?>