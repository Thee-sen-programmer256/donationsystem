<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$n_id=$_GET['pd'];
$result =" DELETE FROM notifications WHERE n_id= '$n_id'" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../notifications.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to delete frm Database";
}

?>