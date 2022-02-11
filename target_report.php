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
         <h1><i class="fa fa-table"></i> Target Report</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-table fa-lg"></i></li>
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul>
   </div>
   <!-- Select For Search Section Start -->
   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="tile">
            <form action="" id="target-list">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label font-weight-bold">Select Search Option</label>
                        <select name="seach_option" id="seach_option"  required="required" class="form-control">
                           <option value="">Select Option</option>   
                           <option value="division">Division</option>                       
                           <option value="branch">Branch</option>                       
                           <option value="individual">Individual</option>                       
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
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
   <!-- Select For Search Section End -->
   <!-- Show Current Month Top Three Branch Command Execution time section start -->
   <div class="row" id="command-execution-data">
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
            <div id="command-execution-data-show">
            </div>
            <div id="command-execution-data-not-found">
            </div>
         </div>
      </div>
   </div>
   <!-- Show Current Month Top Three Branch Command Execution time section end -->
   <!-- Compare Result Section Start -->
   <div class="row" id="compare-data">
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
            <div id="compare-result-show">
            </div>
            <!-- Result Found Section End -->
            <div id="compare-command-execution-data-not-found">
            </div>
         </div>
      </div>
   </div>
   <!-- Compare Result Section End -->
   </div>
</main>
    
    <?php include 'partial/_footer.php'; ?>

    <script type="text/javascript" src="assets/js/plugins/validation.js"></script>
    <script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/target/target-list.js"></script>
     <script>
     $('.datepicker').datepicker({
      format: "yyyy-mm",
      viewMode: "months", 
      minViewMode: "months"
   });
    </script>
  </body>
</html>