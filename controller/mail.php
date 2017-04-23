<?php require_once("../model.php"); ?>
<?php
$model = new model();

$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message =$_REQUEST['msg'];

mail("admin@doctordevice.in", $subject,$message,$email);
?>