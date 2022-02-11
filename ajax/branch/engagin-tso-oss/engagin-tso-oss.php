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
                <tr>
                  <th scope="col">Job Type</th>
                  <th scope="col">Danmondi Branch</th>
                  <th scope="col" >Shetabgonj Branch</th>
                  <th scope="col">Kawran Bazar Branch</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center">
                  <td class="text-left">Cash Deposit (ACA)</td>
                  <td><strong>6</strong> out of 10</td>
                  <td><strong>1</strong> out of 7</td>
                  <td><strong>7</strong> out of 7</td>
                </tr>
                <tr class="text-center">
                  <td class="text-left">Cash Withdrawal (ACW)</td>
                  <td><strong>3</strong> out of 10</td>
                  <td><strong>2</strong> out of 7</td>
                  <td><strong>7</strong> out of 7</td>
                </tr>
                 <tr class="text-center">
                  <td class="text-left">Fund Transfer (ASI)</td>
                  <td><strong>8</strong> out of 10</td>
                  <td><strong>3</strong> out of 7</td>
                  <td><strong>6</strong> out of 7</td>
                </tr>
                <tr class="text-center">
                  <td class="text-left">Foreign Remittance & Others (AAS)</td>
                  <td><strong>5</strong> out of 10</td>
                  <td><strong>2</strong> out of 7</td>
                  <td><strong>6</strong> out of 7</td>
                </tr>
                 <tr class="text-center">
                  <td class="text-left">CASA Opening (OCA)</td>
                  <td><strong>6</strong> out of 10</td>
                  <td><strong>3</strong> out of 7</td>
                  <td><strong>1</strong> out of 7</td>
                </tr>
                <tr class="text-center">
                  <td class="text-left">CASA Closing (CLA)</td>
                  <td><strong>3</strong> out of 10</td>
                  <td><strong>2</strong> out of 7</td>
                  <td>-</td>
                </tr>
                 <tr class="text-center">
                  <td class="text-left">Customer Data Update (CAA/AIM/CIM)</td>
                  <td><strong>9</strong> out of 10</td>
                  <td><strong>3</strong> out of 7</td>
                  <td><strong>2</strong> out of 7</td>
                </tr>
                 <tr class="text-center">
                  <td class="text-left">Cheque Book Request (CBR)</td>
                  <td><strong>8</strong> out of 10</td>
                  <td><strong>3</strong> out of 7</td>
                  <td><strong>6</strong> out of 7</td>
                </tr>
                <tr class="text-center">
                  <td class="text-left">Foreign Remittance & Others (AAS)</td>
                  <td><strong>5</strong> out of 10</td>
                  <td><strong>2</strong> out of 7</td>
                  <td><strong>6</strong> out of 7</td>
                </tr>
                 <tr class="text-center">
                  <td class="text-left">Retail Deposit Open (RDS)</td>
                  <td><strong>6</strong> out of 10</td>
                  <td><strong>3</strong> out of 7</td>
                  <td><strong>1</strong> out of 7</td>
                </tr>                
              </tbody>
            </table>';

  echo $result;
?>