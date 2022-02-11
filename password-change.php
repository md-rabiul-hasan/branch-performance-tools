<?php 
 include 'db/database_connection.php';
  session_start();
  
  if(!isset($_SESSION['id'])) {
    header("location:login.php");
    exit;
  }

  include 'partial/_header.php';
 ?>

   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Password Change</h1>
          <p>DBL - Branch Performance User Password Change</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="col-lg-6 offset-lg-3">
        <form id="password-change" action="partial/inc/password-change.php" method="post">
          <div class="tile">
            <h3 class="tile-title">Password Change</h3>
            <div class="tile-body">
              
                <div class="form-group">
                  <label class="control-label">Old Password</label>
                  <input type="password" name="old_password" class="form-control" placeholder="enter your old password">
                </div>
                <div class="form-group">
                  <label class="control-label">New Password</label>
                  <input type="password" name="new_password" id="new_password" class="form-control" placeholder="create new password">
                </div>
                <div class="form-group">
                  <label class="control-label">Re-Type Password</label>
                  <input type="password" name="confirm_password" class="form-control" placeholder="re-type password">
                </div>
              
            </div>
            <div class="tile-footer">
              <input type="submit" name="password_change" value="Submit" class="btn btn-primary">
            </div>
          </div>
          </form>
        </div>
    </main>
    


 <?php 
  // include footer file
  include 'partial/_footer.php';
  ?>
  <script type="text/javascript" src="assets/js/plugins/validation.js"></script>
  <script>
    
////////////////////////////////////////////////////
///     From Validation 
///////////////////////////////////////////////////////

 $(function() {

     $.validator.setDefaults({
         errorClass: 'help-block',
         highlight: function(element) {
             $(element)
                 .closest('.form-group')
                 .addClass('has-error');
         },
         unhighlight: function(element) {
             $(element)
                 .closest('.form-group')
                 .removeClass('has-error');
         }
     });



     $("#password-change").validate({
         rules: {
             old_password: {
                 required: true,
             },
             new_password: {
                 required: true,
             },
             confirm_password : {
              required : true,
              equalTo: '#new_password'
             }
         },
         messages: {
            old_password: {
                 required: 'please enter your old password ',
             },
             new_password: {
                 required: 'please enter your new password',
             },
             confirm_password : {
              required : 'please re-type your new password',
              equalTo: 'password does not match'
             }
         }
     });
 });

  </script>