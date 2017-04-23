<?php require_once("../model.php"); ?>
<?php
$model = new model();
$id=$_REQUEST['id'];
$pb=$_REQUEST['pb_radio'];
$adm_cmt =$_REQUEST['adm-cmt'];
$model->update_data($connection,"cus_table",array("pb_status"=>$pb,"admin_cmt"=>$adm_cmt),array("id"=>$id));
?>