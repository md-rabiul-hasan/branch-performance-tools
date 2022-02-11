 <!-- Registation Section Start -->
<?php 
  $error_message = '';
	//Database Connection 
  include 'db/database_connection.php';
  
  if(isset($_POST['register'])){
    $fullname        = mysqli_real_escape_string($conn,$_POST['fullname']);
    $email           = mysqli_real_escape_string($conn,$_POST['email']);
    $password        = mysqli_real_escape_string($conn,md5($_POST['password']));
    $retype_password = mysqli_real_escape_string($conn,md5($_POST['retype_password']));
    $role            = mysqli_real_escape_string($conn,$_POST['role']);

    if(empty($fullname) || empty($email) || empty($password) || empty($retype_password) || empty($role)){
      echo "<script>alert('please fill up all required information')</script>";	
      echo "<script>window.location='login.php'</script>";//failed
    }else{
      if($password != $retype_password){
        echo "<script>alert('password does not match')</script>";	
        echo "<script>window.location='login.php'</script>";//failed
      }else{
        $sql = "INSERT INTO users (fullname,email,password,role,status) VALUES ('$fullname','$email','$password','$role',0)";
        $query = mysqli_query($conn,$sql);
        if($query){
          echo "<script>alert('Registration Successfully. Waiting For Account Approved Please Login')</script>";	
          echo "<script>window.location='login.php'</script>";//failed
        }else{
          die("Registration Failed ".mysqli_error());
        }
      }
    }
  }
?>
<!-- Registration Section End -->
<!-- Login Section Start -->
<?php 

  if(isset($_POST['login'])){
    	// Session Start
      session_start();

      // input data
      $email    = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);

      // Password Hashed
      $hashedPassword = md5($password);

      // if email and password not empty
      if(isset($email) && isset($password)){
      //findout email
      $sql    = "SELECT * FROM users WHERE email='$email' AND password='$hashedPassword'";
      $query  = mysqli_query($conn,$sql);
      $result = mysqli_fetch_array($query);
      $row    = mysqli_num_rows($query);

      if($row>0){
        //email found, now password checking
        if( $result['password'] != $hashedPassword ){
          echo "<script>alert('Wrong Password')</script>"; 
          echo "<script>window.location='login.php'</script>";//failed
        }else{
            //status check
            if($result['status'] == 1){
              $_SESSION['id']         = $result['id'];
              $_SESSION['fullname']   = $result['fullname'];
              $_SESSION['email']      = $result['email'];
              $_SESSION['role']       = $result['role'];
              header("location:index.php");
            }else{
              echo "<script>alert('Your account is blocked. Please contact with authority')</script>";  
              echo "<script>window.location='login.php'</script>";//failed
            }
        }
      }else{
        echo "<script>alert('Email or Password Does Not Valid')</script>"; 
        echo "<script>window.location='login.php'</script>";//failed
      }
    }
  }

 ?>
<!-- Login Section End -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
   
    <title>DBL - AUTHENTICATION</title>
    <style>
      .login-content .login-box.flipped {
          min-height: 725px;
          max-height: auto!important;
      }
      .help-block {
          color: red!important;
      }
      #register-from .from-group{
        margin-top: 0!important;
      }
      .login-content .login-box {
          height: 450px;
      }
      .login_logo{
        width: 265px!important;
      }
    </style>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="login-box">
        <form class="login-form" id="login-form" action="" method="post">
          <h3 class="login-head">
            <img src="assets/img/dbl-logo.jpg" class="img-fluid login_logo" alt="">
          </h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" required="required" type="text" name="email" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" required="required" type="password" name="password" placeholder="Password">
          </div>
          <div class="from-group">
            <?php echo $error_message; ?>
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <span class="label-text">&copy powered by venture solution limited</span>
                </label>
              </div>
            </div>
          </div>
          <div class="form-group btn-container">
            <input type="submit" name="login" class="btn btn-primary btn-block" value="SIGN IN">
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/validation.js"></script>
    <script src="assets/js/main.js"></script>
     <script type="text/javascript">
  // Validation Js

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

 

  $("#register-from").validate({
    rules: {
      fullname: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
      },
      retype_password: {
        required: true,
        equalTo: '#password'
      },
      role: {
        required: true
      }
    },
    messages: {
      fullname: {
        required: 'Please enter an full name.',
        lettersonly : 'invalid format',
      },
      email: {
        required: 'Please enter an email address.',
        email: 'Please enter a <em>valid</em> email address.',
      },
      password: {
        required: 'please enter a new password.',
      },
      retype_password: {
        required: 're-type your password',
        equalTo: 'password does not match'
      },
      role: {
        required: 'please select employee role.',
      },
    }
  });


    // Login form validation 
    $("#login-form").validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
        }
      },
      messages: {
        email: {
          required: 'Please enter an email address.',
          email: 'Please enter a <em>valid</em> email address.',
        },
        password: {
          required: 'please enter your password.',
        }
      }
    });

});

    </script>
  </body>
</html>