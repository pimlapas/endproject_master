<?php session_start(); ?>

<link rel="stylesheet" href="css/bootstrap-login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <style>
        body {
            background-image: url('img/bgwebb.jpg');
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }
    </style>

    <form action="chklogin.php" method="post" class="form-horizontal">

        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-5">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info">เข้าสู่ระบบ</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info">ชื่อผู้ใช้:</label><br>
                                    <input type="text" name="m_username" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">รหัสผ่าน:</label><br>
                                    <input type="password" name="m_password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="เข้าสู่ระบบ">
                                    <h6 align='right'>
                                        <a>ยังไม่มีบัญชี? </a>
                                        <a class="btn btn-success" href="databoad/register.php">
                                             สมัครสมาชิก
                                        </a>
                                    </h6>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>