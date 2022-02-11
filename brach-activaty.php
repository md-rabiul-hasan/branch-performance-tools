<?php 
   include 'db/database_connection.php';
   session_start();
   
   if(!isset($_SESSION['id'])) {
     header("location:login.php");
     exit;
   }
   
   include 'partial/_header.php';
   ?>
<style>
   .embed-responsive {
   position: relative;
   height: 10000px!important;
   display: block;
   width: 100%;
   padding: 0;
   overflow: hidden;
   }
</style>
<link rel="stylesheet" href="assets/css/spin_loader.css">
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-bar-chart"></i> Branch Activaty</h1>
         <p>Showing Top 3 DBL Branch Activaty</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-bar-chart fa-lg"></i>
         </li>
         <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
         </li>
      </ul>
   </div>
   <!-- Search Select Section Start -->
   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="tile">
            <form action="" id="searchActivatyform">
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="from-group">
                        <label class="control-label font-weight-bold">Select Month</label>
                        <input type="text" class="form-control datepicker" autocomplete="off" name="select_month" placeholder="Select Month" id="select_month" required="required">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <p></p>
                        <input type="submit" name="search" id="search" class="btn btn-primary btn-block mt-4" value="seach">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Search Select Section End -->
   <!-- All Branch Activaty Show Current Month Start -->
   <div class="row" id="cm_all_branch_activaty">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="tile">
            <h3 class="tile-title">Monthly Total Branch Activity</h3>
            <hr>
            <div id="current_month_branch_activaty_loader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="current_month_branch_activaty_data">
               <canvas class="embed-responsive-item" id="currentMonthActivaty" style="height: 10000px!important;"></canvas>
            </div>
            <div class="text-uppercase" id="current_month_branch_activaty_not_found"></div>
         </div>
      </div>
   </div>
   <!-- All Branch Activaty Show Current Month End -->
   <!-- All Branch Activaty Show Search Section Start -->
   <div class="row" id="searchBranchActivaty">
      <div class="col-lg-12  col-md-12 col-sm-12">
         <div class="tile">
            <h3 class="tile-title">Monthly Total Branch Activity</h3>
            <hr>
            <div id="search_branch_activaty_data_fetch_loader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="search_branch_activaty_data">
               <canvas class="embed-responsive-item"  id="searchBranchActivatyResult" style="height: 10000px!important;"></canvas>
            </div>
            <div class="text-uppercase" id="search_bracnh_activaty_data_not_found"></div>
         </div>
      </div>
   </div>
   <!-- All Branch Activaty Show Search Section End -->
</main>
<?php include 'partial/_footer.php'; ?>
<script type="text/javascript" src="assets/js/plugins/chart.js"></script>
<script type="text/javascript" src="assets/js/plugins/validation.js"></script>
<script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
<!-- Branch Activaty Js -->
<script type="text/javascript" src="assets/js/branch/branch-activaty.js"></script>
<script>
   $('.datepicker').datepicker({
      format: "yyyy-mm",
      viewMode: "months", 
      minViewMode: "months"
   });
</script>
</body>
</html>