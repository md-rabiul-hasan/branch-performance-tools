<?php 
	session_start();
	if(!isset($_SESSION['id'])){
		header("location:login.php");
		exit;
	}
	include 'partial/_header.php';
 ?>
<main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="assets/img/user/profile.png">
              <h4><?php echo $_SESSION['fullname'] ?></h4>
              <p><?php echo $_SESSION['email'] ?></p>
            </div>
            <div class="cover-image"></div>
          </div>
        </div>
      </div>
    </main>
 <?php 
 	include 'partial/_footer.php';
  ?>