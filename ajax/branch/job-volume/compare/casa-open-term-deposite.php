<?php 
  session_start();
  include '../../../../db/database_connection.php';
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../../login.php');
    exit;
  }
 ?>
<?php 
	$first_branch  = getBranchNameFromShortCode($_REQUEST['first_branch']);
	$second_branch = getBranchNameFromShortCode($_REQUEST['second_branch']);
	$third_branch  = getBranchNameFromShortCode($_REQUEST['third_branch']);
	// Dummy Data
	header('Content-Type: application/json');
	$data = array(
		array("branch_name"=>"$first_branch","casa_open"=>1043,"term_deposite"=>1074),
		array("branch_name"=>"$second_branch","casa_open"=>2120,"term_deposite"=>2115),
		array("branch_name"=>"$third_branch","casa_open"=>2215,"term_deposite"=>3799),
	);
	echo json_encode($data);
 ?>