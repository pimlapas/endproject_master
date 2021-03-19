<?php
@$search = $_GET['search'];
$query = "
SELECT * FROM `tbl_prd` 
WHERE `p_name` 
LIKE '%$search%' 
ORDER BY `p_id` DESC"
    or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);
//echo $query;
?>

<!-- start prd -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <h3> :: List Product ::</h3><br>
        </div>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <div class="col-sm-6 col-md-3" >
            <div class="card" style="width: 100%;" >
                    <img src="databoad/pimg/<?php echo $row['p_img']; ?>" width="100%">
                    <div class="card-body">
                        <h5>
                            <?php echo $row['p_name']; ?>


                        </h5>
                        <p>
                            <?php echo $row['p_intro']; ?>
                        </p>

                        ราคา <?php echo number_format($row["p_price"], 2); ?> บาท

                        <p>

                            <a href="detail.php?p_id=<?php echo $row['p_id']; ?>" class="btn btn-info" role="button">รายละเอียด</a>
                            <?php if ($row['p_qty'] > 0) { ?>
                                <a href="cart2.php?p_id=<?php echo $row['p_id']; ?>&act=add" class="btn btn-primary">ซื้อสินค้า</a>
                            <?php } else {
                                echo '<button class="btn btn-danger" disabled>สินค้าหมด!!</button>';
                            } ?>
                        </p>

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- end prd -->