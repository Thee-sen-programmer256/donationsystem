<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

if(!$con){
    die("Could not connect: ". mysqli_connect_error());
}else{
   echo "successful connected";
}

if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

if(empty($id)){
    $sql = "INSERT INTO `schedule` (`title`,`she_description`,`client_type`,`start_datetime`,`end_datetime`) VALUES ('$title','$she_description','$client_type','$start_datetime','$end_datetime')";
}else{
    $sql = "UPDATE `schedule` set `title` = '{$title}', `she_description` = '{$she_description}',`client_type` = '{$client_type}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}' where `id` = '{$id}'";
}
$save = $con->query($sql);
if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('../events.php') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
?>