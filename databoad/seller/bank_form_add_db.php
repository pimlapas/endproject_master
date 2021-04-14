<meta charset="utf-8">
<?php
//condb
include('../../conn.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// exit();


    $b_name = $_POST["b_name"];
    $b_number = $_POST["b_number"];
    $b_owner = $_POST["b_owner"];
    $s_id = $_POST["s_id"];

	


	
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO tbl_bank
	(
	b_name,
    b_number,
    b_owner,
    s_id
	)
	VALUES
	(
	'$b_name',
	'$b_number',
	'$b_owner',
	'$s_id'
	
	)";

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn));

	// echo '<pre>';
	// echo $sql;
	// echo '</pre>';
	// exit;
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($conn);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'bankaccount.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "window.location = 'bankaccount.php'; ";
	echo "</script>";
}
?>




