<?php

include "config/check-reg.php";

include "config/connection.php";

 //    Patient registration

 if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['contact'])) {




    
  function validate($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }

  $email= validate($_POST['email']);
  $pass = validate($_POST['password']);
  $contact = validate($_POST['contact']);

  // $re_pass = validate($_POST['re_password']);
  // $name = validate($_POST['name']);

  $user_data = 'email='. $email. '&password='. $pass. '&contact='. $contact;


  if (empty($email)) {
    header("Location: patientreg.php?error=Email is required&$user_data");
    exit();
  }else if(empty($pass)){
    header("Location: patientreg.php?error=Password is required&$user_data");
    exit();
  }else if(empty($contact)){
    header("Location: patientreg.php?error=Contact is required&$user_data");
    exit();
  }
  // else if(empty($re_pass)){
  //     header("Location: signup.php?error=Re Password is required&$user_data");
  //     exit();
  // }

  // else if(empty($name)){
  //     header("Location: signup.php?error=Name is required&$user_data");
  //     exit();
  // }

  // else if($pass !== $re_pass){
  //     header("Location: signup.php?error=The confirmation password  does not match&$user_data");
  //     exit();
  // }

  else{

    // hashing the password
    $pass = md5($pass);

    $select = "SELECT * FROM patient WHERE email='$email' ";
    $res = mysqli_query($connection, $select);

    if (mysqli_num_rows($res) > 0) {
      header("Location: patientreg.php?error=The email is taken try another&$user_data");
      exit();
    }else if (mysqli_num_rows($res) > 0) {
      header("Location: patientreg.php?error=The contact exists already&$user_data");
      exit();
    }else{

      if(isset($_POST['pat'])){
        $fname=$_POST['fname'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $contact=$_POST['contact'];
        $bloodgroup=$_POST['bloodgroup'];
        $nation=$_POST['nationality'];
        $gender=$_POST['gender'];
        $pass=$_POST['password'];

        $file_name= $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];


         //image Upload
        move_uploaded_file($file_tmp,"images/".$file_name); 
  
    
    
       $pat = "INSERT INTO patient( `fname`, `email`, `dob`, `contact`, `bloodgroup`, `nationality`, `image`, `gender`, `password`)
       VALUES('$fname','$email','$dob','$contact','$bloodgroup','$nation','$file_name','$gender','$pass')";
       $input = mysqli_query($connection, $pat);
      }
       if ($input) {

        $result=mysqli_query($connection,"SELECT * FROM patient WHERE email='".$email."' AND password='".$pass."'");
   if ($rows=mysqli_num_rows($result) > 0) {
    // echo "FOUND";
    session_start();
    $_SESSION['email']=$email;
    // $_SESSION['fname']=$count['fname'];
    
    header("location:patientint.php");
      // $_SESSION['donorId']=$rows['donorId'];
      // header("Location: patientint.php");
      // 				$_SESSION['email']=$email;
              
      //  exit();
   
       }else {
           header("Location: patientreg.php?error=unknown error occurred&$user_data");
        exit();
       }
    }
  }

}

}


// else{
// 	header("Location: donorreg.php");
// 	exit();
// }

?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Patient reg form </title>
    <link rel="stylesheet" href="reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
     img#cimg{
 height: 15vh;
 width: 15vh;
 object-fit: cover;
 border-radius: 100% 100%;
}
     </style>
   </head>
