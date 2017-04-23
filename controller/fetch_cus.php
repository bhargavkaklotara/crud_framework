<?php require_once("../model.php"); ?>
<?php
$model = new model();
$data= $model->get_all_data($connection,"cus_table order by name");
echo json_encode($data);
?>