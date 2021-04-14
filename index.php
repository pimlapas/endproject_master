<?php

session_start();
/* print_r($_SESSION); */
 
 
include 'conn.php';

//จัดการ bootstrap ส่วนหัว
include 'header.php';

//รูปหัวข้อเว็บ
include 'banner.php';

//ส่วนหัว
include 'navbar.php';

include 'list_prd_by_search.php';
include 'footer.php';

$act = (isset($_GET['act']) ? $_GET['act'] : '');

?>

<!-- <body>
    <style>
        body {
            background-image: url('img/bgwebb.jpg');
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }
    </style>
</body> -->