<body >

    <div >
        <a href="Home/index.html">
        <img width="40px;" height="40px;" style="margin-left: -600%;" src="Home/images/back.png" alt="back">
    </a>
    </div>

    </div>
    <div class="row">
  <div class="container">
    <div class="title">Patient_Registration</div>
    <div class="content">
      <form action="#" method="post" enctype="multipart/form-data">

        <?php if (isset($_POST['error'])) { ?>
     		<p class="error"><?php echo $_POST['error']; ?></p>
     	<?php } ?>


        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <?php if (isset($_POST['email'])) { ?>
            <input type="email" placeholder="Enter your email"
            value="<?php echo $_POST['email']; ?>" name="email" required><br>
          <?php }else{ ?>
               <input type="text"
                      name="email"
                      placeholder="Enter your email"><br>
          <?php }?>

          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="datetime-local" name="dob" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="contact" required>
          </div>
          <div class="input-box">
            <span class="details">Blood group</span>
            <select class="select" name="bloodgroup" style="height: 65%;
            width: 100%;  max-height: 300px;border-radius:5px;border: 1px solid #ccc;">
            <option style="color:gray;">--select--</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">0</option>


            </select>
          </div>
          <div class="input-box">
            <span class="details">Nationality</span>
            <select class="" name="nationality" style="height: 62%;
            width: 100%;  max-height: 300px;border-radius:5px;border: 1px solid #ccc;">
            <option value="">--select--</option>
            <option value="afghan">Afghan</option>
    <option value="albanian">Albanian</option>
    <option value="algerian">Algerian</option>
    <option value="american">American</option>
    <option value="andorran">Andorran</option>
    <option value="angolan">Angolan</option>
    <option value="antiguans">Antiguans</option>
    <option value="argentinean">Argentinean</option>
    <option value="armenian">Armenian</option>
    <option value="australian">Australian</option>
    <option value="austrian">Austrian</option>
    <option value="azerbaijani">Azerbaijani</option>
    <option value="bahamian">Bahamian</option>
    <option value="bahraini">Bahraini</option>
    <option value="bangladeshi">Bangladeshi</option>
    <option value="barbadian">Barbadian</option>
    <option value="barbudans">Barbudans</option>
    <option value="batswana">Batswana</option>
    <option value="belarusian">Belarusian</option>
    <option value="belgian">Belgian</option>
    <option value="belizean">Belizean</option>
    <option value="beninese">Beninese</option>
    <option value="bhutanese">Bhutanese</option>
    <option value="bolivian">Bolivian</option>
    <option value="bosnian">Bosnian</option>
    <option value="brazilian">Brazilian</option>
    <option value="british">British</option>
    <option value="bruneian">Bruneian</option>
    <option value="bulgarian">Bulgarian</option>
    <option value="burkinabe">Burkinabe</option>
    <option value="burmese">Burmese</option>
    <option value="burundian">Burundian</option>
    <option value="cambodian">Cambodian</option>
    <option value="cameroonian">Cameroonian</option>
    <option value="canadian">Canadian</option>
    <option value="cape verdean">Cape Verdean</option>
    <option value="central african">Central African</option>
    <option value="chadian">Chadian</option>
    <option value="chilean">Chilean</option>
    <option value="chinese">Chinese</option>
    <option value="colombian">Colombian</option>
    <option value="comoran">Comoran</option>
    <option value="congolese">Congolese</option>
    <option value="costa rican">Costa Rican</option>
    <option value="croatian">Croatian</option>
    <option value="cuban">Cuban</option>
    <option value="cypriot">Cypriot</option>
    <option value="czech">Czech</option>
    <option value="danish">Danish</option>
    <option value="djibouti">Djibouti</option>
    <option value="dominican">Dominican</option>
    <option value="dutch">Dutch</option>
    <option value="east timorese">East Timorese</option>
    <option value="ecuadorean">Ecuadorean</option>
    <option value="egyptian">Egyptian</option>
    <option value="emirian">Emirian</option>
    <option value="equatorial guinean">Equatorial Guinean</option>
    <option value="eritrean">Eritrean</option>
    <option value="estonian">Estonian</option>
    <option value="ethiopian">Ethiopian</option>
    <option value="fijian">Fijian</option>
    <option value="filipino">Filipino</option>
    <option value="finnish">Finnish</option>
    <option value="french">French</option>
    <option value="gabonese">Gabonese</option>
    <option value="gambian">Gambian</option>
    <option value="georgian">Georgian</option>
    <option value="german">German</option>
    <option value="ghanaian">Ghanaian</option>
    <option value="greek">Greek</option>
    <option value="grenadian">Grenadian</option>
    <option value="guatemalan">Guatemalan</option>
    <option value="guinea-bissauan">Guinea-Bissauan</option>
    <option value="guinean">Guinean</option>
    <option value="guyanese">Guyanese</option>
    <option value="haitian">Haitian</option>
    <option value="herzegovinian">Herzegovinian</option>
    <option value="honduran">Honduran</option>
    <option value="hungarian">Hungarian</option>
    <option value="icelander">Icelander</option>
    <option value="indian">Indian</option>
    <option value="indonesian">Indonesian</option>
    <option value="iranian">Iranian</option>
    <option value="iraqi">Iraqi</option>
    <option value="irish">Irish</option>
    <option value="israeli">Israeli</option>
    <option value="italian">Italian</option>
    <option value="ivorian">Ivorian</option>
    <option value="jamaican">Jamaican</option>
    <option value="japanese">Japanese</option>
    <option value="jordanian">Jordanian</option>
    <option value="kazakhstani">Kazakhstani</option>
    <option value="kenyan">Kenyan</option>
    <option value="kittian and nevisian">Kittian and Nevisian</option>
    <option value="kuwaiti">Kuwaiti</option>
    <option value="kyrgyz">Kyrgyz</option>
    <option value="laotian">Laotian</option>
    <option value="latvian">Latvian</option>
    <option value="lebanese">Lebanese</option>
    <option value="liberian">Liberian</option>
    <option value="libyan">Libyan</option>
    <option value="liechtensteiner">Liechtensteiner</option>
    <option value="lithuanian">Lithuanian</option>
    <option value="luxembourger">Luxembourger</option>
    <option value="macedonian">Macedonian</option>
    <option value="malagasy">Malagasy</option>
    <option value="malawian">Malawian</option>
    <option value="malaysian">Malaysian</option>
    <option value="maldivan">Maldivan</option>
    <option value="malian">Malian</option>
    <option value="maltese">Maltese</option>
    <option value="marshallese">Marshallese</option>
    <option value="mauritanian">Mauritanian</option>
    <option value="mauritian">Mauritian</option>
    <option value="mexican">Mexican</option>
    <option value="micronesian">Micronesian</option>
    <option value="moldovan">Moldovan</option>
    <option value="monacan">Monacan</option>
    <option value="mongolian">Mongolian</option>
    <option value="moroccan">Moroccan</option>
    <option value="mosotho">Mosotho</option>
    <option value="motswana">Motswana</option>
    <option value="mozambican">Mozambican</option>
    <option value="namibian">Namibian</option>
    <option value="nauruan">Nauruan</option>
    <option value="nepalese">Nepalese</option>
    <option value="new zealander">New Zealander</option>
    <option value="ni-vanuatu">Ni-Vanuatu</option>
    <option value="nicaraguan">Nicaraguan</option>
    <option value="nigerien">Nigerien</option>
    <option value="north korean">North Korean</option>
    <option value="northern irish">Northern Irish</option>
    <option value="norwegian">Norwegian</option>
    <option value="omani">Omani</option>
    <option value="pakistani">Pakistani</option>
    <option value="palauan">Palauan</option>
    <option value="panamanian">Panamanian</option>
    <option value="papua new guinean">Papua New Guinean</option>
    <option value="paraguayan">Paraguayan</option>
    <option value="peruvian">Peruvian</option>
    <option value="polish">Polish</option>
    <option value="portuguese">Portuguese</option>
    <option value="qatari">Qatari</option>
    <option value="romanian">Romanian</option>
    <option value="russian">Russian</option>
    <option value="rwandan">Rwandan</option>
    <option value="saint lucian">Saint Lucian</option>
    <option value="salvadoran">Salvadoran</option>
    <option value="samoan">Samoan</option>
    <option value="san marinese">San Marinese</option>
    <option value="sao tomean">Sao Tomean</option>
    <option value="saudi">Saudi</option>
    <option value="scottish">Scottish</option>
    <option value="senegalese">Senegalese</option>
    <option value="serbian">Serbian</option>
    <option value="seychellois">Seychellois</option>
    <option value="sierra leonean">Sierra Leonean</option>
    <option value="singaporean">Singaporean</option>
    <option value="slovakian">Slovakian</option>
    <option value="slovenian">Slovenian</option>
    <option value="solomon islander">Solomon Islander</option>
    <option value="somali">Somali</option>
    <option value="south african">South African</option>
    <option value="south korean">South Korean</option>
    <option value="spanish">Spanish</option>
    <option value="sri lankan">Sri Lankan</option>
    <option value="sudanese">Sudanese</option>
    <option value="surinamer">Surinamer</option>
    <option value="swazi">Swazi</option>
    <option value="swedish">Swedish</option>
    <option value="swiss">Swiss</option>
    <option value="syrian">Syrian</option>
    <option value="taiwanese">Taiwanese</option>
    <option value="tajik">Tajik</option>
    <option value="tanzanian">Tanzanian</option>
    <option value="thai">Thai</option>
    <option value="togolese">Togolese</option>
    <option value="tongan">Tongan</option>
    <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
    <option value="tunisian">Tunisian</option>
    <option value="turkish">Turkish</option>
    <option value="tuvaluan">Tuvaluan</option>
    <option value="ugandan">Ugandan</option>
    <option value="ukrainian">Ukrainian</option>
    <option value="uruguayan">Uruguayan</option>
    <option value="uzbekistani">Uzbekistani</option>
    <option value="venezuelan">Venezuelan</option>
    <option value="vietnamese">Vietnamese</option>
    <option value="welsh">Welsh</option>
    <option value="yemenite">Yemenite</option>
    <option value="zambian">Zambian</option>
    <option value="zimbabwean">Zimbabwean</option>
    <option value="afghan">Afghan</option>
