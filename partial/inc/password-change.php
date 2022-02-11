<?php 
	include '../../db/database_connection.php';
	session_start();
	if(!isset($_SESSION['id'])){
		header("location:../../login.php");
		exit;
	}



	$old_password = $_POST['old_password'];
	$new_password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];

	// find out old data
	$sql = "SELECT * FROM users WHERE email= '".$_SESSION['email']."' AND id='".$_SESSION['id']."' ";

	$query = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_assoc($query)){
		if( md5($old_password) == $row['password'] ){
			// check password match
			if($new_password == $confirm_password){
				$updateSql = "UPDATE  users set password = '".md5($new_password)."' WHERE id=".$row['id']." ";
				$updateQuery = mysqli_query($conn,$updateSql);
				if($updateQuery){
					session_destroy();
					echo "<script>alert('Password Change Successfully :)')</script>";	
					echo "<script>window.location='../../login.php'</script>";//failed
				}else{
					die("connection error" . mysqli_error($conn));
				}
			}else{
				echo "<script>alert('Password Does Not Match ')</script>";	
				echo "<script>window.location='../../password-change.php'</script>";//failed
			}
		}else{
			echo "<script>alert('Old Password Does Not Match ')</script>";	
			echo "<script>window.location='../../password-change.php'</script>";//failed
		}
	}

































 ?>