<?php
$password = $_POST[password];
$confirmpassword = $_POST[confirmpassword];

if($password == "" & $confirmpassword == "" ) {
echo "กรุณากรอกรหัสผ่านทั้ง 2 ช่อง";
} else if($password != $confirmpassword){
echo "รหัสผ่านไม่ตรงกัน";
} else {
echo "รหัสผ่านตรงกัน";
}

?>