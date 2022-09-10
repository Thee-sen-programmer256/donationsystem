<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$notifyId=$_GET['pd'];
$result =" DELETE FROM notify WHERE notifyId= '$notifyId'" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../notifications.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to delete frm Database";
}

?>