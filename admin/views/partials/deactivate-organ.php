<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$organId=$_GET['pd'];
$result =" UPDATE organ SET statuss='Unavailable' WHERE organId= $organId" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<script> alert("Organ Deactivated");</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../organstock.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to deactivate from Database";
}

?>

  
    
