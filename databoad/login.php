<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- start menu -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">HOME</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="index.php">หน้าแรก</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">สมัครสมาชิก</a></li>
                <li><a href="prdtype.html">เพิ่มประเภทสินค้า</a></li>
                <li><a href="prd.html">เพิ่มสินค้า</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <!--  <form class="navbar-form navbar-left">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form> -->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">หน่วยงานภายใน <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">depart 1</a></li>
                    <li><a href="#">depart 2</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </div>
  </div>
  <!-- end menu -->
  <!-- start form login-->
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-5">
        <h3> Form Login
          <br>
        </h3>
        <form action="chklogin.php" method="post" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-3 control-label">
              Username :
            </div>
            <div class="col-sm-4">
              <input type="text" name="m_username" required class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3 control-label">
              Password :
            </div>
            <div class="col-sm-4">
              <input type="password" name="m_password" required class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-4">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end form-->

  <!-- start footer -->
  <div class="container ft">
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <p align="center" class="ft">
          @2021
        </p>
      </div>
    </div>
  </div>

  <!-- end footer -->

</body>

</html>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>