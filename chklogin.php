<?php
session_start();
if (isset($_POST['m_username'])) {
    //connection
    include("conn.php");
    //รับค่า user & m_password
    $m_username = mysqli_real_escape_string($conn, $_POST['m_username']);
    $m_password = mysqli_real_escape_string($conn, md5($_POST['m_password']));
    //query 
    $sql = "SELECT * FROM tbl_member 
                  WHERE  m_username='" . $m_username . "' 
                  AND  m_password='" . $m_password . "' ";

    // echo $sql;

    // exit;

    $result = mysqli_query($conn, $sql);



    // echo mysqli_num_rows($result);

    // exit;


    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);

        $_SESSION["m_id"] = $row["m_id"];
        $_SESSION["m_name"] = $row["m_name"];
        $_SESSION["m_level"] = $row["m_level"];
        $_SESSION["m_address"] = $row["m_address"];
        $_SESSION["m_email"] = $row["m_email"];
        $_SESSION["m_phone"] = $row["m_phone"];
        
        $ip = $_SERVER['REMOTE_ADDR'];  


        if ($_SESSION["m_level"] == "ADMIN") { //ถ้าเป็น admin ให้กระโดดไปหน้า admin page
            
             

            //echo 'R U ADMIN';
            $ref_m_id = $_SESSION["m_id"];
            $sql2 = "INSERT INTO tbl_login_log (ref_m_id, ip) VALUES ($ref_m_id, '$ip')";
            $result2 = mysqli_query($conn, $sql2) or die("Error in query: $sql2 " . mysqli_error($conn));


            Header("Location: databoad/admin/");
        }


        if ($_SESSION["m_level"] == "SELLER"){
            $ref_m_id = $_SESSION["m_id"];
            $sql2 = "INSERT INTO tbl_login_log (ref_m_id, ip) VALUES ($ref_m_id, '$ip')";
            $result2 = mysqli_query($conn, $sql2) or die("Error in query: $sql2 " . mysqli_error($conn));

            Header("Location: databoad/seller/");
        }


        

        if ($_SESSION["m_level"] == "MEMBER") {  //ถ้าเป็น member ให้กระโดดไปหน้า user page
            //echo 'R U MEMBER';

            //insert login log
            $ref_m_id = $_SESSION["m_id"];

            // echo 'ref_m_id = '.$ref_m_id;
            // exit;     
            $sql2 = "INSERT INTO tbl_login_log (ref_m_id, ip) VALUES ($ref_m_id, '$ip')";
            $result2 = mysqli_query($conn, $sql2) or die("Error in query: $sql2 " . mysqli_error($conn));

            // echo $sql2;

            // exit; 
            Header("Location: databoad/member/");
        }
    } else {
        echo "<script>";
        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
    }
} else {


    Header("Location: login.php"); //user & m_password incorrect back to login again

}
