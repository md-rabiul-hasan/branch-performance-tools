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
          <h1><i class="fa fa-th-list"></i>Add Target Name</h1>
          <p>Add new target name this form</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Target Name</li>
          <li class="breadcrumb-item active"><a href="#">Add New Target Name</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-6">
        <form name="target_form_name" id="target_form_name" class="form-horizontal" method="post" action="store.php">
          <div class="tile">
            <div class="tile-body">                
                <div class="form-group row">
                    <label class="control-label col-md-4">Select Target</label>
                    <div class="col-md-8">
                        <select class="form-control" id="target_list_id" name="target_list_id">
                            <option value="">Select Target Name</option>
                            <?php 
                                $sql = "SELECT * FROM target_lists";
                                $query = mysqli_query($conn, $sql);
                                while($data = mysqli_fetch_array($query)){
                                    ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>     
                <div class="form-group row">
                    <label class="control-label col-md-4">Target Value Type</label>
                    <div class="col-md-8">
                        <select class="form-control" id="value_type" name="value_type">
                            <option value="">Select Target Value Type</option>
                            <option value="count">Count</option>
                            <option value="amount">Amount</option>
                        </select>
                    </div>
                </div>   
                <div class="form-group row">
                    <label class="control-label col-md-4">Target Value Type</label>
                    <div class="col-md-8">
                        <input type="text" name="value" id="value" class="form-control">
                    </div>
                </div>  
                <div class="form-group row">
                    <label class="control-label col-md-4">Target Type</label>
                    <div class="col-md-8">
                        <select class="form-control" id="target_type" name="target_type">
                            <option value="">Select Target Type</option>
                            <option value="division">Division</option>
                            <option value="branch">Branch</option>
                            <option value="individual">Individual</option>
                        </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="control-label col-md-4">Duration</label>
                    <div class="col-md-8">
                        <select class="form-control" id="duration" name="duration">
                            <option value="">Select Duration</option>
                            <option value="monthly">Monthly</option>
                            <option value="half_yearly">Half Yearly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row" id="division_section">
                    <label class="control-label col-md-4">Select Division</label>
                    <div class="col-md-8">
                        <select class="form-control" id="division_id" name="division_id">
                            <option value="">Select Division</option>
                            <?php 
                                $sql = "SELECT * FROM divisions";
                                $query = mysqli_query($conn, $sql);
                                while($data = mysqli_fetch_array($query)){
                                    ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div> 
                <div class="form-group row" id="branch_section">
                    <label class="control-label col-md-4">Select Branch</label>
                    <div class="col-md-8">
                        <select class="form-control" id="branch_id" name="branch_id">
                            <option value="">Select Branch</option>
                            <?php 
                                $sql = "SELECT id,branch_name as name FROM branches";
                                $query = mysqli_query($conn, $sql);
                                while($data = mysqli_fetch_array($query)){
                                    ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div> 
                <div class="form-group row" id="employee_section">
                    <label class="control-label col-md-4">Select Employee</label>
                    <div class="col-md-8">
                        <select class="form-control" id="employee_id" name="employee_id">
                            <option value="">Select Employee</option>
                            <?php 
                                $sql = "SELECT id,OCUNAM as name FROM ocpf";
                                $query = mysqli_query($conn, $sql);
                                while($data = mysqli_fetch_array($query)){
                                    ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>                
            </div>
          </div>
          <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                <button type="reset" class="btn btn-secondary" type="button"><i class="fa fa-fw fa-lg fa-times-circle"></i>Reset</button>
                  &nbsp;&nbsp;&nbsp;
                  <button type="submit" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
                </div>
              </div>
            </div>
            </form>
        </div>
      </div>
    </main>
      <?php include '../../partial/_footer.php'; ?>     
    <script type="text/javascript" src="<?php echo prefix_dot() ?>assets/js/plugins/validation.js"></script>
    <script type="text/javascript" src="<?php echo prefix_dot() ?>assets/js/plugins/select2.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#division_section").hide();
            $("#branch_section").hide();
            $("#employee_section").hide();
        });

        $("#target_type").on('change', function(){
            var target_type = $(this).val();
            if(target_type != ''){
                if(target_type == "division"){
                    $("#division_section").show();
                    $("#branch_section").hide();
                    $("#employee_section").hide();
                }else if(target_type == "branch"){
                    $("#division_section").hide();
                    $("#branch_section").show();
                    $("#employee_section").hide();
                }else if(target_type == "individual"){
                    $("#division_section").hide();
                    $("#branch_section").hide();
                    $("#employee_section").show();
                }
            }
        });
        $('select').select2();
        ///     From Validation 
        $(function() {
            $.validator.setDefaults({
                errorClass: 'help-block',
                highlight: function(element) {
                    $(element)
                        .closest('.form-group')
                        .addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element)
                        .closest('.form-group')
                        .removeClass('has-error');
                }
            });


            $("#target_form_name").validate({
                rules: {
                    target_list_id: {
                        required: true,
                    },    
                    value_type: {
                        required: true,
                    },
                    value: {
                        required: true,
                    },
                    target_type: {
                        required: true,
                    },       
                    duration: {
                        required: true,
                    },
                    division_id: {
                        required: true,
                    },
                    branch_id: {
                        required: true,
                    },
                    employee_id: {
                        required: true,
                    },
                }
            });
        });
    </script>  
    </body>
</html>