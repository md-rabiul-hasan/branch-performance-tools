<?php 
	session_start();
	// Authentication Check
	if(!isset($_SESSION['id'])){
		header('location:../../../login.php');
		exit;
	}
 ?>
<?php

	header('Content-Type: application/json');
	$data = array(
		array("total_transection"=>5321,"branch_full_name"=>"Aganagar Branch"),
		array("total_transection"=>9443,"branch_full_name"=>"Akhaura Branch"),
		array("total_transection"=>7712,"branch_full_name"=>"Alankar More Branch"),
		array("total_transection"=>6896,"branch_full_name"=>"Anwara Branch, Chittagong."),
		array("total_transection"=>8740,"branch_full_name"=>"Arshinagar Branch, Dhaka."),
		array("total_transection"=>7752,"branch_full_name"=>"Ashuganj Branch"),
		array("total_transection"=>5729,"branch_full_name"=>"Ashulia Branch"),
		array("total_transection"=>8706,"branch_full_name"=>"Bagerhat Branch"),
		array("total_transection"=>8640,"branch_full_name"=>"Banani Branch"),
		array("total_transection"=>9140,"branch_full_name"=>"Bandar Branch, Narayanganj"),
		array("total_transection"=>9192,"branch_full_name"=>"Barisal Branch"),
		array("total_transection"=>7408,"branch_full_name"=>"Bashundhara Branch"),
		array("total_transection"=>9488,"branch_full_name"=>"Bhawal Mirzapur Branch, Gazipur"),
		array("total_transection"=>8619,"branch_full_name"=>"Brahmanbaria Branch"),
		array("total_transection"=>9340,"branch_full_name"=>"Beani Bazar Branch"),
		array("total_transection"=>5492,"branch_full_name"=>"Belkuchi Branch"),
		array("total_transection"=>8545,"branch_full_name"=>"Benapole Branch"),
		array("total_transection"=>7483,"branch_full_name"=>"Bhuigar Branch, Narayanganj"),
		array("total_transection"=>6691,"branch_full_name"=>"Bhola Branch"),
		array("total_transection"=>7533,"branch_full_name"=>"Bajitpur Branch"),
		array("total_transection"=>6509,"branch_full_name"=>"Bandartila Branch"),
		array("total_transection"=>6265,"branch_full_name"=>"Banasree Branch, Dhaka."),
		array("total_transection"=>5556,"branch_full_name"=>"Baneshwar Branch"),
		array("total_transection"=>6572,"branch_full_name"=>"Board Bazar Branch"),
		array("total_transection"=>7411,"branch_full_name"=>"Boro Bazar Branch"),
		array("total_transection"=>8837,"branch_full_name"=>"Birol Bazar Branch"),
		array("total_transection"=>6984,"branch_full_name"=>"Chawk Bazar Branch"),
		array("total_transection"=>5718,"branch_full_name"=>"CCIS BRANCH"),
		array("total_transection"=>6725,"branch_full_name"=>"CDA Avenue Branch"),
		array("total_transection"=>6403,"branch_full_name"=>"Chandina Branch"),
		array("total_transection"=>7981,"branch_full_name"=>"Chapai Nawabganj Branch"),
		array("total_transection"=>9460,"branch_full_name"=>"Choumuhani Branch"),
		array("total_transection"=>6003,"branch_full_name"=>"Cherag Ali Branch, Gazipur"),
		array("total_transection"=>5518,"branch_full_name"=>"Chandra SME Krishi Branch"),
		array("total_transection"=>9313,"branch_full_name"=>"Chandraganj Branch"),
		array("total_transection"=>5357,"branch_full_name"=>"Comilla Branch"),
		array("total_transection"=>9132,"branch_full_name"=>"Coxs Bazar Branch"),
		array("total_transection"=>6287,"branch_full_name"=>"Companyganj Branch"),
		array("total_transection"=>5079,"branch_full_name"=>"Dania Branch"),
		array("total_transection"=>6905,"branch_full_name"=>"Dhamrai SME Krishi Branch"),
		array("total_transection"=>5889,"branch_full_name"=>"Dholaikhal Branch"),
		array("total_transection"=>9483,"branch_full_name"=>"Dinajpur Branch"),
		array("total_transection"=>8622,"branch_full_name"=>"Darus Salam Road Branch, Dhaka"),
		array("total_transection"=>7391,"branch_full_name"=>"Fatikchari Branch"),
		array("total_transection"=>7164,"branch_full_name"=>"Faridpur Branch"),
		array("total_transection"=>5123,"branch_full_name"=>"Feni Branch"),
		array("total_transection"=>7032,"branch_full_name"=>"Garibe Newaz Avenue Branch"),
		array("total_transection"=>6964,"branch_full_name"=>"Gabtoli Bagbari Branch"),
		array("total_transection"=>9613,"branch_full_name"=>"Ghorasal Branch"),
		array("total_transection"=>9459,"branch_full_name"=>"Goala Bazar Branch"),
		array("total_transection"=>7831,"branch_full_name"=>"Goalanda Branch"),
		array("total_transection"=>8406,"branch_full_name"=>"Gouripur Bazar Branch"),
		array("total_transection"=>7638,"branch_full_name"=>"Gulshan-Tejgaon Link Road Branch"),
		array("total_transection"=>8263,"branch_full_name"=>"Gazipur Chowrasta Branch"),
		array("total_transection"=>6126,"branch_full_name"=>"Habiganj Branch"),
		array("total_transection"=>8413,"branch_full_name"=>"Hasnabad Branch"),
		array("total_transection"=>9601,"branch_full_name"=>"Hathazari Branch"),
		array("total_transection"=>7116,"branch_full_name"=>"Isapura Bazar Branch"),
		array("total_transection"=>6877,"branch_full_name"=>"Jhalakathi Branch, Jhalakathi"),
		array("total_transection"=>5655,"branch_full_name"=>"Jamalpur Branch, Jamalpur"),
		array("total_transection"=>8862,"branch_full_name"=>"Joypurhat Branch"),
		array("total_transection"=>6829,"branch_full_name"=>"Juri Branch"),
		array("total_transection"=>5139,"branch_full_name"=>"Kachua Branch, Chandpur"),
		array("total_transection"=>6064,"branch_full_name"=>"Kaliganj SME Krishi Branch"),
		array("total_transection"=>6859,"branch_full_name"=>"Kashinathpur SME Krishi Branch"),
		array("total_transection"=>5208,"branch_full_name"=>"Keraniganj Branch"),
		array("total_transection"=>9978,"branch_full_name"=>"Khilgaon Branch"),
		array("total_transection"=>9984,"branch_full_name"=>"Konapara Branch"),
		array("total_transection"=>7193,"branch_full_name"=>"Konabari Branch"),
		array("total_transection"=>8390,"branch_full_name"=>"Kapasia Branch, Gazipur"),
		array("total_transection"=>8212,"branch_full_name"=>"Karatia Branch"),
		array("total_transection"=>5822,"branch_full_name"=>"Kushtia Branch"),
		array("total_transection"=>7836,"branch_full_name"=>"Lalmatia Branch"),
		array("total_transection"=>8993,"branch_full_name"=>"Local Office"),
		array("total_transection"=>8271,"branch_full_name"=>"Madhabdi Branch"),
		array("total_transection"=>9872,"branch_full_name"=>"Madhabpur Branch, Habiganj."),
		array("total_transection"=>6228,"branch_full_name"=>"Malibagh Branch"),
		array("total_transection"=>7370,"branch_full_name"=>"Manikgonj Branch"),
		array("total_transection"=>8918,"branch_full_name"=>"Moulvi Bazar Branch"),
		array("total_transection"=>6587,"branch_full_name"=>"Madam Bibir Hat Branch"),
		array("total_transection"=>7052,"branch_full_name"=>"Meghola Bazar Branch"),
		array("total_transection"=>9271,"branch_full_name"=>"Miah Bazar Branch"),
		array("total_transection"=>9398,"branch_full_name"=>"Mirpur Branch"),
		array("total_transection"=>9545,"branch_full_name"=>"Muktarpur Branch"),
		array("total_transection"=>5219,"branch_full_name"=>"Mohakhali Branch"),
		array("total_transection"=>9036,"branch_full_name"=>"Mohammadpur Branch"),
		array("total_transection"=>5954,"branch_full_name"=>"Mymensingh Branch"),
		array("total_transection"=>7109,"branch_full_name"=>"Mawna Branch,Gazipur"),
		array("total_transection"=>6354,"branch_full_name"=>"Moynamoti Branch, Comilla"),
		array("total_transection"=>8572,"branch_full_name"=>"Naogaon Branch"),
		array("total_transection"=>9641,"branch_full_name"=>"Narsingdi Branch"),
		array("total_transection"=>6865,"branch_full_name"=>"Nawabganj SME Krishi Branch"),
		array("total_transection"=>6302,"branch_full_name"=>"Naya Paltan Branch"),
		array("total_transection"=>8679,"branch_full_name"=>"North Brooke Hall Road Branch"),
		array("total_transection"=>8434,"branch_full_name"=>"Noju Miah Hat Branch"),
		array("total_transection"=>7615,"branch_full_name"=>"Netaiganj Branch"),
		array("total_transection"=>7529,"branch_full_name"=>"Panchaboti Branch"),
		array("total_transection"=>8662,"branch_full_name"=>"Pabna Branch"),
		array("total_transection"=>9072,"branch_full_name"=>"Panchdona Branch"),
	);
	echo json_encode($data);

 	

 	





  ?>