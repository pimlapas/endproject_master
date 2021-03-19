<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>หน้าสมัครสมาชิก</title>
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

              <a class="navbar-brand" href="../index.php">HOME</a>
            </div>

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
        <h4> สมัครสมาชิก </h4>
        <form action="member_form_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">

          <div class="col-sm-2 control-label">
            สถานะ:
          </div>
          <div class="form-group">
            <select name="m_level" class="col-sm-2 control-label" required style="width:100px;">
              <option value="MEMBER">สมาชิก</option>
            </select>
          </div>

          <div class="form-group">
            <div class="col-sm-2 control-label">
              Username:
            </div>
            <div class="col-sm-4">
              <input type="text" name="m_username" required class="form-control" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2 control-label">
              Password:
            </div>
            <div class="col-sm-4">
              <input type="password" name="m_password" required class="form-control">
            </div>
          </div>


          <div class="col-sm-2 control-label">
            Fname:
          </div>

          <div class="form-group">
            <select name="m_fname" class="col-sm-2 control-label" required style="width:100px;">
              <option value="นาย">นาย</option>
              <option value="นาง">นาง</option>
              <option value="นางสาว">นางสาว</option>
            </select>
          </div>

          <div class="form-group">
            <div class="col-sm-2 control-label">
              Name:
            </div>
            <div class="col-sm-4">
              <input type="text" name="m_name" required class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2 control-label">
              Lastname:
            </div>
            <div class="col-sm-4">
              <input type="text" name="m_lname" required class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2 control-label">
              Address:
            </div>
            <div class="col-sm-6">
              <input type="text" name="m_address" required class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2 control-label">
              E-mail:
            </div>
            <div class="col-sm-6">
              <input type="email" name="m_email" required class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2 control-label">
              Phone:
            </div>
            <div class="col-sm-6">
              <input type="text" name="m_phone" required class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-2 control-label">
              Photo:
            </div>
            <div class="col-sm-6">
              <input type="file" name="m_img" required class="form-control" accept="image/*">
            </div>
          </div>
          <br>

          <div class="form-group">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-4">
              <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
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

        </p>
      </div>
    </div>
  </div>

  <!-- end footer -->

</body>

</html>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>