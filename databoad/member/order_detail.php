<?php include('hder.php'); //css 
//query cart detail
$o_id = mysqli_real_escape_string($conn,$_GET['o_id']);
$querycartdetail = "SELECT d.*,p.p_img, p.p_name, p.p_price, h.*
 FROM order_detail as d
 INNER JOIN order_head as h ON d.o_id = h.o_id
 INNER JOIN tbl_prd as p ON d.p_id = p.p_id
 WHERE d.o_id=$o_id AND h.m_id=$m_id";
$rscartdetail = mysqli_query($conn, $querycartdetail);
$rowdetail = mysqli_fetch_array($rscartdetail);
// echo '<pre>';
// print_r($rowdetail);
// echo '</pre>';
?>
<link href="../../fontawesome/css/all.css" rel="stylesheet">

<body>
    <?php include('nav.php'); //menu
    ?>
    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php include('menu_l.php'); ?>
            </div>
            <div class="col-md-10">
                <h3 align="center"> รายละเอียดการสั่งซื้อ </h3>
                <h4>
               
               <i class="fas fa-user-tie"></i>
               <b>ชื่อผู้รับ : </b><?php echo $rowdetail['o_name']; ?> <br><br>
               <i class="fas fa-map-marker-alt"></i>
               <b>ที่อยู่จัดส่ง :</b><?php echo $rowdetail['o_addr']; ?> <br><br>
               <i class="fas fa-phone-square-alt"></i>
               <b>เบอร์โทร : </b><?php echo $rowdetail['o_phone']; ?> <br><br>
               <i class="fas fa-envelope"></i>
               <b>อีเมล :  </b><?php echo $rowdetail['o_email']; ?> <br><br>
               <i class="fas fa-clock"></i>
               <b>วันที่สั่งซื้อ : </b><?php echo $rowdetail['o_dttm']; ?> <br><br>
               <i class="fas fa-star-half-alt"></i>
               <b>สถานะ :  </b><?php
                       $st = $rowdetail['o_status'];
                       
                       if ($st == 1) {
                            echo '<font color="blue">';
                            echo 'รอการชำระเงิน';
                       } elseif ($st == 2) {
                            echo '<font color="orange">';
                            echo 'ชำระเงินแล้ว';
                       } elseif ($st == 3) {
                            echo '<font color="green">';
                            echo 'ตรวจสอบเลข EMS';
                       } else {
                            echo '<font color="red">';
                            echo 'ยกเลิก';
                       }
                       echo '</font>';
                       ?>
          
           </h4><br><br>
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th width="5%" bgcolor="#EAEAEA">ลำดับ</th>
                        <th width="10%" bgcolor="#EAEAEA">รูป</th>
                        <th width="55%" bgcolor="#EAEAEA">สินค้า</th>
                        <th width="10%" align="center" bgcolor="#EAEAEA">ราคา</th>
                        <th width="10%" align="center" bgcolor="#EAEAEA">จำนวน</th>
                        <th width="5%" align="center" bgcolor="#EAEAEA">รวม(บาท)</th>
                    </tr>
                    <?php
                    $total = 0;
                    foreach ($rscartdetail as $row) {
                        $total += $row["d_subtotal"]; //ราคารวมทั้งออเดอร์
                        echo "<tr>";
                        echo "<td>" . @$i += 1 . "</td>";
                        echo "<td>" . "<img src='../pimg/" . $row['p_img'] . "' width='100'>" . "</td>";
                        echo "<td>" . $row["p_name"] . "</td>";
                        echo "<td align='right'>" . number_format($row["p_price"], 2) . "</td>";
                        echo "<td align='right'>" . number_format($row["d_qty"]) . "</td>";
                        echo "<td align='right'>" . number_format($row["d_subtotal"], 2) . "</td>";
                        //remove product
                        echo "</tr>";
                    } //close foreach
                    echo "<tr>";
                    echo "<td colspan='5' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
                    echo "<td align='right' bgcolor='#CEE7FF'>" . "<b>" . number_format($total, 2) . "</b>" . "</td>";
                    echo "</tr>";
                    ?>
                </table>
            </div>
        </div>
    </div>
    <?php include('footer.php'); //footer
    ?>
</body>
<?php include('js.php'); //js
?>