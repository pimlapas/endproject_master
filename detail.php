<?php

session_start();
//print_r($_SESSION);

    include 'conn.php';
    include 'header.php';
    include 'banner.php';


    if ($_SESSION["m_level"] == ("ADMIN" || "SELLER" || "MEMBER")) {
    include 'nav2.php';
    }else{
    include 'navbar.php';
    }

    include 'prd_detail.php';
    include 'footer.php';
?>
