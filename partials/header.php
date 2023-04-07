<div class="container-fluid">
    <div class="row" style="background-color: black;">
        <div class="col-md-1"></div>
        <div class="col-md-10" style="height: 50px;">
            <div class="hotline text-light ml-3" style="line-height: 50px; display: inline-block; cursor: default;">Hotline: 0857487577</div>
            <div class="login-register float-right mr-3" style="display: inline-block; line-height: 50px;">
                <?php if (!\App\SessionGuard::isUserLoggedIn()) : ?>
                    <a href="/login" class="login text-light">Đăng nhập</a>
                    <span class="text-warning">/</span>
                    <a href="/register" class="register text-light">Đăng ký</a>
                <?php else : ?>
                    <a href="/logout" class="register text-light">Đăng xuất</a>
                <?php endif ?>
            </div>
            <div class="social_media h3 mt-2 float-right mr-4" style="display: inline-block;">
                <a href="https://www.facebook.com/profile.php?id=100079908379373" class="facebook"><i class="fa-brands fa-facebook text-light mr-2"></i></a>
                <a href="https://instagram.com/hbee_xnhng?igshid=YmMyMTA2M2Y=" class="instagram"><i class="fa-brands fa-square-instagram text-light"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="height: 130px;">
            <a href="/">
                <img class="logo" src="/image/logo/logo_web.png" alt="" style="width: 220px; height: 70px; margin: 5px;">
            </a>
            <ul class="menu_header p-2" style="display: inline-flex; line-height: 100px;">
                <li class="home mr-5">
                    <a href="/" class="h5 text-uppercase" style="color: black;">Trang chủ</a>
                </li>
                <li class="female mr-5">
                    <a href="#" class="h5 text-uppercase" style="color: black;">Nữ</a>
                </li>
                <li class="male mr-5">
                    <a href="#" class="h5 text-uppercase" style="color: black;">Nam</a>
                </li>
                <li class="about mr-1">
                    <a href="/abouts" class="h5 text-uppercase" style="color: black;">Abouts</a>
                </li>
            </ul>
            <div style="display: inline-block; margin-left: 35px;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn" type="submit" style="background-color: black;"><i class="fa-solid fa-magnifying-glass text-light"></i></button>
                    </div>
                </div>
            </div>
            <a href="#" class="cart" style="color: black; margin-left: 10px;">
                <i class="fa-sharp fa-solid fa-cart-shopping h4" style="line-height: 68px; padding-top: 16px;"></i>
            </a>
            <div style="display: inline-block; margin-left: 10px;">
                <?php if (!\App\SessionGuard::isUserLoggedIn()) : ?>
                    <a href="#" class="cart" style="color: black; margin-left: 10px;">
                        <i class="fa-solid fa-user h4" style="line-height: 68px; padding-top: 16px;"></i>
                    </a>
                <?php else : ?>
                    <Strong style="cursor: default;"><?php echo \App\SessionGuard::user()->tenKh ?></Strong>
                <?php endif ?>

            </div>
        </div>
    </div>
</div>