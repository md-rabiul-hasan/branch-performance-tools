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
                    <label class="control-label col-md-4">Target List Name</label>
                    <div class="col-md-8">
                        <input class="form-control" name="target_name" required type="text" placeholder="Enter Target Name">
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
    <script>
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
                    target_name: {
                        required: true,
                    }            
                }
            });
        });
    </script>  
    </body>
</html>