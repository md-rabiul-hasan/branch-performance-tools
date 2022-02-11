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
		array("branch_full_name"=>"Y023","total_transection"=>23),
		array("branch_full_name"=>"K923","total_transection"=>53),
		array("branch_full_name"=>"B123","total_transection"=>35),
		array("branch_full_name"=>"M123","total_transection"=>70),
		array("branch_full_name"=>"Y012","total_transection"=>80),
		array("branch_full_name"=>"Z012","total_transection"=>25),
	);
	echo json_encode($data);
 ?>