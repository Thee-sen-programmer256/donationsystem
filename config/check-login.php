<?php
session_start();
 $server="localhost";
 $user="root";
 $pass="";
 $dbname="donation_procurement";

 $connection=mysqli_connect($server,$user,$pass,$dbname);
 if($connection==TRUE){
   // echo "success";
 }


// submitting to the login form
if(isset($_POST['Login'])){
  //echo working
  $pass=$_POST['password'];
  // $pass=mysqli_real_escape_string($conn,$user);
  $email=($_POST['email']);
  // $pwd=mysqli_real_escape_string($conn,$pwd);



  $sql_fetch=mysqli_query($connection,"SELECT * FROM admin WHERE email='".$email."' AND password='".$pass."'");
  if ($rows=mysqli_num_rows($sql_fetch) > 0) {
   // echo "FOUND";
   session_start();
   $_SESSION['email']=$email;
   $_SESSION['id']="";
   // $_SESSION['fname']=$count['fname'];

   header("location: ../admin/index.php");
  }else{

    $result=mysqli_query($connection,"SELECT * FROM patient WHERE email='".$email."' AND password='".$pass."'");
   if ($rows=mysqli_num_rows($result) > 0) {
    // echo "FOUND";
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['pid']="";
    // $_SESSION['fname']=$count['fname'];

    header("location: ../patientint.php");
  }else{

  $don=mysqli_query($connection,"SELECT * FROM donor WHERE email='".$email."' AND password='".$pass."'");
  // $sql_query=($connection, $sql_fetch) or die(mysqli_error());
  // $count=mysqli_fetch_array($sql_query);
  // $rows=mysqli_num_rows($count);
   if ($rows=mysqli_num_rows($don) > 0) {
    // echo "FOUND";
    session_start();
    $_SESSION['email']=$email;
      $_SESSION['donorId']="";
    // $_SESSION['fname']=$count['fname'];

    header("location: ../donorchannel/Home.php");
   }
   else{
    header("Location: login.php?error=Oops, User does not exist!!");
  }

}
}
}
?>
