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
	//Dummy Data
	header('Content-Type: application/json');
	$data = array(
		array("branch_name"=>"$first_branch","cash_deposite"=>4523,"withdrawal"=>2074,"fundtransfer"=>969,"remitance"=>231),
		array("branch_name"=>"$second_branch","cash_deposite"=>1244,"withdrawal"=>3423,"fundtransfer"=>123,"remitance"=>283),
		array("branch_name"=>"$third_branch","cash_deposite"=>4323,"withdrawal"=>2143,"fundtransfer"=>902,"remitance"=>188),
	);
	echo json_encode($data);
 ?>
