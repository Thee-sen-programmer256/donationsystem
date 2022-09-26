<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$notifyId=$_GET['a'];
$result =" UPDATE notify SET statuss='Inactive' WHERE notifyId= $notifyId" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<script> alert("Notification Deactivated");</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../notifications.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to deactivate from Database";
}

?>