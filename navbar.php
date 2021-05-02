<?php
$query = "SELECT * FROM tbl_prd_type ORDER BY t_id ASC" or die("Error:" . mysqli_error($conn));
$result = mysqli_query($conn, $query);
?>

<!--start  menu -->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b2c7cd;">
                <a class="navbar-brand" href="index.php">Shop2hands</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">หน้าหลัก <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="report_problem.php">แจ้งปัญหา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="databoad/register.php">สมัครสมาชิก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">ล็อคอิน</a>
                        </li>

                    </ul>



                    <form class="form-inline my-2 my-lg-0" method="get" action="index.php">
                        <input class="form-control mr-sm-2" type="search" placeholder="ค้นหาสินค้า" aria-label="Search" name="search" required>
                        <button class="btn btn-sm btn-outline-secondary" type="submit" >ค้นหา</button>
                    </form>

                </div>
            </nav>
        </div>
    </div>
</div>
<!--end  menu -->