<?php
$query = " SELECT *
FROM tbl_bank 
WHERE tbl_bank.s_id=$m_id
ORDER BY tbl_bank.b_id ASC" or die("Error:" . mysqli_error($conn));

//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($conn, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 

echo "<table id='example' class='display table table-bordered table-hover' cellspacing='0'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'>รหัส</th>
<th width='15%'>ธนาคาร</th>
<th width='15%'>เลขบัญชี</th>
<th width='15%'>ชื่อเจ้าของบัญชี</th>
<th width='15%'></th>

</tr>
</thead>
";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td align='center'>" . $row["b_id"] . '.' . "</td> ";
  echo "<td>" . $row["b_name"] .  "</td> ";
  echo "<td>" . $row["b_number"] .  "</td> ";
  echo "<td>" . $row["b_owner"] .  "</td> ";

  

  echo "</td> ";
  

  
  //ลบข้อมูล
  echo "<td align='center'>
  <a href='bank_del_db.php?ID=$row[0]' onclick=\"return confirm('ต้องการลบบัญชี? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";

  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($conn);