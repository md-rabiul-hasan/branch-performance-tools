<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../login.php');
    exit;
  }
 ?>
<?php 
	// Dummy Data
	header('Content-Type: application/json');
	$data = array(
		array("branch_name"=>"Kawran Bazar","casa_open"=>2043,"term_deposite"=>2074),
		array("branch_name"=>"Shetabgonj","casa_open"=>1120,"term_deposite"=>2215),
		array("branch_name"=>"Danmondi","casa_open"=>3215,"term_deposite"=>4799),
	);
	echo json_encode($data);
 ?>