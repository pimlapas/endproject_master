<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link href="../fontawesome/css/all.css" rel="stylesheet"> 

    <!-- Title Page-->
    <title>Register Shop2Hand</title>
    <!-- Icons font CSS-->
    <link href="form_register/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="form_register/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="form_register/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="form_register/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="form_register/css/main.css" rel="stylesheet" media="all">
    
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                <div >
                  <a href="../index.php" ><i class="fas fa-home"></i></a>
                </div>
                    <h2 class="title"><center>สมัครสมาชิก</center></h2>
                    <form action="member_form_add_db.php" method="POST" class="form-horizontal" enctype="multipart/form-data">

                        <div class="input-group">
                            <label class="label">- สิทธิ์การใช้งาน -</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="m_level">
                                    <option disabled="disabled" selected="selected">เลือกสิทธิ์การใช้งาน</option>
                                    <option value="MEMBER">ผู้ซื้อ</option>
                                    <option value="SELLER">ผู้ขาย</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">ชื่อผู้ใช้งาน</label>
                                    <input class="input--style-4" type="text" name="m_username" required autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <form method="post" action="checkpassword.php">
                        <div class="input-group">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">รหัสผ่าน</label>
                                    <input class="input--style-4" type="password" name="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">ยืนยันรหัสผ่าน</label>
                                    <input class="input--style-4" type="password" name="confirmpassword" required>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="check password" />

                        </form>

                       

                        <div class="input-group">
                            <label class="label">คำนำหน้าชื่อ</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="m_fname"  required>
                                    <option disabled="disabled" selected="selected">- โปรดเลือกคำนำหน้าชื่อ -</option>
                                    <option>นาย</option>
                                    <option>นาง</option>
                                    <option>นางสาว</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">ชื่อจริง</label>
                                    <input class="input--style-4" type="text" name="m_name" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">นามสกุล</label>
                                    <input class="input--style-4" type="text" name="m_lname" required>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">ที่อยู่</label>
                                    <input class="input--style-4" type="address" name="m_address" required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">อีเมล</label>
                                    <input class="input--style-4" type="email" name="m_email" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">เบอร์โทรศัพท์</label>
                                    <input class="input--style-4" type="text" name="m_phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">รูปภาพ</label>
                                    <input type="file" name="m_img" required class="form-control" accept="image/*">
                                </div>
                            </div>
                        </div>

                        <div class="p-t-15">
                        
                            <button class="btn btn--radius-2 btn--blue" type="submit">สมัครสมาชิก</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="form_register/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="form_register/vendor/select2/select2.min.js"></script>
    <script src="form_register/vendor/datepicker/moment.min.js"></script>
    <script src="form_register/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="form_register/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->