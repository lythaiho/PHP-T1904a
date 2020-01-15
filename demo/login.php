<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../import/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../import/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="../import/css/style.css" type="text/css">
    <title>Login account</title>
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

                    <div class="text-24 text-center pb-4">Đăng nhập PHP</div>

                    <?php require_once ('message.php');?>
                    <!--form login start-->
                    <form action="postLogin.php" method="post" class="form-login rounded border py-4">

                        <!--form group start-->
                        <div class="form-group pt-2">
                            <label class="d-block">Email:</label>
                            <input name="email" type="email" class="form-control" placeholder="Nhập email" required>
                        </div>
                        <!--form group end-->

                        <!--form group start-->
                        <div class="form-group pt-2">
                            <label class="d-block">Mật khẩu:</label>
                            <input name="password" type="password" class="form-control" placeholder="Nhập mật khẩu"
                                   required>
                        </div>
                        <!--form group end-->

                        <!--form group start-->
                        <div class="form-group text-center pt-4">
                            <button type="submit" class="btn btn-success btn-block ">Đăng nhập</button>
                        </div>
                        <!--form group end-->

                        <!--form group start-->
                        <div class="form-group text-12 py-2">
                            <div class="text-left">
                                <a class="float-left" href="">
                                    Quên mật khẩu?
                                </a>
                            </div>
                            <div class="text-right">
                                <a class="text-primary float-right" href="./create-account.php">
                                    Tạo tài khoản mới
                                </a>
                            </div>
                        </div>
                        <!--form group end-->
                    </form>
                    <!--form login end-->
                </div>
            </div>
        </div>

        <!--container end-->

    </section>
    <!--section login end-->
</article>
<!--article end-->
</body>
<script src="../import/js/bootstrap.min.js"></script>
<script src="../import/js/all.min.js"></script>
<script src="../import/js/popper.min.js"></script>
</html>
