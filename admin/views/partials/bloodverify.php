<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$pId=$_GET['a'];
$result =" UPDATE patient SET bloodgroupstatus='Verified' WHERE pId= $pId" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<script> alert("Blood Group Status Verified");</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../patients.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to delete frm Database";
}

?>