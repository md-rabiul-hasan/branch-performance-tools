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
		array("branch_full_name"=>"Head Office","total_transection"=>23),
		array("branch_full_name"=>"Kawran Bazar Branch","total_transection"=>53),
		array("branch_full_name"=>"Cumilla Branch","total_transection"=>35),
	);
	echo json_encode($data);

  ?>