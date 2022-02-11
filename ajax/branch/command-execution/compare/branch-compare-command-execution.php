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
          <th scope="col">Job</th>
          <th scope="col" colspan="2">'.$first_branch.'</th>
          <th scope="col" colspan="2">'.$second_branch.'</th>
          <th scope="col" colspan="2">'.$third_branch.'</th>
        </tr>
    </thead>
    <tbody>
        <tr class="text-center">
          <td class="text-left">Cash Deposit (ACA)</td>
          <td>1,628</td>
          <td>03:11
          </td>
          <td>1,086
          </td>
          <td>01:12
          </td>
          <td>2,322</td>
          <td>03:55
          </td>
        </tr>
        <tr class="text-center">
          <td class="text-left">Cash Withdrawal (ACW)</td>
          <td>2,411
          </td>
          <td>03:55
          </td>
          <td>402</td>
          <td>02:02
          </td>
          <td>2,669
          </td>
          <td>03:56
          </td>
        </tr>
        <tr class="text-center">
          <td class="text-left">Fund Transfer (ASI)</td>
          <td>1330
          </td>
          <td>02:30
          </td>
          <td>335
          </td>
          <td>01:45
          </td>
          <td>623
          </td>
          <td>02:19
          </td>
        </tr>
        <tr class="text-center">
          <td class="text-left">Foreign Remittance & Others (AAS)</td>
          <td>180
          </td>
          <td>01:54
          </td>
          <td>143
          </td>
          <td>01:38
          </td>
          <td>223
          </td>
          <td>02:45
          </td>
        </tr>
        <tr class="text-center">
          <td class="text-left">CASA Opening (OCA)</td>
          <td>9
          </td>
          <td>00:57
          </td>
          <td>9
          </td>
          <td>01:28
          </td>
          <td>1
          </td>
          <td>07:17
          </td>
        </tr>
        <tr class="text-center">
          <td class="text-left">CASA Closing (CLA)</td>
          <td>6
          </td>
          <td>02:41
          </td>
          <td>11
          </td>
          <td>02:28
          </td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr class="text-center">
          <td class="text-left">Customer Data Update (CAA)</td>
          <td>26
          </td>
          <td>03:46
          </td>
          <td>46
          </td>
          <td>01:58
          </td>
          <td>10
          </td>
          <td>03:43
          </td>
        </tr>
        <tr class="text-center">
          <td class="text-left">Customer Data Update (AIM)</td>
          <td>54
          </td>
          <td>03:29
          </td>
          <td>94
          </td>
          <td>02:19
          </td>
          <td>17
          </td>
          <td>02:17
          </td>
        </tr>
        <tr class="text-center">
          <td class="text-left">Customer Data Update (CIM)</td>
          <td>61
          </td>
          <td>04:32
          </td>
          <td>96
          </td>
          <td>02:13
          </td>
          <td>46
          </td>
          <td>04:02
          </td>
        </tr>
        <tr class="text-center">
          <td class="text-left">Cheque Book Request (CBR)</td>
          <td>42
          </td>
          <td>04:39
          </td>
          <td>60</td>
          <td>01:59</td>
          <td>154</td>
          <td>03:43
          </td>
        </tr>
        <tr class="text-center">
          <td class="text-left">Retail Deposit Open (RDS)</td>
          <td>22
          </td>
          <td>05:30
          </td>
          <td>11
          </td>
          <td>02:38
          </td>
          <td>31
          </td>
          <td>04:26
          </td>
        </tr>
        <tr class="text-center">
          <td class="text-left">Retail Deposit Partial Withdrawal (APW)</td>
          <td>30
          </td>
          <td>03:07
          </td>
          <td>4
          </td>
          <td>06:15
          </td>
          <td>06:15
          </td>
          <td>03:36
          </td>
        </tr>
      </tbody>
  </table>';

  echo $result;
?>