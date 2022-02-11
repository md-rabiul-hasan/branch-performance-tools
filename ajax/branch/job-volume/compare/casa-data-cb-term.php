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
		array("branch_name"=>"$first_branch","td_partial_withdrawal"=>2243,"td_withdrawal"=>2074,"account_close"=>2312,"customer_data_update"=>1231,"kyc"=>1231,"tp"=>3221,"cbr"=>1231),
		array("branch_name"=>"$second_branch","td_partial_withdrawal"=>1520,"td_withdrawal"=>2015,"account_close"=>2322,"customer_data_update"=>1134,"kyc"=>4532,"tp"=>2342,"cbr"=>4532),
		array("branch_name"=>"$third_branch","td_partial_withdrawal"=>3315,"td_withdrawal"=>4599,"account_close"=>2112,"customer_data_update"=>3522,"kyc"=>4532,"tp"=>2323,"cbr"=>2342),
	);
	echo json_encode($data);
 

