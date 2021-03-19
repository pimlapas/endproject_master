<?php

session_start();
//print_r($_SESSION);

    include 'conn.php';
    include 'header.php';
    include 'banner.php';
    include 'nav2.php';
    include 'list_prd_by_search.php';
    include 'footer.php';

    $act = (isset($_GET['act']) ? $_GET['act'] : '');
    
?>
