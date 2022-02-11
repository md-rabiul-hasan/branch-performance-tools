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
			array("branch_name"=>"Kawran Bazar","avarage"=>886),
			array("branch_name"=>"Shetabgonj","avarage"=>803),
			array("branch_name"=>"Dahanmodi","avarage"=>987),
		);
	echo json_encode($data);
?>