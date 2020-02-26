<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="function/views/import/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="function/views/import/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="function/views/import/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="function/views/import/css/datatables.min.css" type="text/css">
    <link rel="stylesheet" href="function/views/import/css/style.css" type="text/css">
    <title>Create account</title>
</head>
<body>
<!--article start-->
<article class="position-relative">

    <!--section login start-->
    <section class="login-account">

        <!--container start-->
        <div class="container">
            <!--row start-->
            <div class="row">
                <div class=" col-md-4 offset-md-4 align-self-center">
                    <div class="text-24 text-center pb-4">Tạo tài khoản PHP</div>
                    <?php require_once('message.php');?>
                    <!--form login start-->
                    <form action="postCreate.php" method="post" class="form-login rounded border py-3">

                        <!--form group start-->
                        <div class="form-group pt-2">
                            <label class="d-block" for="exampleInputEmail1">Email của bạn</label>
                            <input name="email" type="email" class="form-control" placeholder="Nhập email của bạn" required>
                        </div>
                        <!--form group end-->

                        <!--form group start-->
                        <div class="form-group pt-2">
                            <label class="d-block">Mật khẩu</label>
                            <input name="password" type="password" class="form-control" placeholder="Nhập mật khẩu"
                                   required>
                        </div>
                        <!--form group end-->

                        <!--form group start-->
                        <div class="form-group pt-2">
                            <label class="d-block">Xác nhận mật khẩu</label>
                            <input name="confirmPassword" type="password" class="form-control"
                                   placeholder="Nhập lại mật khẩu" required>
                        </div>
                        <!--form group end-->

                        <!--form group start-->
                        <div class="form-group text-center pt-4">
                            <button type="submit" class="btn btn-success btn-block ">Xác nhận</button>
                        </div>
                        <!--form group end-->

                        <!--Back to login Start-->
                        <a class="text-secondary text-12 pt-2" href="?route=login">Quay lại đăng nhập</a>
                        <!--Back to login End-->
                    </form>
                    <!--form login end-->
                </div>
            </div>
            <!--row end-->
        </div>
        <!--container end-->

    </section>
    <!--section login end-->
</article>
<!--article end-->
</body>
<script src="function/views/import/js/bootstrap.min.js"></script>
<script src="function/views/import/js/all.min.js"></script>
<script src="function/views/import/js/popper.min.js"></script>
<script src="function/views/import/js/jquery-3.4.1.min.js"></script>
<script src="function/views/import/js/datatables.min.js"></script>
</html>