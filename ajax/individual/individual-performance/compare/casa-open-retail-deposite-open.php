<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../../login.php');
    exit;
  }
 ?>
<?php 
	// Dummy Data
	header('Content-Type: application/json');
	$data = array(
		array("employee_name"=>"YO50","casa_open"=>1120,"term_deposite"=>2074),
		array("employee_name"=>"M019","casa_open"=>1120,"term_deposite"=>2215),
		array("employee_name"=>"H01E","casa_open"=>3215,"term_deposite"=>4799),
	);
	echo json_encode($data);
 ?>