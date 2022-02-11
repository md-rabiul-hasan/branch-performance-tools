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
.embed-responsive {
   position: relative;
   height: 450px!important;
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
         <h1><i class="fa fa-pie-chart"></i> Individual Contribution in OSS</h1>
         <p>Individual Contribution in OSS</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-pie-chart fa-lg"></i></li>
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul>
   </div>
   <!-- Select And Search Section Start -->
   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="tile">
            <form action="" id="individual-contribution-in-oss">
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
   <div class="row" id="topBranchIndividualContributionInOSS">
      <!-- Cash Deposit/Withdrawal, Fund Transfer, Remittance section start -->
      <div class="col-lg-4 col-md-6" id="topFirstBranchIndividualContributionInOSSn">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualContributionInOSS">Kawran Bazar</h6>
            <hr>
            <div id="topFirstBranchIndividualContributionInOSSLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topFirstBranchIndividualContributionInOSSData">
               <canvas class="embed-responsive-item" id="topFirstBranchIndividualContributionInOSSGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="topFirstBranchIndividualContributionInOSSDataNotFound"></div>
         </div>
      </div>
      <!-- Cash Deposit/Withdrawal, Fund Transfer, Remittance section end -->
      <!-- CASA Open/Term Deposit Open section start -->
      <div class="col-lg-4 col-md-6" id="topSecondBranchIndividualContributionInOSSn">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualContributionInOSSBranchName">Shetab Gonj</h6>
            <hr>
            <div id="topSecondBranchIndividualContributionInOSSLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topSecondBranchIndividualContributionInOSSData">
               <canvas class="embed-responsive-item" id="topSecondBranchIndividualContributionInOSSGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="topSecondBranchIndividualContributionInOSSDataNotFound"></div>
         </div>
      </div>
      <!-- CASA Open/Term Deposit Open section end -->
      <!-- CASA Open/Term Deposit Open section start -->
      <div class="col-lg-4 col-md-6" id="topThirdBranchIndividualContributionInOSS">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualContributionInOSSBranchName">Danmondi</h6>
            <hr>
            <div id="topThirdBranchIndividualContributionInOSSLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topThirdBranchIndividualContributionInOSSData">
               <canvas class="embed-responsive-item" id="topThirdBranchIndividualContributionInOSSGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="topThirdBranchIndividualContributionInOSSDataNotFound"></div>
         </div>
      </div>
   </div>
   <!-- Top three branch job volume section end -->
   
   <!--    Compare Data Show Section -->
   <div class="row" id="compareBranchIndividualContributionInOSS">
      <div class="col-lg-4 col-md-6" id="compareFirstBranchIndividualContributionInOSS">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualContributionInOSSBranchName">Compare First</h6>
            <hr>
            <div id="compareFirstBranchIndividualContributionInOSSLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topFirstBranchIndividualContributionInOSSData">
               <canvas class="embed-responsive-item" id="compareFirstBranchIndividualContributionInOSSGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="compareFirstBranchIndividualContributionInOSSDataNotFound"></div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6" id="compareSecondBranchIndividualContributionInOSS">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualContributionInOSSBranchName">Compare Second</h6>
            <hr>
            <div id="compareSecondBranchIndividualContributionInOSSLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topSecondBranchIndividualContributionInOSSData">
               <canvas class="embed-responsive-item" id="compareSecondBranchIndividualContributionInOSSGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="compareSecondBranchIndividualContributionInOSSDataNotFound"></div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6" id="compareThirdBranchIndividualContributionInOSS">
         <div class="tile">
            <h6 class="tile-title" id="topBranchIndividualContributionInOSSBranchName">Compare Third</h6>
            <hr>
            <div id="compareThirdBranchIndividualContributionInOSSLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="topThirdBranchIndividualContributionInOSSata">
               <canvas class="embed-responsive-item" id="compareThirdBranchIndividualContributionInOSSGraph" width="400px;"></canvas>
            </div>
            <div class=" text-uppercase" id="compareThirdBranchIndividualContributionInOSSDataNotFound"></div>
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
      <script type="text/javascript" src="assets/js/individual/contribution-in-oss/index.js"></script>
      <script>
        $('.datepicker').datepicker({
         format: "yyyy-mm",
         viewMode: "months", 
         minViewMode: "months"
      });
      </script>
      
    </body>
</html>