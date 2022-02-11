<?php 
  session_start();
  include '../../../db/database_connection.php';
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../login.php');
    exit;
  }
 ?>
<?php 
  $first_branch  = getBranchNameFromShortCode($_REQUEST['first_branch']);
  $second_branch = getBranchNameFromShortCode($_REQUEST['second_branch']);
  $third_branch  = getBranchNameFromShortCode($_REQUEST['third_branch']);
 	header('Content-Type: application/json');
	$data = array(
		array("branch_full_name"=>"$first_branch","total_transection"=>15),
		array("branch_full_name"=>"$second_branch","total_transection"=>55),
		array("branch_full_name"=>"$third_branch","total_transection"=>30),
	);
	echo json_encode($data);

  ?>

