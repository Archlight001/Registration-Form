<?php
session_start();
require('FbCon.php');

$_SESSION['check']='Set';

require_once('function.php');

$firstName = strtoupper($_POST["fName"]);
$middleName =strtoupper($_POST["mName"]);
$surname = strtoupper($_POST["sName"]);
$phoneNumber= $_POST["pNumber"];
$nokNumber= $_POST["nokNumber"];
$birthdayDay = strtoupper($_POST["bDay"]);
$birthdayMonth = strtoupper($_POST["bMonth"]);
$stateOfOrigin= strtoupper($_POST["stateOfOrigin"]);
$course =strtoupper($_POST["course"]);
$level = $_POST["level"];
$yearJoined = $_POST["yearJoined"];

$image = $_FILES['files']['name'];
$image_extension = strtolower(substr($image,strpos($image,'.')+1));
$target_dir = "uploads/";
$target_file = $target_dir. $firstName.$surname.".".$image_extension;
$uploadImagePath = "http://archlightgate.byethost8.com/".$target_file;

if(""!=trim($firstName) && ""!=trim($surname) && ""!=trim($phoneNumber) && ""!=trim($nokNumber) && ""!=trim($stateOfOrigin) && ""!=trim($birthdayDay) && ""!=trim($birthdayMonth) && ""!=trim($course) && ""!=trim($level)
&& ""!=trim($yearJoined)
&& ""!=trim($image)){
	$query= "SELECT `First Name` FROM `Members` WHERE `First Name` ='$firstName' AND `Middle Name` = '$middleName' AND `Surname` = '$Surname' AND `Phone Number`= '$phoneNumber'";
	$queryphone = "SELECT `Phone Number` FROM `Members` WHERE `Phone Number`='$phoneNumber' ";
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
		if($_FILES["files"]["size"]> 819200){
			header('Location:'.'largeimage.php');
		}else{
			if (compress($_FILES["files"]["tmp_name"], $target_file,50)) {

				$query = mysqli_query($conn, "INSERT INTO `Members` (`id`, `First Name`,
					`Middle Name`, `Surname`, `Phone Number`,`Next_Of_Kins_Number`, `Birthday Day`,
					`Birthday Month`, `State of Origin`, `Course`, `Level`,
					`Year Joined`, `Profile_pic url`)
					VALUES (NULL, '$firstName', '$middleName', '$surname',
						'$phoneNumber','$nokNumber', '$birthdayDay', '$birthdayMonth', '$stateOfOrigin',
						'$course', '$level', '$yearJoined','$uploadImagePath')");
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
  // if ($_FILES["files"]["size"] > 500000) {
  //     echo "Sorry, your file is too large.";
  //     $uploadOk = 0;
  //}





?>
