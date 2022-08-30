<?php
include 'connection.php';

// submitting data to the  patient database
if(isset($_POST['donor'])){
  // echo "working";

		$fname=$_POST['fname'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$contact=$_POST['contact'];
		$bloodgroup=$_POST['bloodgroup'];
		$nation=$_POST['nationality'];
		$pass=$_POST['password'];
		// $photo=$_FILES['file']['name'];
		$gender=$_POST['pgender'];

		//image uploads
		// move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']);

		// if (isset($_POST['donor'])) {
		// 		// $filetmp=$_FILES["file"]["tmp_name"];
		// 		// $filename=$_FILES["file"]["name"];
		// 		// $filetype=$_FILES["file"]["type"];
		// 		// $target_dir=$_SERVER['DOCUMENT_ROOT']."uploads/";
		// 		$extension = explode('.', $php['name']);
    //     $new_name =rand() . '.' . $extension[1];
		// 		$imagepath= $_SERVER['DOCUMENT_ROOT'].'uploads/'.$new_name;
		// 		// echo $filetmp;
		// 		// print_r($_FILES["file"]);
		// 		 move_uploaded_file($photo['tmp_name'], $imagepath);
		// 	}


	// 	if(isset($_POST["donor"])) {
	//
	// 	$filetmp=$_FILES["file"]["tmp_name"];
	// 			$filename=$_FILES["file"]["name"];
	// 			$filetype=$_FILES["file"]["type"];
	// $target_dir = "uploads/";
	// $target_file = $target_dir . basename($_FILES["file"]["name"]);
	// move_uploaded_file($filetmp, $imagepath);
	// $uploadOk = 1;
	// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// // Check if image file is a actual image or fake image
	//   $check = getimagesize($_FILES["file"]["tmp_name"]);
	//   if($check !== false) {
	//     echo "File is an image - " . $check["mime"] . ".";
	//     $uploadOk = 1;
	//   } else {
	//     echo "File is not an image.";
	//     $uploadOk = 0;
	//   }
	// }

	if (isset($_POST['donor'])) {

    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "/image/" . $filename;

    // $db = mysqli_connect("localhost", "root", "", "geeksforgeeks");

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}

		//inserting to database
		// $mysqli->query("INSERT INTO donor (fname,email,dob,contact,bloodgroup,nationality,password,image,pgender)
		// VALUES('$fname','$email','$dob','$contact','$bloodgroup','$nation','$pass','$photo','$gender')");
		$sql_insert="INSERT INTO donor (fname,email,dob,contact,bloodgroup,nationality,password,image,pgender)
		VALUES('$fname','$email','$dob','$contact','$bloodgroup','$nation','$pass','$folder','$gender')";
		$sql_query=mysqli_query($conn,$sql_insert);
		if($sql_query==true){
			echo "good";
		}
		else{
			echo "fail";
		}
// 	$fname=$_POST['fname'];
// 	$fname=mysqli_real_escape_string($conn, $fname);
// 	$email=$_POST['email'];
// 	$email=mysqli_real_escape_string($conn, $email);
// 	$dob=$_POST['dob'];
// 	$dob=mysqli_real_escape_string($conn, $dob);
// 	$contact=$_POST['contact'];
// 	$contact=mysqli_real_escape_string($conn, $contact);
// 	$bloodgroup=$_POST['bloodgroup'];
// 	$bloodgroup=mysqli_real_escape_string($conn, $bloodgroup);
// 	$nationality=$_POST['nationality'];
// 	$nationality=mysqli_real_escape_string($conn, $nationality);
// 	$password=$_POST['password'];
// 	$photo= $_FILES['file']['name'];
// 	@$gender=$_POST['pgender'];
// 	$gender=mysqli_real_escape_string($conn, $gender);
//
// 	//image Upload
// 	@move_uploaded_file($_FILES['file']['tmp_name'],"../uploads/".$_FILES['file']['name']);
// 	// if (isset($_POST['donor'])) {
// 	// 	$filetmp=$_FILES["file"]["tmp_name"];
// 	// 	$filename=$_FILES["file"]["name"];
// 	// 	$filetype=$_FILES["file"]["type"];
// 	// 	$target_dir="../userimages/";
// 	// 	$imagepath=$target_dir.basename($_FILES["file"]["name"]);
// 	// 	// echo $filetmp;
// 	// 	// print_r($_FILES["file"]);
// 	// 	move_uploaded_file($filetmp,$imagepath);
// 	// }
//
//
// //inserting to database
// 	$sql_insert="INSERT INTO `donor`(`fname`, `email`, `dob`, `contact`, `bloodgroup`, `nationality`, `password`,`image`,`pgender`)
//      VALUES ('$fname','$email','$dob','$contact','$bloodgroup','$nationality','$password','$photo','$gender')";
// 	$sql_query=mysqli_query($conn,$sql_insert);
// 	if ($sql_query==TRUE) {
// 		echo "successful";
// 	}else{
// 		echo mysqli_error($conn);
// 	}
// }

//javascript
// function redirect($url=''){
// 	if(!empty($url))
// 	echo '<script>location.href="'.base_url .$url.'"</script>';
// }
// function validate_image($file){
// 	if(!empty($file)){
// 			// exit;
//         $ex = explode('?',$file);
//         $file = $ex[0];
//         $param =  isset($ex[1]) ? '?'.$ex[1]  : '';
// 		if(is_file(base_app.$file)){
// 			return base_url.$file.$param;
// 		}else{
// 			return base_url.'dist/img/no-image-available.png';
// 		}
// 	}else{
// 		return base_url.'dist/img/no-image-available.png';
// 	}
}


 ?>