<option value="albanian">Albanian</option>
<option value="algerian">Algerian</option>
<option value="american">American</option>
<option value="andorran">Andorran</option>
<option value="angolan">Angolan</option>
<option value="antiguans">Antiguans</option>
<option value="argentinean">Argentinean</option>
<option value="armenian">Armenian</option>
<option value="australian">Australian</option>
<option value="austrian">Austrian</option>
<option value="azerbaijani">Azerbaijani</option>
<option value="bahamian">Bahamian</option>
<option value="bahraini">Bahraini</option>
<option value="bangladeshi">Bangladeshi</option>
<option value="barbadian">Barbadian</option>
<option value="barbudans">Barbudans</option>
<option value="batswana">Batswana</option>
<option value="belarusian">Belarusian</option>
<option value="belgian">Belgian</option>
<option value="belizean">Belizean</option>
<option value="beninese">Beninese</option>
<option value="bhutanese">Bhutanese</option>
<option value="bolivian">Bolivian</option>
<option value="bosnian">Bosnian</option>
<option value="brazilian">Brazilian</option>
<option value="british">British</option>
<option value="bruneian">Bruneian</option>
<option value="bulgarian">Bulgarian</option>
<option value="burkinabe">Burkinabe</option>
<option value="burmese">Burmese</option>
<option value="burundian">Burundian</option>
<option value="cambodian">Cambodian</option>
<option value="cameroonian">Cameroonian</option>
<option value="canadian">Canadian</option>
<option value="cape verdean">Cape Verdean</option>
<option value="central african">Central African</option>
<option value="chadian">Chadian</option>
<option value="chilean">Chilean</option>
<option value="chinese">Chinese</option>
<option value="colombian">Colombian</option>
<option value="comoran">Comoran</option>
<option value="congolese">Congolese</option>
<option value="costa rican">Costa Rican</option>
<option value="croatian">Croatian</option>
<option value="cuban">Cuban</option>
<option value="cypriot">Cypriot</option>
<option value="czech">Czech</option>
<option value="danish">Danish</option>
<option value="djibouti">Djibouti</option>
<option value="dominican">Dominican</option>
<option value="dutch">Dutch</option>
<option value="east timorese">East Timorese</option>
<option value="ecuadorean">Ecuadorean</option>
<option value="egyptian">Egyptian</option>
<option value="emirian">Emirian</option>
<option value="equatorial guinean">Equatorial Guinean</option>
<option value="eritrean">Eritrean</option>
<option value="estonian">Estonian</option>
<option value="ethiopian">Ethiopian</option>
<option value="fijian">Fijian</option>
<option value="filipino">Filipino</option>
<option value="finnish">Finnish</option>
<option value="french">French</option>
<option value="gabonese">Gabonese</option>
<option value="gambian">Gambian</option>
<option value="georgian">Georgian</option>
<option value="german">German</option>
<option value="ghanaian">Ghanaian</option>
<option value="greek">Greek</option>
<option value="grenadian">Grenadian</option>
<option value="guatemalan">Guatemalan</option>
<option value="guinea-bissauan">Guinea-Bissauan</option>
<option value="guinean">Guinean</option>
<option value="guyanese">Guyanese</option>
<option value="haitian">Haitian</option>
<option value="herzegovinian">Herzegovinian</option>
<option value="honduran">Honduran</option>
<option value="hungarian">Hungarian</option>
<option value="icelander">Icelander</option>
<option value="indian">Indian</option>
<option value="indonesian">Indonesian</option>
<option value="iranian">Iranian</option>
<option value="iraqi">Iraqi</option>
<option value="irish">Irish</option>
<option value="israeli">Israeli</option>
<option value="italian">Italian</option>
<option value="ivorian">Ivorian</option>
<option value="jamaican">Jamaican</option>
<option value="japanese">Japanese</option>
<option value="jordanian">Jordanian</option>
<option value="kazakhstani">Kazakhstani</option>
<option value="kenyan">Kenyan</option>
<option value="kittian and nevisian">Kittian and Nevisian</option>
<option value="kuwaiti">Kuwaiti</option>
<option value="kyrgyz">Kyrgyz</option>
<option value="laotian">Laotian</option>
<option value="latvian">Latvian</option>
<option value="lebanese">Lebanese</option>
<option value="liberian">Liberian</option>
<option value="libyan">Libyan</option>
<option value="liechtensteiner">Liechtensteiner</option>
<option value="lithuanian">Lithuanian</option>
<option value="luxembourger">Luxembourger</option>
<option value="macedonian">Macedonian</option>
<option value="malagasy">Malagasy</option>
<option value="malawian">Malawian</option>
<option value="malaysian">Malaysian</option>
<option value="maldivan">Maldivan</option>
<option value="malian">Malian</option>
<option value="maltese">Maltese</option>
<option value="marshallese">Marshallese</option>
<option value="mauritanian">Mauritanian</option>
<option value="mauritian">Mauritian</option>
<option value="mexican">Mexican</option>
<option value="micronesian">Micronesian</option>
<option value="moldovan">Moldovan</option>
<option value="monacan">Monacan</option>
<option value="mongolian">Mongolian</option>
<option value="moroccan">Moroccan</option>
<option value="mosotho">Mosotho</option>
<option value="motswana">Motswana</option>
<option value="mozambican">Mozambican</option>
<option value="namibian">Namibian</option>
<option value="nauruan">Nauruan</option>
<option value="nepalese">Nepalese</option>
<option value="new zealander">New Zealander</option>
<option value="ni-vanuatu">Ni-Vanuatu</option>
<option value="nicaraguan">Nicaraguan</option>
<option value="nigerien">Nigerien</option>
<option value="north korean">North Korean</option>
<option value="northern irish">Northern Irish</option>
<option value="norwegian">Norwegian</option>
<option value="omani">Omani</option>
<option value="pakistani">Pakistani</option>
<option value="palauan">Palauan</option>
<option value="panamanian">Panamanian</option>
<option value="papua new guinean">Papua New Guinean</option>
<option value="paraguayan">Paraguayan</option>
<option value="peruvian">Peruvian</option>
<option value="polish">Polish</option>
<option value="portuguese">Portuguese</option>
<option value="qatari">Qatari</option>
<option value="romanian">Romanian</option>
<option value="russian">Russian</option>
<option value="rwandan">Rwandan</option>
<option value="saint lucian">Saint Lucian</option>
<option value="salvadoran">Salvadoran</option>
<option value="samoan">Samoan</option>
<option value="san marinese">San Marinese</option>
<option value="sao tomean">Sao Tomean</option>
<option value="saudi">Saudi</option>
<option value="scottish">Scottish</option>
<option value="senegalese">Senegalese</option>
<option value="serbian">Serbian</option>
<option value="seychellois">Seychellois</option>
<option value="sierra leonean">Sierra Leonean</option>
<option value="singaporean">Singaporean</option>
<option value="slovakian">Slovakian</option>
<option value="slovenian">Slovenian</option>
<option value="solomon islander">Solomon Islander</option>
<option value="somali">Somali</option>
<option value="south african">South African</option>
<option value="south korean">South Korean</option>
<option value="spanish">Spanish</option>
<option value="sri lankan">Sri Lankan</option>
<option value="sudanese">Sudanese</option>
<option value="surinamer">Surinamer</option>
<option value="swazi">Swazi</option>
<option value="swedish">Swedish</option>
<option value="swiss">Swiss</option>
<option value="syrian">Syrian</option>
<option value="taiwanese">Taiwanese</option>
<option value="tajik">Tajik</option>
<option value="tanzanian">Tanzanian</option>
<option value="thai">Thai</option>
<option value="togolese">Togolese</option>
<option value="tongan">Tongan</option>
<option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
<option value="tunisian">Tunisian</option>
<option value="turkish">Turkish</option>
<option value="tuvaluan">Tuvaluan</option>
<option value="ugandan">Ugandan</option>
<option value="ukrainian">Ukrainian</option>
<option value="uruguayan">Uruguayan</option>
<option value="uzbekistani">Uzbekistani</option>
<option value="venezuelan">Venezuelan</option>
<option value="vietnamese">Vietnamese</option>
<option value="welsh">Welsh</option>
<option value="yemenite">Yemenite</option>
<option value="zambian">Zambian</option>
<option value="zimbabwean">Zimbabwean</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" value=""  required>
          </div>

          <div class="input-box">
            <span class="details">Image</span>
            <input type="file" name="image" required>
          </div>
          <!-- <div class="">
            <div class="form-group d-flex justify-content-center" style="margin-left:400%">
                                  <img src="dist/img/no-image-available.png" alt="" id="cimg" class="img-fluid img-thumbnail">
                              </div>

          </div> -->

        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="male" id="dot-1">
          <input type="radio" name="gender" value="female" id="dot-2">
          <input type="radio" name="gender" value="prefer not to say" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="pat" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
