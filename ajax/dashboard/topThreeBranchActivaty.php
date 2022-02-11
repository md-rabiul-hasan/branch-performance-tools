<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../login.php');
    exit;
  }
 ?>
<?php
	header('Content-Type: application/json');
		$data = array(
			array("branch_full_name"=>"Kawran Bazar","total_transection"=>6199),
			array("branch_full_name"=>"Shetabgonj","total_transection"=>2409),
			array("branch_full_name"=>"Dahanmodi","total_transection"=>5922),
		);
	echo json_encode($data);
 ?>