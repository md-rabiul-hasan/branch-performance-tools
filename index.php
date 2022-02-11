<?php 
  include 'db/database_connection.php';
  session_start();
  // authenticatio check
  if(!isset($_SESSION['id'])) {
    header("location:login.php");
    exit;
  }
  // header file included
  include 'partial/_header.php';
 ?>
   <link rel="stylesheet" href="assets/css/spin_loader.css">
    <main class="app-content">
        <div class="app-title">
            <div>
              <h1><i class="fa fa-bar-chart"></i> Dashboard</h1>
              <p>Showing Top 3 DBL Branch Activaty</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-bar-chart fa-lg"></i></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
        </div>
        <div class="row">
            <!-- Top three branch current month branch activaty section start -->
            <div class="col-md-6">
              <div class="tile">
                  <h3 class="tile-title">Total Activity Of Branch</h3>
                  <hr>
                  <div id="data-fetch-loader">
                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                  </div>
                  <!-- Top Three Branch Graph Show Section Start -->
                  <div class="embed-responsive embed-responsive-16by9" id="top_three_branch">
                    <canvas class="embed-responsive-item" id="topThreeBranch"></canvas>
                  </div>
                  <!-- Top Three Branch Graph Show Section End -->
                  <!-- Top Three Branch Data Not Found Section Start -->
                  <div class="embed-responsive text-uppercase" id="data_not_found">
                  </div>
                  <!-- Top Three Branch Data Not Found Section End -->
              </div>
            </div>
            <!-- Top three branch current month branch activaty section end -->
            <!-- Top three branch current month average activaty section start -->
            <div class="col-md-6">
              <div class="tile">
                  <h3 class="tile-title">Average Activity(Per TSO)</h3>
                  <hr>
                  <!-- Data Fetch Loader -->
                  <div id="average-data-fetch-loader">
                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                  </div>
                  <!-- Graph Show -->
                  <div class="embed-responsive embed-responsive-16by9" id="avarage_top_three_branch">
                    <canvas class="embed-responsive-item" id="showAvarageBranchActivaty"></canvas>
                  </div>
                  <!-- Data Not Found -->
                  <div class="embed-responsive text-uppercase" id="average-data_not_found">
                  </div>
              </div>
            </div>
            <!-- Top three branch current month average activaty section end -->
        </div>
        </div>
      </main>    
    <?php include 'partial/_footer.php'; ?>
    <script type="text/javascript" src="assets/js/plugins/chart.js"></script>
    <!-- Page specDBL javascripts-->
    <script type="text/javascript" src="assets/js/branch/dashboard.js"></script>
  </body>
</html>