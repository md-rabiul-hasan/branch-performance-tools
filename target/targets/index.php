<?php 
  include '../../db/database_connection.php';
  session_start();
  
  if(!isset($_SESSION['id'])) {
    header("location:login.php");
    exit;
  }

  include '../../partial/_header.php';
 ?>
        <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Target List</h1>
          <p>This table showing all target list</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Target List</li>
          <li class="breadcrumb-item active"><a href="#">Target List</a></li>
        </ul>
      </div>

        <div class="row">
            <div class="col-md-12 mb-3" >
                <a href="create.php" style="float: right;" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>


      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Target Name</th>
                      <th>Value Type</th>
                      <th>Value </th>
                      <th>Duration </th>
                      <th>Target Type </th>
                      <th>Division</th>
                      <th>Branch</th>
                      <th>Employee</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $sql = "SELECT tr.*,tl.name as target_list_name,d.name as division_name,b.branch_name as branch_name,o.OCUNAM as employee_name from targets tr left JOIN target_lists tl on tr.target_list_id = tl.id left JOIN divisions d on tr.division_id = d.id left JOIN branches b on tr.branch_id = b.id left JOIN ocpf o on tr.employee_id = o.id";
                    $query = mysqli_query($conn, $sql);
                    $sl = 1;
                    while($data = mysqli_fetch_array($query)){
                      ?>
                        <tr>
                          <td><?php echo $sl++; ?></td>
                          <td><?php echo $data['target_list_name']; ?></td>
                          <td><?php echo strtoupper($data['value_type']); ?></td>
                          <td><?php echo $data['value']; ?></td>
                          <td><?php echo strtoupper($data['duration']); ?></td>
                          <td><?php echo strtoupper($data['target_type']); ?></td>
                          <td><?php echo $data['division_name'] ?? '-'; ?></td>
                          <td class="text-center"><?php echo $data['branch_name'] ?? '-'; ?></td>
                          <td class="text-center"><?php echo $data['employee_name'] ?? '-' ?></td>
                        </tr>
                      <?php
                    }
                  ?>
                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
      <?php include '../../partial/_footer.php'; ?>     
          <!-- Data table plugin-->
    <script type="text/javascript" src="<?php echo prefix_dot() ?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo prefix_dot() ?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>      
    </body>
</html>