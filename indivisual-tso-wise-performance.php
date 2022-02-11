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
          <h1><i class="fa fa-dashboard"></i> TSO-wise performance for a individual branch</h1>
          <p>Showing individual Branch TSo-wise performance </p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        </ul>
    </div>
    <!-- Search Select Section Start -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
          <div class="tile">
              <form action="" id="individualBranch">
                <div class="row">

                   <div class="col-lg-4 col-md-4">
                      <div class="from-group">
                          <label class="control-label font-weight-bold">Select Month</label>
                          <input type="text" class="form-control datepicker" autocomplete="off" name="select_month" id="select_month" placeholder="Select Month" required="required">
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
    <!-- Search Select Section End  -->

    <!-- All Branch Average Activaty Section Start -->
    <div class="row" id="topBranchTsoWisePerformance">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
          <div class="tile">
              <h3 class="tile-title">Top Individual Branch TSO wise Performance</h3>
              <hr>
              <div id="topBranchTsoWisePerformanceLoader">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
              </div>
              <div id="topBranchTsoWisePerformanceDataShow">

              </div>
              <div class=" text-uppercase" id="topBranchTsoWisePerformanceDataNotFound"></div>
          </div>
        </div>
    </div>
    <!-- All Branch Average Activaty SectionEnd -->

    <!-- Search Result All Branch Average Activaty Section Start -->
    <div class="row" id="individualBranchTSOPerformance">
        <div class="col-lg-12  col-md-12 col-sm-12" >
          <div class="tile">
              <h3 class="tile-title">Engaging TSOs in OSS : Branch Name</h3>
              <hr>
              <div id="individualBranchTSOPerformanceLoader">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
              </div>
              <div id="individualBranchTSOPerformanceDatShow"></div>
              <div class=" text-uppercase" id="individualBranchTSOPerformanceDataNotFound"></div>
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
      <script type="text/javascript" src="assets/js/individual/tso-wise-performance/index.js"></script>
       <script>
        $('.datepicker').datepicker({
          format: "yyyy-mm",
          viewMode: "months", 
          minViewMode: "months"
      });
      </script>

    </body>
</html>