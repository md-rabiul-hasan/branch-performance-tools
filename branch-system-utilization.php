<?php 
  include 'db/database_connection.php';
  session_start();
  
  if(!isset($_SESSION['id'])) {
    header("location:login.php");
    exit;
  }

  include 'partial/_header.php';  
 ?>
   <link rel="stylesheet" href="assets/css/spin_loader.css">
   
    <main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-bar-chart"></i> System Utilization</h1>
         <p>Showing Three Branch System Utilization</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-bar-chart fa-lg"></i></li>
         <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
      </ul>
   </div>
   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="tile">
            <form action="" id="system-utilization">
               <div class="row">
                  <div class="col-md-2">
                     <div class="from-group">
                        <label class="control-label font-weight-bold">Select Date</label>
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
   <div class="row index.php" id="top_three_branch_system_utilization">
      <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2">
         <div class="tile">
            <h3 class="tile-title">Current Month Top 3 Branch System Utilization</h3>
            <hr>
            <div id="top_three_branch_system_utilization_loader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="top_three_branch_system_utilization_data">
               <canvas class="embed-responsive-item" id="topThreeBranchSystemUtilization"></canvas>
            </div>
            <div class=" text-uppercase" id="topThreeBranchSystemUtilizationDataNotFound"></div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12" id="compare_three_branch_system_utilization">
         <div class="tile">
            <h3 class="tile-title">All Branch Activaty</h3>
            <hr>
            <div id="compare_three_branch_system_utilization_loader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="compare_three_branch_system_utilization_data">
               <canvas class="embed-responsive-item" id="compareThreeBranchSystemUtilization"></canvas>
            </div>
            <div class=" text-uppercase" id="compareThreeBranchSystemUtilizationDataNotFound"></div>
         </div>
      </div>
   </div>
</main>
    
      <?php include 'partial/_footer.php'; ?>

      <script type="text/javascript" src="assets/js/plugins/chart.js"></script>
      <script type="text/javascript" src="assets/js/plugins/validation.js"></script>
      <script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
      <script type="text/javascript" src="assets/js/branch/system-utilization.js"></script>
      <script>
       $('.datepicker').datepicker({
      format: "yyyy-mm",
      viewMode: "months", 
      minViewMode: "months"
   });
      </script>
    </body>
</html>