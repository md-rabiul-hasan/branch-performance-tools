<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../login.php');
    exit;
  }
 ?>
<?php 
    $result = '<table class="table table-sm table-striped table-bordered">
    <thead class="bg-primary text-center text-white">
        <tr >
          <th scope="col">TSO</th>
          <th scope="col">#Type of Jobs Engaged in</th>
          <th scope="col">Remark</th>
        </tr>
    </thead>
    <tbody>
     <tr class="text-center">
          <td>C192</td>
          <td>11</td>
          <td class="text-left">Engaged equally in all services</td>
        </tr>
       
       <tr class="text-center">
          <td>G059</td>
          <td>4</td>
          <td class="text-left">Engaged only in deposit, withdrawal, fund transfers and remittances</td>
        </tr>
        <tr class="text-center">
          <td>G062</td>
          <td>4</td>
          <td class="text-left">Engaged only in deposit, withdrawal, fund transfers and remittances</td>
        </tr>
      </tbody>
  </table>';

  echo $result;
?>