<?php 
 
 $server="localhost";
 $user="root";
 $pass="";
 $dbname="donation_procurement";
 
 $connection=mysqli_connect($server,$user,$pass,$dbname);
 if($connection==TRUE){
   // echo "success";
 }

// Add story

if(isset($_POST['tell'])){
	$title=$_POST['title'];
	$status=$_POST['status'];
	$tell_us=$_POST['tell_us'];
	
	    $file= $_FILES['image']['name'];
	    $file_tmp = $_FILES['image']['tmp_name'];


	             //image Upload
                move_uploaded_file($file_tmp,"images/".$file); 
	

	$sql_insert="INSERT INTO `story`(`title`, `status`, `photo`, `tell_us`)VALUES ('$title','$status','$file','$tell_us')";
	$sql_query=mysqli_query($connection,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($connection);
	}
}

						
?>