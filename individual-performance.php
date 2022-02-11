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
  .tile-title {
    font-size: 16px!important;
    font-weight: bold!important;
}
</style>
   <link rel="stylesheet" href="assets/css/spin_loader.css">
   <main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-area-chart"></i> Individual Performance</h1>
          <p>DBL Bank Branch Individual Performance</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-area-chart fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        </ul>
    </div>
    <!-- Search Select Section Start -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
          <div class="tile">
              <form  id="individualBranch" action="">
                <div class="row">
                   <div class="col-lg-4 col-md-4">
                      <div class="from-group">
                          <label class="control-label font-weight-bold">Select Month</label>
                          <input type="text" class="form-control datepicker" required="required" autocomplete="off" name="select_month" id="select_month" placeholder="Select Month">
                      </div>
                    </div>

                  <div class="col-lg-4 col-md-4">
                      <div class="form-group">
                        <label class="control-label font-weight-bold">Select Individual Branch</label>
                        <select name="individual_branch" id="individual_branch"  required="required" class="form-control">
                           <option value="">Select Branch</option>
                           <?php 
                              $sqlQuery = "SELECT branch_name,short_name FROM branches ORDER BY branch_name ASC";
                              $result = mysqli_query($conn,$sqlQuery);
                              while($row = mysqli_fetch_array($result)){
                                ?>
                           <option value="<?php echo $row['short_name'] ?>"><?php echo $row['branch_name']; ?></option>
                           <?php
                              }
                              ?>
                        </select>
                     </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
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
    <!-- Top three branch job volume section start -->
   <div class="row">
      
      <div class="col-lg-12 col-md-12">
         <div class="tile">
            <h3 class="text-center">Branch Performance : Kawran Bazar</h3>
         </div>
      </div>
   </div>

    <!-- Top three branch job volume section start -->
   <div class="row" id="topBranchIndividualPerformance">
      <!-- Cash Deposit/Withdrawal, Fund Transfer, Remittance section start -->
      <div class="col-lg-4 col-md-6" id="topBranchCDFTWDREIndividualPerformance">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualSystemUtilizationBranchName">Cash Deposit/Withdrawal, Fund Transfer, Remittance</h6>
            <hr>
            <div id="topBranchCDFTWDREIndividualPerformanceLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topBranchCDFTWDREIndividualPerformanceData">
               <canvas class="embed-responsive-item" id="topBranchCDFTWDREIndividualPerformanceGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="topBranchCDFTWDREIndividualPerformanceDataNotFound"></div>
         </div>
      </div>
      <!-- Cash Deposit/Withdrawal, Fund Transfer, Remittance section end -->
      <!-- CASA Open/Term Deposit Open section start -->
      <div class="col-lg-4 col-md-6" id="topBranchCORDOIndividualPerformance">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualSystemUtilizationBranchName">CASA Open/Retail Deposit Open</h6>
            <hr>
            <div id="topBranchCORDOIndividualPerformanceLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topBranchCORDOIndividualPerformanceData">
               <canvas class="embed-responsive-item" id="topBranchCORDOIndividualPerformanceGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="topBranchCORDOIndividualPerformanceDataNotFound"></div>
         </div>
      </div>
      <!-- CASA Open/Term Deposit Open section end -->
      <!-- CASA Open/Term Deposit Open section start -->
      <div class="col-lg-4 col-md-6" id="topBranchCCDICRRDCIndividualPerformance">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualSystemUtilizationBranchName">CASA Close/Data Input/CB Requisition/Retail Deposit Close</h6>
            <hr>
            <div id="topBranchCCDICRRDCIndividualPerformanceLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topBranchCCDICRRDCIndividualPerformanceData">
               <canvas class="embed-responsive-item" id="topBranchCCDICRRDCIndividualPerformanceGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="topBranchCCDICRRDCIndividualPerformanceDataNotFound"></div>
         </div>
      </div>
   </div>
   <!-- Top three branch job volume section end -->
   <!--    Compare Data Show Section -->
   <div class="row" id="compareBranchIndividualPerformance">
      <!-- Cash Deposit/Withdrawal, Fund Transfer, Remittance section start -->
      <div class="col-lg-4 col-md-6" id="compareBranchCDFTWDREIndividualPerformance">
         <div class="tile">
            <h6 class="tile-title" id="compareBranchIndividualSystemUtilizationBranchName">Compare Cash Deposit/Withdrawal, Fund Transfer, Remittance</h6>
            <hr>
            <div id="compareBranchCDFTWDREIndividualPerformanceLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="compareBranchCDFTWDREIndividualPerformanceData">
               <canvas class="embed-responsive-item" id="compareBranchCDFTWDREIndividualPerformanceGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="compareBranchCDFTWDREIndividualPerformanceDataNotFound"></div>
         </div>
      </div>
      <!-- Cash Deposit/Withdrawal, Fund Transfer, Remittance section end -->
      <!-- CASA Open/Term Deposit Open section start -->
      <div class="col-lg-4 col-md-6" id="compareBranchCORDOIndividualPerformance">
         <div class="tile">
            <h6 class="tile-title" id="compareBranchIndividualSystemUtilizationBranchName">Compare CASA Open/Retail Deposit Open</h6>
            <hr>
            <div id="compareBranchCORDOIndividualPerformanceLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="compareBranchCORDOIndividualPerformanceData">
               <canvas class="embed-responsive-item" id="compareBranchCORDOIndividualPerformanceGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="compareBranchCORDOIndividualPerformanceDataNotFound"></div>
         </div>
      </div>
      <!-- CASA Open/Term Deposit Open section end -->
      <!-- CASA Open/Term Deposit Open section start -->
      <div class="col-lg-4 col-md-6" id="compareBranchCCDICRRDCIndividualPerformance">
         <div class="tile">
            <h6 class="tile-title" id="compareBranchIndividualSystemUtilizationBranchName">Compare CASA Close/Data Input/CB Requisition/Retail Deposit Close</h6>
            <hr>
            <div id="compareBranchCCDICRRDCIndividualPerformanceLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="compareBranchCCDICRRDCIndividualPerformanceData">
               <canvas class="embed-responsive-item" id="compareBranchCCDICRRDCIndividualPerformanceGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="compareBranchCCDICRRDCIndividualPerformanceDataNotFound"></div>
         </div>
      </div>
   </div>
   <!--    Compare Data Show Section -->

    


  </main>
    
      <?php include 'partial/_footer.php'; ?>
      <script type="text/javascript" src="assets/js/plugins/chart.js"></script>
      <script type="text/javascript" src="assets/js/plugins/validation.js"></script>
      <script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
      <script type="text/javascript" src="assets/js/plugins/Chart.min.js"></script>
      <!-- average activaty js -->
      <script type="text/javascript" src="assets/js/individual/individual-performance/index.js"></script>
       <script>
       $('.datepicker').datepicker({
      format: "yyyy-mm",
      viewMode: "months", 
      minViewMode: "months"
   });
      </script>
    </body>
</html>