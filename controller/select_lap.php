<?php require_once("../model.php"); ?>
<?php
$model = new model();
$data= $model->get_all_data($connection,"laptop_company order by name");
echo json_encode($data);
?>