<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="form_login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="form_login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="form_login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="form_login/css/style.css">

    <title>Login Shop2Hand</title>
</head>

<body>


    <div class="half">
        <div class="bg order-1 order-md-2" style="background-image: url('form_login/images/bgwebb.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                        <a href="index.php"><i class="fas fa-home"></i></a>

                            <div class="text-center mb-5">

                                <h3> <strong>เข้าสู่ระบบ</strong></h3>
                                <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                            </div>

                            <form action="chklogin.php" method="post">

                                <div class="form-group first">
                                    <label for="username">ชื่อผู้ใช้งาน</label>
                                    <input type="text" class="form-control" placeholder="ชื่อผู้ใช้งาน" name="m_username" id="username">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">รหัสผ่าน </label>
                                    <input type="password" class="form-control" placeholder="รหัสผ่านของคุณ" name="m_password" id="password">
                                </div>

                                <div class="d-sm-flex mb-5 align-items-center">

                                    <span class="ml-auto"> <a href="databoad/forgetpassword.php" class="forgot-pass">ลืมรหัสผ่าน</a></span>
                                </div>

                                <input type="submit" value="เข้าสู่ระบบ" class="btn btn-block btn-info">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="form_login/js/jquery-3.3.1.min.js"></script>
    <script src="form_login/js/popper.min.js"></script>
    <script src="form_login/js/bootstrap.min.js"></script>
    <script src="form_login/js/main.js"></script>
</body>

</html>