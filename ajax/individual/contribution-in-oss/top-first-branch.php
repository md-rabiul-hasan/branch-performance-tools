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
		array("employee_name"=>"M123","total_transection"=>70),
		array("employee_name"=>"Y012","total_transection"=>80),
		array("employee_name"=>"Z012","total_transection"=>25),
	);
	echo json_encode($data);
 ?>