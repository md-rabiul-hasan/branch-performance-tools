<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../../login.php');
    exit;
  }
 ?>
<?php 
	header('Content-Type: application/json');
	$data = array(
		array("employee_name"=>"Y023","total_transection"=>43),
		array("employee_name"=>"K923","total_transection"=>55),
		array("employee_name"=>"B123","total_transection"=>32),
		array("employee_name"=>"M123","total_transection"=>21),
		array("employee_name"=>"Y012","total_transection"=>11),
		array("employee_name"=>"Z012","total_transection"=>10),
	);
	echo json_encode($data);
 ?>