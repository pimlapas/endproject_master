<?php include('hder.php'); //css 
//query cart detail
$o_id = mysqli_real_escape_string($conn, $_GET['o_id']);
$querycartdetail = "SELECT d.*,p.p_img, p.p_name, p.p_price, h.*, b.b_name, b.b_number
 FROM order_detail as d
 INNER JOIN order_head as h ON d.o_id = h.o_id
 INNER JOIN tbl_prd as p ON d.p_id = p.p_id
 INNER JOIN tbl_bank as b ON h.b_id = b.b_id
 WHERE d.o_id=$o_id";
$rscartdetail = mysqli_query($conn, $querycartdetail);
$rowdetail = mysqli_fetch_array($rscartdetail);
// echo '<pre>';
// print_r($rowdetail);
// echo '</pre>';
$querybank = "SELECT * FROM tbl_bank";
$rsbank = mysqli_query($conn, $querybank);

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
            <h3 align="center"> รายละเอียดการแจ้งเลข EMS </h3>
                <h5 align="center">--------------------------------------------------------------------------------------</h5>
                <h4 align="center">
                <i class="fas fa-shipping-fast"></i>
                <b>เลขพัสดุ : </b> <font color="#ff0000"> <?php echo $rowdetail['o_ems'] ; ?>  </font>
                </h4>
                <h4 align="center"><i class="fas fa-clock"></i> <b>วันที่ส่ง : </b><font color="#ffa500"><?php echo date('d/m/Y H:i:s' ,strtotime($rowdetail['o_ems_date'])); ?> น. </font></h4>
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
               <br><br>

                </h4>

                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th width="5%" bgcolor="#EAEAEA">รหัส</th>
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
                <h4>แสดงรายละเอียดธนาคารที่โอนเงิน</h4>
                <div class="col-sm-6">
                    ธนาคารที่โอนเงิน : <?php echo $rowdetail['b_name']; ?>
                    เลขบัญชี : <?php echo $rowdetail['b_number']; ?> <br>
                    จำนวนเงินที่โอน : <?php echo $rowdetail['o_slip_total']; ?> <br>
                    วัน/เดือน/ปี : <?php echo $rowdetail['o_slip_date']; ?> <br>
                    
                    <br>
                    <img src="../imgslip/<?php echo $rowdetail['o_slip']; ?>" width="100%">
                </div>
               
            </div>
        </div>
    </div>
    <?php include('footer.php'); //footer
    ?>
</body>
<?php include('js.php'); //js
?>