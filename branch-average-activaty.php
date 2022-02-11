<?php 
   include 'db/database_connection.php';
   session_start();
   // authentication check
   if(!isset($_SESSION['id'])) {
     header("location:login.php");
     exit;
   }
   // header file included
   include 'partial/_header.php';
   ?>
<style>
   .embed-responsive {
   position: relative;
   height: 9000px!important;
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
         <h1><i class="fa fa-bar-chart"></i> Average Branch Activaty</h1>
         <p>Showing Top 3 DBL Average Branch Activaty</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-bar-chart fa-lg"></i></li>
         <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
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
                        <input type="text" class="form-control datepicker" autocomplete="off" name="select_month" id="select_month" placeholder="Select Month" required="required">
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
   <!-- Search Select Section End  -->
   <!-- All Branch Average Activaty Section Start -->
   <div class="row" id="cm_all_branch_activaty">
      <div class="col-lg-12 col-md-12 col-sm-12 ">
         <div class="tile">
            <h3 class="tile-title">Monthly Average Activity (Per TSO)</h3>
            <hr>
            <div id="current_month_average_branch_activaty_loader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="current_month_branch_activaty_data">
               <canvas class="embed-responsive-item" id="currentMonthAverageActivaty" style="height: 9000px!important;"></canvas>
            </div>
            <div class=" text-uppercase" id="currentMonthAverageDataNotFound"></div>
         </div>
      </div>
   </div>
   <!-- All Branch Average Activaty SectionEnd -->
   <!-- Search Result All Branch Average Activaty Section Start -->
   <div class="row" id="searchdiv">
      <div class="col-lg-12  col-md-12 col-sm-12" >
         <div class="tile">
            <h3 class="tile-title">Monthly Average Activity (Per TSO)</h3>
            <hr>
            <div id="data_search_fetch_loader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="all-branch-search-data">
               <canvas class="embed-responsive-item" id="searchResultAverageActivaty" style="height: 9000px!important;"></canvas>
            </div>
            <div class=" text-uppercase" id="searchDataNotFound"></div>
         </div>
      </div>
   </div>
   <!-- Search Result All Branch Average Activaty Section End -->
</main>
<?php include 'partial/_footer.php'; ?>
<script type="text/javascript" src="assets/js/plugins/chart.js"></script>
<script type="text/javascript" src="assets/js/plugins/validation.js"></script>
<script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
<!-- average activaty js -->
<script type="text/javascript" src="assets/js/branch/average-activaty.js"></script>
<script>
   $('.datepicker').datepicker({
      format: "yyyy-mm",
      viewMode: "months", 
      minViewMode: "months"
   });
</script>
</body>
</html>