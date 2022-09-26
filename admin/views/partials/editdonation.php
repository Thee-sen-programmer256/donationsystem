<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$donationId=$_GET['a'];
$result =" UPDATE donation SET statuss='confirmed' WHERE donationId= $donationId" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<script> alert("Donation Confirmed");</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../donations.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to delete frm Database";
}

?>

  
    
