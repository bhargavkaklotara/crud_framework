<?php require_once("../model.php"); ?>
<?php
$model = new model();
$id=$_REQUEST['id'];
$model->delete_where($connection,"cus_table",array("id"=>$id));
?>