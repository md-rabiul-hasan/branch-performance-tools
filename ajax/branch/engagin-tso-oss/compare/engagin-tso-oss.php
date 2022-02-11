<?php 
  session_start();
  include '../../../../db/database_connection.php';
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../../login.php');
    exit;
  }
 ?>
<?php 
  $first_branch  = getBranchNameFromShortCode($_REQUEST['first_branch']);
  $second_branch = getBranchNameFromShortCode($_REQUEST['second_branch']);
  $third_branch  = getBranchNameFromShortCode($_REQUEST['third_branch']);
    $result = '<table class="table table-sm table-striped table-bordered">
              <thead class="bg-primary text-center text-white">
                <tr>
                  <th scope="col">Job Type</th>
                  <th scope="col">'.$first_branch.'</th>
                  <th scope="col" >'.$second_branch.'</th>
                  <th scope="col">'.$third_branch.'</th>
                </tr>
              </thead>
              <tbody>
              <tr class="text-center">
              <td class="text-left">Cash Deposit (ACA)</td>
              <td><strong>6</strong> out of 9</td>
              <td><strong>1</strong> out of 8</td>
              <td><strong>8</strong> out of 8</td>
            </tr>
            <tr class="text-center">
              <td class="text-left">Cash Withdrawal (ACW)</td>
              <td><strong>3</strong> out of 9</td>
              <td><strong>2</strong> out of 8</td>
              <td><strong>8</strong> out of 8</td>
            </tr>
             <tr class="text-center">
              <td class="text-left">Fund Transfer (ASI)</td>
              <td><strong>8</strong> out of 9</td>
              <td><strong>3</strong> out of 8</td>
              <td><strong>6</strong> out of 8</td>
            </tr>
            <tr class="text-center">
              <td class="text-left">Foreign Remittance & Others (AAS)</td>
              <td><strong>5</strong> out of 9</td>
              <td><strong>2</strong> out of 8</td>
              <td><strong>6</strong> out of 8</td>
            </tr>
             <tr class="text-center">
              <td class="text-left">CASA Opening (OCA)</td>
              <td><strong>6</strong> out of 9</td>
              <td><strong>3</strong> out of 8</td>
              <td><strong>1</strong> out of 8</td>
            </tr>
            <tr class="text-center">
              <td class="text-left">CASA Closing (CLA)</td>
              <td><strong>3</strong> out of 9</td>
              <td><strong>2</strong> out of 8</td>
              <td>-</td>
            </tr>
             <tr class="text-center">
              <td class="text-left">Customer Data Update (CAA/AIM/CIM)</td>
              <td><strong>9</strong> out of 9</td>
              <td><strong>3</strong> out of 8</td>
              <td><strong>2</strong> out of 8</td>
            </tr>
             <tr class="text-center">
              <td class="text-left">Cheque Book Request (CBR)</td>
              <td><strong>8</strong> out of 9</td>
              <td><strong>3</strong> out of 8</td>
              <td><strong>6</strong> out of 8</td>
            </tr>
            <tr class="text-center">
              <td class="text-left">Foreign Remittance & Others (AAS)</td>
              <td><strong>5</strong> out of 9</td>
              <td><strong>2</strong> out of 8</td>
              <td><strong>6</strong> out of 8</td>
            </tr>
             <tr class="text-center">
              <td class="text-left">Retail Deposit Open (RDS)</td>
              <td><strong>6</strong> out of 9</td>
              <td><strong>3</strong> out of 8</td>
              <td><strong>1</strong> out of 8</td>
             
               
              </tbody>
            </table>';

  echo $result;
?>