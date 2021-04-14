<?php 
$query = "SELECT * FROM tbl_bank" or die("Error:" . mysqli_error($conn));
$result = mysqli_query($conn, $query);
?>
<h4> Form เพิ่มบัญชีธนาคาร  </h4>
<form action="bank_form_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  
   
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อเจ้าของบัญชี :
    </div>
    <div class="col-sm-7">
      <input type="text" name="b_name" required class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2 control-label">
      เลขบัญชี  :
    </div>
    <div class="col-sm-7">
      <input type="text" name="b_number" required class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อธนาคาร  :
    </div>
    <div class="col-sm-7">
      <input type="text" name="b_owner" required class="form-control">
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-sm-4">
       <input type="hidden" name="s_id"  value="<?php echo $m_id;?>">
      <button type="submit" class="btn btn-primary">บันทึก</button>
    </div>
  </div>
</form>
<script>
initSample();
</script>