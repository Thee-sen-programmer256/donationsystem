<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$donorId=$_GET['a'];
$result =" UPDATE donor SET bloodgroupstatus='Verified' WHERE donorId= $donorId" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<script> alert("Blood Group Status Verified");</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../donor.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to verify from Database";
}

?>