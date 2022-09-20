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
// if(isset($_POST['Login'])){

//     function validate($data){
//                $data = trim($data);
//                $data = stripslashes($data);
//                $data = htmlspecialchars($data);
//                return $data;
//             }

//     //echo working
//     $email = validate($_POST['email']);
//     $pass = validate($_POST['password']);
//     // $user = validate($_POST['username']);

//        if (empty($email)) {
//                 header("Location: ../Home/login.php?error=Email is required");
//                 exit();
//             }else if(empty($pass)){
//                 header("Location: ../Home/login.php?error=Password is required");
//                 exit();
//             }else{
//                 // hashing the password
//                 $pass = md5($pass);
        
  
  
//        $sql_fetch="SELECT * FROM admin WHERE email='$email' AND password='$pass'";
//     $sql_query=mysqli_query($connection, $sql_fetch) or die(mysqli_error()); 
//     $count=mysqli_num_rows($sql_query);
//      if ($count >0) { 
         
//          $rows=mysqli_fetch_assoc($sql_query); 
//      $_SESSION['id']=$rows['id'];
//       // $_SESSION['username']=$user;
//       header("location: ../Home/index.html");
//     }else{
  
//     $sql_fetch="SELECT * FROM donor WHERE email='$email' AND Password='$pass'";
//     $sql_query=mysqli_query($connection, $sql_fetch) or die(mysqli_error());
//     $count=mysqli_num_rows($sql_query);
//      if ($count >0) {

//         $rows=mysqli_fetch_assoc($sql_query); 
//         $_SESSION['id']=$rows['id'];
//          $_SESSION['email']=$email;
//          header("location: ../Home/index.html");
//     }else{
  
//     $sql_fetch="SELECT * FROM patient WHERE email='$email' AND password='$pass'";
//     $sql_query=mysqli_query($connection, $sql_fetch) or die(mysqli_error());
//     $count=mysqli_num_rows($sql_query);
//      if ($count >0) {
//       // echo "FOUND";
//       $_SESSION['pid']=$rows['pid'];
//       $_SESSION['email']=$email;
//       header("location: ../Home/index.html");
//      }
//      else{
      
//        header("Location: ../Homme/login.php?error=unknown error occurred&$user_data");
//        exit();
//     }
    
//   }      
//   }
//   }
// }


// submitting to the login form
if(isset($_POST['Login'])){
  //echo working
  $pass=$_POST['password'];
  // $pass=mysqli_real_escape_string($conn,$user);
  $email=($_POST['email']);
  // $pwd=mysqli_real_escape_string($conn,$pwd);
  



 	$sql_fetch="SELECT * FROM admin WHERE email='$email' AND password='$pass'";
  $sql_query=mysqli_query($connection, $sql_fetch) or die(mysqli_error()); 
  $count=mysqli_num_rows($sql_query);
   if ($count >0) { 
   	
   	$rows=mysqli_fetch_assoc($sql_query); 
   $_SESSION['id']=$rows['id'];
   
   
    $_SESSION['email']=$email;
    header("location: ../Home/index.html");
  }else{

  $sql_fetch="SELECT * FROM patient WHERE email='$email' AND Password='$pass'";
  $sql_query=mysqli_query($connection, $sql_fetch) or die(mysqli_error());
  $count=mysqli_num_rows($sql_query);
   if ($count >0) {
   	// echo ($_SESSION['workerId']);
   	// $rows=mysqli_fetch_assoc($sql_query);
   	$_SESSION['pid']=$rows['pid'];
    // echo "FOUND";
    $_SESSION['email']=$email;
    header("location: ../Home/index.html");
  }else{

  $sql_fetch="SELECT * FROM donor WHERE email='$email' AND password='$pass'";
  $sql_query=mysqli_query($connection, $sql_fetch) or die(mysqli_error());
  $count=mysqli_num_rows($sql_query);
   if ($count >0) {
    // echo "FOUND";
    $_SESSION['id']=$rows['id'];
    $_SESSION['email']=$email;
    header("location: ../Home/index.html");
   }
   else{
 	echo "NOT FOUND";
  }
  
}      
}
}
?>