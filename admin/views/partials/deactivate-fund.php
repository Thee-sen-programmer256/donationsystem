<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$f_id=$_GET['a'];
$result =" UPDATE fundraise SET status='Inactive' WHERE f_id= $f_id" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<script> alert("Fundraise Deactivated");</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../fundraise.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to deactivate from Database";
}

?>