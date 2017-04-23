<?php require_once("../model.php"); ?>
<?php
$model = new model();
$mob = $_REQUEST['tel'];
$track_data=$model->get_all_data_where($connection,"cus_table","mob=$mob");
echo json_encode($track_data);
?>