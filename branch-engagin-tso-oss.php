  <?php 
    include 'db/database_connection.php';
    session_start();
    
    if(!isset($_SESSION['id'])) {
      header("location:login.php");
      exit;
    }

    include 'partial/_header.php';
   ?>

  <?php include 'partial/_header.php'; ?>
    <link rel="stylesheet" href="assets/css/spin_loader.css">
     <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-table"></i> Engagin TSO in OSS</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-table fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
    <!-- Select And Search Section Start -->
       <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="tile">
               <form action="" id="branch-compare-engagin-tso-oss">
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
    <!-- Select And Search Section End -->

    <!-- Show Current month top three branch engaging data show section start -->
      <div class="row" id="engagin-tso-oss-data">
        <div class="col-md-12">
          <div class="tile">
            <!-- Spin Loader Section Start -->
              <div id="date-fecht-before-loader">
                  <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                  </div>
              </div>
              <!-- Spin Loader Section End -->
            <div id="engagin-tso-oss-data-show">
              
            </div>

            <div id="engagin-tso-oss-data-not-found">
              
            </div>
          </div>
        </div>
      </div>
    <!-- Show Current month top three branch engaging data show section start -->

            <!-- Compare Result Section Start -->
      <div class="row" id="compare-engagin-tso-oss-data">
        <div class="col-md-12">
          <div class="tile">
              <!-- Spin Loader Section Start -->
              <div id="compare-date-fecht-before-loader">
                  <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                  </div>
              </div>
              <!-- Spin Loader Section End -->

              <!-- Result Found Section Start  -->
              <div id="compare-engagin-tso-oss-result-show">
                
              </div>
              <!-- Result Found Section End -->

              <div id="compare-engagin-tso-oss-result-not-found">
                
              </div>


          </div>
        </div>
      </div>
      <!-- Compare Result Section End -->


      </div>
    </main>
    
    
      <?php include 'partial/_footer.php'; ?>
      <script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
      <script type="text/javascript" src="assets/js/plugins/validation.js"></script>
      <script type="text/javascript" src="assets/js/branch/engagin-tso-oss.js"></script>
      <script>
        $('.datepicker').datepicker({
          format: "yyyy-mm",
          viewMode: "months", 
          minViewMode: "months"
       });
      </script>
    </body>
</html>