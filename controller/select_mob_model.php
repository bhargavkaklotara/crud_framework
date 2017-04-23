<?php require_once("../model.php"); ?>
<?php
$id=$_POST['id'];
$model = new model();
$data= $model->get_all_data_where($connection,"mobile_model","mob_com=$id order by model_name");
echo json_encode($data);


?>