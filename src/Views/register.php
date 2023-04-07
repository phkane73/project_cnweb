<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card" style="margin-top: 100px;">
                <div class="card-header text-center">
                    <a href="/">
                        <i class="fa-solid fa-house h3 float-left m-0" style="line-height: 60px;"></i>
                    </a>
                    <h2 style="line-height: 60px;">Đăng ký tài khoản</h2>
                </div>
                <div class="card-body">
                    <form action="/register" id="register_form" method="post">
                        <div class="form-group <?= isset($errors['tenKh']) ? ' has-error' : '' ?>">
                            <label for="tenKh">Tên của bạn:</label>
                            <input type="text" class="form-control" placeholder="Nhập tên của bạn" id="tenKh" name="tenKh" value="<?= isset($old['tenKh']) ? $this->e($old['tenKh']) : '' ?>" required autofocus>
                            <?php if (isset($errors['tenKh'])) : ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?= $this->e($errors['tenKh']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>
                        <div class="form-group<?= isset($errors['sdt']) ? ' has-error' : '' ?>">
                            <label for="sdt">Số điện thoại:</label>
                            <input type="text" class="form-control" placeholder="Nhập số điện thoại" id="sdt" name="sdt" value="<?= isset($old['sdt']) ? $this->e($old['sdt']) : '' ?>" required>
                            <?php if (isset($errors['sdt'])) : ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?= $this->e($errors['sdt']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>
                        <div class="form-group <?= isset($errors['password']) ? ' has-error' : '' ?>">
                            <label for="password">Mật khẩu:</label>
                            <input type="password" class="form-control" placeholder="Nhập mật khẩu" id="password" name="password" required>
                            <?php if (isset($errors['password'])) : ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?= $this->e($errors['password']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>
                        <div class="form-group <?= isset($errors['re_password']) ? ' has-error' : '' ?>">
                            <label for="re_password">Nhập lại mật khẩu:</label>
                            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" id="re_password" name="re_password" required>
                            <?php if (isset($errors['re_password'])) : ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?= $this->e($errors['re_password']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>
                        <div class="form-group <?= isset($errors['diaChi']) ? ' has-error' : '' ?>">
                            <label for="diaChi">Địa chỉ</label>
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ" id="diaChi" name="diaChi" value="<?= isset($old['diaChi']) ? $this->e($old['diaChi']) : '' ?>" required>
                            <?php if (isset($errors['diaChi'])) : ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?= $this->e($errors['diaChi']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" value="Signup">Đăng ký</button>
                        <a href="/login" class="btn btn-primary float-right">Đăng nhập</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>