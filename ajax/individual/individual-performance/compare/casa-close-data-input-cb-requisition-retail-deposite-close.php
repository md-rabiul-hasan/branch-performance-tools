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
		array("employee_name"=>"YO50","td_partial_withdrawal"=>2043,"td_withdrawal"=>2074,"account_close"=>2342,"customer_data_update"=>1231,"kyc"=>1231,"tp"=>3221,"cbr"=>1231),
		array("employee_name"=>"M019","td_partial_withdrawal"=>1120,"td_withdrawal"=>2215,"account_close"=>2342,"customer_data_update"=>1234,"kyc"=>4532,"tp"=>2342,"cbr"=>4532),
		array("employee_name"=>"H01E","td_partial_withdrawal"=>3215,"td_withdrawal"=>4799,"account_close"=>2342,"customer_data_update"=>3522,"kyc"=>4532,"tp"=>2323,"cbr"=>2342),
	);
	echo json_encode($data);
 ?>