<div class="container-fluid" style="background-color: black; height: 70px;">
    <div class="row">
        <div class="col-md-12">
            <i class="fa-solid fa-gear text-light mr-2" style="font-size: 25px; line-height: 70px;"></i>
            <h4 class="text-light m-0" style="line-height: 70px; display: inline-block;">Quản trị viên - <?php echo \App\SessionGuard::user()->tenKh ?></h4>
            <a class="text-light p-0 float-right mr-4" style="line-height: 70px;" href="/logout">Đăng xuất</a>
            <i class="fa-solid fa-user text-light float-right mr-3" style="line-height: 70px; font-size: 20px;"></i>
        </div>
    </div>
</div>