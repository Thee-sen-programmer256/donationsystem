<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$donorId=$_GET['pd'];
$result =" DELETE FROM donor WHERE donorId= '$donorId'" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../donor.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to delete frm Database";
}

?>