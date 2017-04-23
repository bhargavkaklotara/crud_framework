<?php require_once("../model.php"); ?>
<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$mob =$_REQUEST['mob'];
$address =$_REQUEST['address'];
$city =$_REQUEST['city'];
$pb_radio =$_REQUEST['pb_radio'];
$pb_option=$_REQUEST['pb_option'];
$mob_company=$_REQUEST['mob_company'];
$mob_model=$_REQUEST['mob_model'];
$lap_company=$_REQUEST['lap_company'];
$lap_model=$_REQUEST['lap_model'];
$pb_des=$_REQUEST['pb_des'];
$date = date("Y-m-d"); 
$model = new model();
$model->insert_into($connection,"cus_table",array("name"=>$name,"email"=>$email,"mob"=>$mob,"address"=>$address,"city"=>$city,"pb_radio"=>$pb_radio,"pb_option"=>$pb_option,"mob_company"=>$mob_company,"mob_model"=>$mob_model,"lap_company"=>$lap_company,"lap_model"=>$lap_model,"pb_des"=>$pb_des,"date"=>$date));
?>