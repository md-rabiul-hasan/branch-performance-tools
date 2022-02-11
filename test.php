<?php
include 'db/database_connection.php';
$sql = "SELECT branch_name FROM branches where id != 1";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query)){
    $random_number = rand(500,1000);
    $branch_name = $data['branch_name'];
    $content = 'array("avarage"=>'.$random_number.',"branch_name"=>"'.$branch_name.'"),';
    file_put_contents("test.txt", $content."\n", FILE_APPEND);
}
