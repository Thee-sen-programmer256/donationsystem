<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$id=$_GET['pd'];
$result =" DELETE FROM schedule WHERE id='$id'" ;
$display=mysqli_query($con, $result);

if($display){
    echo "<font color='green'>Record Deleted from Database";
}else{
    echo "<font color='red'>Failed to delete for Database";
}

?>