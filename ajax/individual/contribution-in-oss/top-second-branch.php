<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../login.php');
    exit;
  }
 ?>
<?php 
	header('Content-Type: application/json');
	$data = array(
		array("employee_name"=>"Y023","total_transection"=>23),
		array("employee_name"=>"K923","total_transection"=>53),
		array("employee_name"=>"B123","total_transection"=>35),
	);
	echo json_encode($data);
 ?>