 <?php 
require_once("connection.php");
$obj_con = new connection();
$connection = $obj_con->connect();

class model{
function get_all_data_where($connection,$table,$where){
	$select="select * from $table where $where";
	$result=$connection->query($select);

	$a = array();
	while($row = $result->fetch_object()){
			$a[]=$row;
		}
		
		return $a;
}

function get_field_where($connection,$field,$table,$where){
	$select="select $field from $table where $where";
	
	$result=$connection->query($select);
	$a = array();
	while($row = $result->fetch_object()){
			$a[]=$row;
		}
		return $a;
}

function get_dis_field_where($connection,$field,$table,$where){
	$select="select distinct $field from $table where $where";
	
	$result=$connection->query($select);
	$a = array();
	while($row = $result->fetch_object()){
			$a[]=$row;
		}
		return $a;
}

function get_all_where_limit($connection,$table,$where,$id){
	$select="select * from $table where $where order by $id desc limit 1";
	
	$result=$connection->query($select);
	$a = array();
	while($row = $result->fetch_object()){
			$a[]=$row;
		}
		return $a;
}


function get_all_data($connection,$table){
		$a = array();
		$select="select * from $table";
		
		$result=$connection->query($select);
		
		while($row = $result->fetch_object()){
			$a[]=$row;
		}
		 return $a;
}

function get_field($connection,$field,$table){
	$a = array();
		$select="select $field from $table";
		
		$result=$connection->query($select);
		
		while($row = $result->fetch_object()){
			$a[]=$row;
		}
		return $a;
}

function get_dis_field($connection,$field,$table){
	$a = array();
		$select="select distinct $field from $table";
		
		$result=$connection->query($select);
		
		while($row = $result->fetch_object()){
			$a[]=$row;
		}
		return $a;
}


function insert_into($connection,$table,$data)
{
$keys=array_keys($data);
$keysi=implode(",", $keys);
$values=array_values($data);
$valuesi=implode("','", $values);

$query="insert into $table ($keysi) values('$valuesi');";
print_r($query);
$connection->query($query);

}

function delete_where($connection,$table,$where){
$keys=array_keys($where);
$keysi=implode(",", $keys);
$values=array_values($where);
$valuesi=implode("','", $values);

	$delete = "delete from $table where $keysi='$valuesi'";
	$connection->query($delete);
	
}

public function update_data($conn,$table,$data,$where){
$dk=array_keys($data);
$keys=implode(",",$dk);
$dv=array_values($data);
$values=implode(",",$dv);

$wk=array_keys($where);
$wkeys=implode(",",$wk);
$wv=array_values($where);
$wvalues=implode(",",$wv);

$update="update $table set ";
$size=sizeof($data);$i=0;
foreach ($data as $key => $value) {
	if($size==$i+1){
		$update.="$key='$value'";
	}
	else{
		$update.="$key='$value',";
	}
	$i++;
}
$update.=" where $wkeys='$wvalues';";

$conn->query($update);
}
}
?>