<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$pid=$_GET['pd'];
$result =" DELETE FROM patient WHERE pid= '$pid'" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../patient.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to delete frm Database";
}

?>