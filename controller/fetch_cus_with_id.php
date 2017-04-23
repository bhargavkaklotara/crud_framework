<?php require_once("../model.php"); ?>
<?php
$model = new model();
$id=$_REQUEST['id'];
$data=$model->get_all_data_where($connection,"cus_table","id=$id");



echo json_encode($data);
?>