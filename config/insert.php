<?php

include 'connection.php';
if (isset($_POST['submit'])) {
  $title=$_POST['title'];
  $status=$_POST['status'];
  $body=$_POST['body'];
  $file_name= $_FILES['storyimage']['name'];
  $file_tmp = $_FILES['storyimage']['tmp_name'];


   //image Upload
  move_uploaded_file($_FILES['storyimage']['tmp_name'],"../images/".$file_name);

  $insert="INSERT INTO story (title,status,body,storyimage)VALUES('$title','$status','$body','$filename')";
  $sql=mysqli_query($insert,$connection);
}




 ?>
