<html>
<head>
<title>SHOP2HANDS</title>
</head>
<body>
<?php
	include '../conn.php';

	$strSQL = "SELECT * FROM tbl_member WHERE m_username = '".trim($_POST['txtUsername'])."' 
	OR m_email = '".trim($_POST['txtEmail'])."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
    
    
	if(!$objResult)
	{
			echo "ไม่พบ Username หรือ Email ในระบบ!!";
	}
	else
	{
			echo "รหัสผ่านของคุณถูกส่งไปยังอีเมลล์สำเร็จ.<br>ส่งไปที่อีเมลล์ : ".$objResult["m_email"];		

			$strTo = $objResult["txtEmail"];
			$strSubject = "ข้อมูลบัญขีของคุณ username และ password.";
			$strHeader = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
			$strHeader .= "From: SHOP2HAND \n Reply-To: webmaster@thaicreate.com";
			$strMessage = "";
			$strMessage .= "ยินดีต้อนรับคุณ : ".$objResult["m_name"]."<br>";
			$strMessage .= "Username : ".$objResult["m_username"]."<br>";
			$strMessage .= "Password : ".$objResult["m_password"]."<br>";
			$strMessage .= "=================================<br>";
			$strMessage .= "www.SHOP2HAND.co.th<br>";
			$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader); 

	}
?>
<div class="container">

<a href="../index.php" class="btn btn-primary">กลับหน้าแรก</a>
</div>
</body>
</html>