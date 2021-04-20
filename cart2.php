<?php
session_start();
 print_r($_SESSION);
 

if ($_SESSION['m_name'] == '') {
    //echo 'คุณยังไม่ได้ login';
    //header("Location: databoad/login.php");
    echo "<script type='text/javascript'>";
    echo "alert('คุณยังไม่ได้ login');";
    echo "window.location = 'login.php'; ";
    echo "</script>";
}

include 'conn.php';



$p_id = mysqli_real_escape_string($conn, $_GET['p_id']);
$act = mysqli_real_escape_string($conn, $_GET['act']);

/*  $sql1 = "SELECT * FROM tbl_prd WHERE p_id=$p_id";
$query1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($query1); 
 */


if ($act == 'add' && !empty($p_id) ) {
    if ($_SESSION['cart'] == null) {
        $_SESSION['cart'][$p_id]++;
    } else if (isset($_SESSION['cart'][$p_id]) == $p_id) {
        $_SESSION['cart'][$p_id]++;
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('สั่งซื้อได้ร้านเดียวเท่านั้นเท่านั้น');";
        echo "window.location = '#'; ";
        echo "</script>";
    }
}


if ($act == 'remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
{
    unset($_SESSION['cart'][$p_id]);
    
    
}

if ($act == 'update') {
    $amount_array = $_POST['amount'];
    foreach ($amount_array as $p_id => $amount) {
        $_SESSION['cart'][$p_id] = $amount;
    }
}

if ($act == 'cancel')  //ยกเลิกการสั่งซื้อ
{
    unset($_SESSION['cart']);
    


}

include 'header.php';
include 'banner.php';
include 'nav2.php';

?>
<!--start  cart -->
<br>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <h3> ตะกร้าสินค้า <a href="productall.php" class="btn btn-primary"> กลับหน้ารายการสินค้า </a></h3>
            <form id="frmcart" name="frmcart" method="post" action="?act=update">
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th width="10%" bgcolor="#EAEAEA">ชื่อร้าน</th>
                        <th width="5%" bgcolor="#EAEAEA">#</th>
                        <th width="10%" bgcolor="#EAEAEA">img</th>
                        <th width="55%" bgcolor="#EAEAEA">สินค้า</th>
                        <th width="10%" align="center" bgcolor="#EAEAEA">ราคา</th>
                        <th width="10%" align="center" bgcolor="#EAEAEA">จำนวน</th>
                        <th width="5%" align="center" bgcolor="#EAEAEA">รวม(บาท)</th>
                        <th width="5%" align="center" bgcolor="#EAEAEA">ลบ</th>
                    </tr>
                    <?php
                    $total = 0;


                    if (!empty($_SESSION['cart'])) {


                        foreach ($_SESSION['cart'] as $p_id => $qty) {                   

                            $sql = "SELECT * FROM tbl_prd WHERE p_id=$p_id";
                            $sql2 = "SELECT m_username FROM tbl_member 
                            INNER JOIN tbl_prd 
                            ON  tbl_member.m_id = tbl_prd.ref_m_id
                            WHERE p_id=$p_id";
                            $query = mysqli_query($conn, $sql);
                            $query2 = mysqli_query($conn, $sql2);
                            $row = mysqli_fetch_array($query);
                            $row2 = mysqli_fetch_array($query2);
                            $sum = $row['p_price'] * $qty; //เอาราคาสินค้า * จำนวนที่สั่งซื้อ
                            $total += $sum;
                            $p_qty = $row['p_qty']; //จำนวนสินค้าในสต๊อก


                            echo "<tr>";
                            echo "<td>" . $row2["m_username"] . "</td>";
                            echo "<td>" . @$i += 1 . "</td>";
                            echo "<td>" . "<img src='databoad/pimg/" . $row['p_img'] . "' width='100'>" . "</td>";
                            echo "<td>" . $row["p_name"] . "<br>" . 'จำนวนสินค้าเหลือ : ' . $row["p_qty"] . ' ชิ้น' . "</td>";
                            echo "<td align='right'>" . number_format($row["p_price"], 2) . "</td>";
                            echo "<td align='right'>";
                            echo "<input type='number' name='amount[$p_id]' value='$qty' class='form-control' min='1' max='$p_qty'/></td>";
                            echo "<td align='right'>" . number_format($sum, 2) . "</td>";
                            //remove product
                            echo "<td align='center'><a href='cart2.php?p_id=$p_id&act=remove' class='btn btn-danger btn-sm'>ลบ</a></td>";
                            echo "</tr>";
                        }
                        echo "<tr>";
                        echo "<td colspan='5' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
                        echo "<td align='left' bgcolor='#CEE7FF'></td>";
                        echo "<td align='right' bgcolor='#CEE7FF'>" . "<b>" . number_format($total, 2) . "</b>" . "</td>";
                        echo "<td bgcolor='#CEE7FF'></td>";
                        echo "</tr>";
                    }
                    if ($total > 0) {
                    ?>
                        <tr>
                            <td colspan="8" align="right">
                                <input type="button" class="btn btn-danger" name="btncancel" value="ยกเลิกการสั่งซื้อ" onclick="window.location='cart2.php?act=cancel';" />
                                <input type="submit" class="btn btn-warning" name="button" id="button" value="ปรับปรุง" />
                                <?php if ($act == 'update') {  ?>
                                    <input type="button" class="btn btn-success" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm2.php';" />
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } else {
                        echo '<h4 align="center"> -ไม่มีสินค้าในตะกร้าสินค้า กรุณาไปเลือกสินค้าใหม่อีกครั้ง- </h4>';
                    } ?>
                </table>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>