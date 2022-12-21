<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$donationId=$_GET['pd'];
$result =" DELETE FROM donation WHERE donationId= '$donationId'" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<script>alert("Successfully Deleted")</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../donations.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to delete frm Database";
}

?>