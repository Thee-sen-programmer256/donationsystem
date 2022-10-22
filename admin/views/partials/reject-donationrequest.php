<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$id=$_GET['a'];
$result =" UPDATE donationappointment SET status='Rejected' WHERE id= $id" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<script> alert("Request Rejected");</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../organstock.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to Reject request";
}

?>