<?php 
$con = mysqli_connect("localhost","root","","donation_procurement");

$requestId=$_GET['a'];
$result =" UPDATE request SET status='Rejected' WHERE requestId= $requestId" ;
$display=mysqli_query($con, $result);

if($display){
    echo '<script> alert("Request Rejected");</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../organrequests.php">';    
    exit;
}else{
    echo "<font color='red'>Failed to reject from Database";
}

?>

  
    
