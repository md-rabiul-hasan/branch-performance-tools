<?php 
	$conn = mysqli_connect("localhost","root","","branch_performance");
	if(!$conn){
		die("connection failed ".mysqli_error());
	}


   function curentPageActive($page_name){
      $pageName = basename($_SERVER['PHP_SELF']);
      if($page_name == $pageName){
         return true;
      }
      return false;
   }


   function prefix_dot(){
      $uri            = $_SERVER['REQUEST_URI'];
      $uri_array      = explode("branch-performance-tool/", $uri);
      $page_url       = $uri_array[1];
      $page_url_array = explode("/", $page_url);
      $total_dot      = count($page_url_array) - 1;
      $dot_string     = str_repeat("../", $total_dot);
      return $dot_string;
   }

   function getBranchNameFromShortCode($short_code){
		global $conn;
		$sql   = "SELECT branch_name FROM branches WHERE short_name='$short_code'";
		$query = mysqli_query($conn, $sql);
		$data  = mysqli_fetch_array($query);
		return $data['branch_name'] ?? '';
	}

?>