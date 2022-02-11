<?php 
  session_start();
  include('../../db/database_connection.php');
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../login.php');
    exit;
  }

  $seach_option = $_REQUEST['seach_option'];
  if($seach_option == "division"){
    $search_query = " WHERE tr.target_type='division' ";
  }elseif($seach_option == "branch"){
    $search_query = " WHERE tr.target_type='branch' ";
  }else{
    $search_query = " WHERE tr.target_type='individual' ";
  }

  $sql = "SELECT tr.*,tl.name as target_list_name,d.name as division_name,b.branch_name as branch_name,o.OCUNAM as employee_name from targets tr left JOIN target_lists tl on tr.target_list_id = tl.id left JOIN divisions d on tr.division_id = d.id left JOIN branches b on tr.branch_id = b.id left JOIN ocpf o on tr.employee_id = o.id $search_query";
  $query = mysqli_query($conn, $sql);
  $output = '';
  while($data  = mysqli_fetch_array($query)){
      $target_list_name = $data['target_list_name'];
      $value            = $data['value'];
      $value_type       = strtoupper($data['value_type']);
      $duration         = strtoupper($data['duration']);
      $target_type      = strtoupper($data['target_type']);
      $target_engaing   = '';
      if(!empty($data['division_name'])){
          $target_engaing = $data['division_name'];
      }elseif(!empty($data['branch_name'])){
          $target_engaing = $data['branch_name'];
      }elseif(!empty($data['employee_name'])){
          $target_engaing = $data['employee_name'];
      }

      $archive = $value - rand(10,30);

      $output .= "<tr class='text-center'>
      <td class='text-left'>$target_list_name</td>
      <td>$value_type</td>
      <td>$value</td>
      <td>$duration</td>
      <td>$target_type</td>
      <td>$target_engaing</td>
      <td>$archive</td>
    </tr>";


  }

?>

<?php 
    $result = '<table class="table table-sm table-striped table-bordered">
    <thead class="bg-primary text-center text-white">
        <tr>
          <th scope="col">Target Name</th>
          <th scope="col">Value Type</th>
          <th scope="col">Value</th>
          <th scope="col">Duration</th>
          <th scope="col">Target Type</th>
          <th scope="col">Target Engagings</th>
          <th scope="col">Achive</th>
        </tr>
    </thead>
    <tbody>
        '.$output.'
      </tbody>
  </table>';

  echo $result;
?>