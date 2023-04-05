<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card" style="margin-top: 100px;">
                <div class="card-header text-center">
                    <a href="/">
                        <i class="fa-solid fa-house h3 float-left m-0" style="line-height: 60px;"></i>
                    </a>
                    <h2 style="line-height: 60px;">Đăng nhập</h2>
                </div>
                <div class="card-body">
                    <form action="/login" id="login_form" method="post">
                        <div class="form-group">
                            <label for="sdt">Số điện thoại:</label>
                            <input type="text" class="form-control" placeholder="Nhập số điện thoại" id="sdt" name="sdt" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu:</label>
                            <input type="password" class="form-control" placeholder="Nhập mật khẩu" id="password" name="password" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" value="Signup">Đăng nhập</button>
                        <a href="/register" class="btn btn-primary float-right">Đăng ký</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>