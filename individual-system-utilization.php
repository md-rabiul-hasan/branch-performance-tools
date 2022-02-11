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
  #compareBranchJobVolume .tile-title,
  #topThreeBranchJobVolume .tile-title {
    font-size: 16px;
    font-weight: bold;
}
 </style>
  <link rel="stylesheet" href="assets/css/spin_loader.css">
    <main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-bar-chart"></i> System Utilization of Individuals</h1>
         <p>System Utilization of Individuals</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-bar-chart fa-lg"></i></li>
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul>
   </div>
   <!-- Select And Search Section Start -->
   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="tile">
            <form action="" id="individual-system-utilization">
               <div class="row">
                  <div class="col-md-2">
                     <div class="from-group">
                        <label class="control-label font-weight-bold">Select Month</label>
                        <input type="text" class="form-control datepicker" autocomplete="off" required="required" name="select_month" placeholder="Select Month" id="select_month">
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label class="control-label font-weight-bold">Select Frist Branch</label>
                        <select name="first_branch" id="first_branch"  required="required" class="form-control">
                           <option value="">Select First Branch</option>
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
                  <div class="col-md-3">
                     <div class="form-group">
                        <label class="control-label font-weight-bold">Select Second Branch</label>
                        <select class="form-control" id="second_branch" required="required" name="second_branch">
                           <option value="">Select Second Branch</option>
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
                  <div class="col-md-2">
                     <div class="form-group">
                        <label class="control-label font-weight-bold">Select Third Branch</label>
                        <select class="form-control" id="third_branch" name="third_branch">
                           <option value="">Select Third Branch</option>
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
                  <div class="col-md-2">
                     <div class="form-group">
                        <p></p>
                        <input type="submit" name="compare" id="compare" class="btn btn-primary btn-block mt-4" value="compare">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Select And Search Section End -->
   <!-- Top three branch job volume section start -->
   <div class="row" id="topBranchIndividualSystemUtilization">
      <!-- Cash Deposit/Withdrawal, Fund Transfer, Remittance section start -->
      <div class="col-lg-4 col-md-6" id="topFirstBranchIndividualSystemUtilization">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualSystemUtilizationBranchName">Kawran Bazar</h6>
            <hr>
            <div id="topFirstBranchIndividualSystemUtilizationLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topFirstBranchIndividualSystemUtilizationData">
               <canvas class="embed-responsive-item" id="topFirstBranchIndividualSystemUtilizationGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="topFirstBranchIndividualSystemUtilizationDataNotFound"></div>
         </div>
      </div>
      <!-- Cash Deposit/Withdrawal, Fund Transfer, Remittance section end -->
      <!-- CASA Open/Term Deposit Open section start -->
      <div class="col-lg-4 col-md-6" id="topSecondBranchIndividualSystemUtilization">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualSystemUtilizationBranchName">Shetab Gonj</h6>
            <hr>
            <div id="topSecondBranchIndividualSystemUtilizationLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topSecondBranchIndividualSystemUtilizationData">
               <canvas class="embed-responsive-item" id="topSecondBranchIndividualSystemUtilizationGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="topSecondBranchIndividualSystemUtilizationDataNotFound"></div>
         </div>
      </div>
      <!-- CASA Open/Term Deposit Open section end -->
      <!-- CASA Open/Term Deposit Open section start -->
      <div class="col-lg-4 col-md-6" id="topThirdBranchIndividualSystemUtilization">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualSystemUtilizationBranchName">Danmondi</h6>
            <hr>
            <div id="topThirdBranchIndividualSystemUtilizationLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topThirdBranchIndividualSystemUtilizationData">
               <canvas class="embed-responsive-item" id="topThirdBranchIndividualSystemUtilizationGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="topThirdBranchIndividualSystemUtilizationDataNotFound"></div>
         </div>
      </div>
   </div>
   <!-- Top three branch job volume section end -->
   <!--    Compare Data Show Section -->
   <div class="row" id="compareBranchIndividualSystemUtilization">
      <div class="col-lg-4 col-md-6" id="compareFirstBranchIndividualSystemUtilization">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualSystemUtilizationBranchName">Branch 1</h6>
            <hr>
            <div id="compareFirstBranchIndividualSystemUtilizationLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topFirstBranchIndividualSystemUtilizationData">
               <canvas class="embed-responsive-item" id="compareFirstBranchIndividualSystemUtilizationGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="compareFirstBranchIndividualSystemUtilizationDataNotFound"></div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6" id="compareSecondBranchIndividualSystemUtilization">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualSystemUtilizationBranchName">Branch 2</h6>
            <hr>
            <div id="compareSecondBranchIndividualSystemUtilizationLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topSecondBranchIndividualSystemUtilizationData">
               <canvas class="embed-responsive-item" id="compareSecondBranchIndividualSystemUtilizationGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="compareSecondBranchIndividualSystemUtilizationDataNotFound"></div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6" id="compareThirdBranchIndividualSystemUtilization">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualSystemUtilizationBranchName">Branch 3</h6>
            <hr>
            <div id="compareThirdBranchIndividualSystemUtilizationLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topThirdBranchIndividualSystemUtilizationData">
               <canvas class="embed-responsive-item" id="compareThirdBranchIndividualSystemUtilizationGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="compareThirdBranchIndividualSystemUtilizationDataNotFound"></div>
         </div>
      </div>
   </div>
   <!--    Compare Data Show Section -->
   </div>
</main>
    
      <?php include 'partial/_footer.php'; ?>

      <script type="text/javascript" src="assets/js/plugins/chart.js"></script>
      <script type="text/javascript" src="assets/js/plugins/validation.js"></script>
      <script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
      <script type="text/javascript" src="assets/js/plugins/Chart.min.js"></script>
      <script type="text/javascript" src="assets/js/individual/system-utilization/index.js"></script>
      <script>
        $('.datepicker').datepicker({
         format: "yyyy-mm",
         viewMode: "months", 
         minViewMode: "months"
      });
   </script>
      
    </body>
</html>