<?php require_once("../model.php"); ?>
<?php
$model = new model();
$data= $model->get_all_data($connection,"mobile_company order by mob_name");
//print_r
echo json_encode($data);
?>