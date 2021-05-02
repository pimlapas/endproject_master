<?php
$query = "SELECT * FROM tbl_prd_type ORDER BY t_id ASC" or die("Error:" . mysqli_error($conn));
$result = mysqli_query($conn, $query);
?>
                    <link href="fontawesome/css/all.css" rel="stylesheet"> 

<!--start  menu -->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="productall.php">Shop2hands</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="report_problem.php">แจ้งปัญหา</a>
                        </li>
                      
                        <?php
                        if (!empty($_SESSION['m_name'])) {

                            echo '<li class="nav-item"><a class="nav-link" href="databoad/member">';
                            echo '<i class="far fa-user-circle"></i>  คุณคือ' . $_SESSION['m_name'];

                            echo '</a></li>';
                        }
                        ?>
                    </ul>

                
                    <a type="button" class="btn btn-danger" href="databoad/logout.php" onclick="return confirm('ยืนยันออกจากระบบ?');">ออกจากระบบ</a></a> &nbsp;
                    <a class="btn btn-success" href="cart2.php">
                        <i class="fas fa-shopping-cart"></i> ตระกร้าสินค้า
                    </a>

                    <a class="nav-link" href="cart2.php"></a>



                    <form class="form-inline my-2 my-lg-0" method="get" action="productall.php">
                        <input class="form-control mr-sm-2" type="search" placeholder="ค้นหาสินค้า" aria-label="Search" name="search" required>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >ค้นหา</button>
                    </form>


                </div>
            </nav>
        </div>
    </div>
</div>
<!--end  menu -->