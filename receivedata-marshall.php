<?php
session_start();
require('FbCon.php');

$_SESSION['check']='Set';


$firstName = strtoupper($_POST["fName"]);
$middleName =strtoupper($_POST["mName"]);
$surname = strtoupper($_POST["sName"]);
$phoneNumber= $_POST["pNumber"];
$birthdayDay = strtoupper($_POST["bDay"]);
$birthdayMonth = strtoupper($_POST["bMonth"]);
$stateOfOrigin= strtoupper($_POST["stateOfOrigin"]);
$currentLocation= strtoupper($_POST["currentLocation"]);
$course =strtoupper($_POST["course"]);
$servedAs = $_POST["servedAs"];
$yearGraduated = $_POST["yearGraduated"];

$image = $_FILES['filesmarsh']['name'];
$image_extension = strtolower(substr($image,strpos($image,'.')+1));
$target_dir = "uploads/";
$target_file = $target_dir. $firstName.$surname.".".$image_extension;
$uploadImagePath = "http://archlightgate.byethost8.com/".$target_file;

if(""!=trim($firstName) && ""!=trim($surname) && ""!=trim($phoneNumber) && ""!=trim($currentLocation) && ""!=trim($birthdayDay) && ""!=trim($stateOfOrigin) && ""!=trim($birthdayMonth) && ""!=trim($course) && ""!=trim($servedAs)
&& ""!=trim($yearGraduated)
&& ""!=trim($image)){
$query= "SELECT `First Name` FROM `Marshalls` WHERE `First Name` ='$firstName' AND `Middle Name` = '$middleName' AND `Surname` = '$surname' AND `Phone Number`= '$phoneNumber'";
$queryphone = "SELECT `Phone Number` FROM `Marshalls` WHERE `Phone Number`='$phoneNumber' ";
$qphonerun= mysqli_query($conn,$queryphone);
$queryphonenumrows = mysqli_num_rows($qphonerun);
$q_run=mysqli_query($conn,$query);
$query_num_rows= mysqli_num_rows($q_run);

if($query_num_rows!=0){
	header('Location:'.'duplicate.php');
}else if($queryphonenumrows !=0){
	header('Location:'.'duplicate.php');
}
else{
	if($_FILES["filesmarsh"]["size"]> 819200){
		header('Location:'.'largeimage.php');
	}else{
		if (move_uploaded_file($_FILES["filesmarsh"]["tmp_name"], $target_file)) {

			$query = mysqli_query($conn, "INSERT INTO `Marshalls` (`id`, `First Name`,
				`Middle Name`, `Surname`, `Phone Number`, `Birthday Day`,
				`Birthday Month`, `State of Origin`, `Course`, `Year Graduated`,
				`Served As`, `Profile_pic url`, `CurrentLocation`)
				VALUES (NULL, '$firstName', '$middleName', '$surname',
					'$phoneNumber', '$birthdayDay', '$birthdayMonth', '$stateOfOrigin',
					'$course', '$yearGraduated', '$servedAs','$uploadImagePath','$currentLocation')");
		if($query){
		header('Location:'.'success.php');
		}

		}else {
			header('Location:'.'errorpage.php');
	 }

	}

}
}else{
	header('Location:'.'submiterror.php');
}
  // Check file size
  // if ($_FILES["filesmarsh"]["size"] > 500000) {
  //     echo "Sorry, your file is too large.";
  //     $uploadOk = 0;
  // }





?>
