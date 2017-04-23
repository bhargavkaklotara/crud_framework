<?php require_once("../model.php"); ?>
<?php
$id=$_POST['id'];
$query="select * from laptop_company join laptop_model where c_id='$id'";
$data=$connection->query($query);

while ($rset=$data->fetch_object()) {
		$a[]=$rset;
}
echo json_encode($a);

?>