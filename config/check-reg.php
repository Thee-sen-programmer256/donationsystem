<?php
session_start();
include "config/connection.php";

    //   Donor registration
if (isset($_POST['email']) && isset($_POST['password'])) {





	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email= validate($_POST['email']);
	$pass = validate($_POST['password']);

	// $re_pass = validate($_POST['re_password']);
	// $name = validate($_POST['name']);

	$user_data = 'email='. $email. '&password='. $pass;


	if (empty($email)) {
		header("Location: donorreg.php?error=Email is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: donorreg.php?error=Password is required&$user_data");
	    exit();
	}
	// else if(empty($re_pass)){
    //     header("Location: signup.php?error=Re Password is required&$user_data");
	//     exit();
	// }

	// else if(empty($name)){
    //     header("Location: signup.php?error=Name is required&$user_data");
	//     exit();
	// }

	// else if($pass !== $re_pass){
    //     header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	//     exit();
	// }

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM donor WHERE email='$email' ";
		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: donorreg.php?error=The email is taken try another&$user_data");
	        exit();
		}else {

			if(isset($_POST['donor'])){
				$fname=$_POST['fname'];
				$email=$_POST['email'];
				$dob=$_POST['dob'];
				$contact=$_POST['contact'];
				$bloodgroup=$_POST['bloodgroup'];
				$nation=$_POST['nationality'];
				$gender=$_POST['gender'];
				$pass=$_POST['password'];

				$file_name= $_FILES['image']['name'];
	            $file_tmp = $_FILES['image']['tmp_name'];


	             //image Upload
                move_uploaded_file($file_tmp,"images/".$file_name);



           $sql2 = "INSERT INTO donor(`fname`, `email`, `dob`, `contact`, `bloodgroup`,`bloodgroupstatus`, `nationality`, `image`, `gender`, `password`)
           VALUES('$fname','$email','$dob','$contact','$bloodgroup','Pending','$nation','$file_name','$gender','$pass')";
           $result2 = mysqli_query($connection, $sql2);
			}
           if ($result2) {
			// $_SESSION['donorId']=$rows['donorId'];
             session_start();
				$_SESSION['email'] = $email;
        header("Location: donorchannel/Home.php");

	         // exit();
           }else {
	           	header("Location: donorreg.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}

}
// else{
// 	header("Location: donorreg.php");
// 	exit();
// }

    //    Patient registration

	// if (isset($_POST['email']) && isset($_POST['password'])) {





	// 	function validate($data){
	// 	   $data = trim($data);
	// 	   $data = stripslashes($data);
	// 	   $data = htmlspecialchars($data);
	// 	   return $data;
	// 	}

	// 	$email= validate($_POST['email']);
	// 	$pass = validate($_POST['password']);

	// 	// $re_pass = validate($_POST['re_password']);
	// 	// $name = validate($_POST['name']);

	// 	$user_data = 'email='. $email. '&password='. $pass;


	// 	if (empty($email)) {
	// 		header("Location: patientreg.php?error=Email is required&$user_data");
	// 		exit();
	// 	}else if(empty($pass)){
	// 		header("Location: patientreg.php?error=Password is required&$user_data");
	// 		exit();
	// 	}
	// 	// else if(empty($re_pass)){
	// 	//     header("Location: signup.php?error=Re Password is required&$user_data");
	// 	//     exit();
	// 	// }

	// 	// else if(empty($name)){
	// 	//     header("Location: signup.php?error=Name is required&$user_data");
	// 	//     exit();
	// 	// }

	// 	// else if($pass !== $re_pass){
	// 	//     header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	// 	//     exit();
	// 	// }

	// 	else{

	// 		// hashing the password
	// 		$pass = md5($pass);

	// 		$select = "SELECT * FROM patient WHERE email='$email' ";
	// 		$res = mysqli_query($connection, $select);

	// 		if (mysqli_num_rows($res) > 0) {
	// 			header("Location: patientreg.php?error=The email is taken try another&$user_data");
	// 			exit();
	// 		}else {

	// 			if(isset($_POST['pat'])){
	// 				$fname=$_POST['fname'];
	// 				$email=$_POST['email'];
	// 				$dob=$_POST['dob'];
	// 				$contact=$_POST['contact'];
	// 				$bloodgroup=$_POST['bloodgroup'];
	// 				$nation=$_POST['nationality'];
	// 				$gender=$_POST['gender'];
	// 				$pass=$_POST['password'];

	// 				$file_name= $_FILES['image']['name'];
	// 				$file_tmp = $_FILES['image']['tmp_name'];


	// 				 //image Upload
	// 				move_uploaded_file($file_tmp,"images/".$file_name);



	// 		   $pat = "INSERT INTO patient( `fname`, `email`, `dob`, `contact`, `bloodgroup`, `nationality`, `image`, `gender`, `password`)
	// 		   VALUES('$fname','$email','$dob','$contact','$bloodgroup','$nation','$file_name','$gender','$pass')";
	// 		   $input = mysqli_query($connection, $pat);
	// 			}
	// 		   if ($input) {
	// 			// $_SESSION['donorId']=$rows['donorId'];
	// 				header("Location: donorint.php");
	// 				$_SESSION['email']=$email;
	// 			 exit();
	// 		   }else {
	// 				   header("Location: patientreg.php?error=unknown error occurred&$user_data");
	// 				exit();
	// 		   }
	// 		}
	// 	}

	// }
	// // else{
	// // 	header("Location: donorreg.php");
	// // 	exit();
	// // }

?>
