<?php 
  include '../../db/database_connection.php';
  session_start();
  date_default_timezone_set("Asia/Dhaka");
  
  if(!isset($_SESSION['id'])) {
    header("location:login.php");
    exit;
  }
 
  if(isset($_POST['target_name'])){
      $target_name       = $_POST['target_name'];
      $user_id           = $_SESSION['id'];
      $current_date_time = date("Y-m-d h:i:s a");
      $sql               = "INSERT INTO `target_lists`(`name`, `user_id`, `operation_time`) VALUES ('$target_name','$user_id','$current_date_time')";
      $query             = mysqli_query($conn, $sql);
      if($query){
        header("location:index.php");
      }
  }
