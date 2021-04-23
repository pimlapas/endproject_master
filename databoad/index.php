<?php 
include('header.php');


include('banner.php');
include('menu.php');
include('form_search_by_price.php');

        

$act = (isset($_GET['act']) ? $_GET['act'] : '');

if($act=='showbytype'){
	include('list_prd_by_type.php');
}elseif($act=='q') {
	 include('list_prd_by_search_multi_column.php');
}elseif($act=='p') {
	 include('list_prd_by_price.php');
}elseif($act == 'edit') {
		include('member_form_edit.php');
}elseif($act == 'pwd') {
		include('member_form_rwd.php');
}else{
	include('list_prd_v2.php');	
}


include('footer.php');

?>
