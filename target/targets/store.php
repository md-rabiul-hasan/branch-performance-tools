<?php 
  include '../../db/database_connection.php';
  session_start();
  date_default_timezone_set("Asia/Dhaka");
  
  if(!isset($_SESSION['id'])) {
    header("location:login.php");
    exit;
  }
 
  $target_list_id = $_POST['target_list_id'];
  $value_type     = $_POST['value_type'];
  $value          = $_POST['value'];
  $target_type    = $_POST['target_type'];
  $duration       = $_POST['duration'];
  $division_id    = $_POST['division_id'];
  $branch_id      = $_POST['branch_id'];
  $employee_id    = $_POST['employee_id'];

  $sql = "INSERT INTO `targets`(`target_list_id`, `value`, `value_type`, `target_type`, `duration`, `division_id`, `branch_id`, `employee_id`)  VALUES ('$target_list_id','$value','$value_type','$target_type','$duration','$division_id','$branch_id','$employee_id')";
  file_put_contents("h.txt", $sql);
  $query = mysqli_query($conn, $sql);
  if($query){
    header("location:index.php");
  }

