<?php
session_start();
$msg = "";
include_once "php/db.php";

// error variables

$error = 0;

$nameErr = "";
$emailErr = "";
$phoneErr = "";
$dobErr = "";
$countryErr = "";
$addressErr ="";
$passwordErr = "";
$conpswErr = "";

// variables 

$name = "";
$email = "";
$phone = "";
$dob = "";
$country = "";
$address = "";
$password = "";
$conpsw = "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if(isset($_POST['sign_up']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = mysqli_real_escape_string($conn, secure_input($_POST['name']));
  $email = mysqli_real_escape_string($conn, secure_input($_POST['email']));
  $phone = mysqli_real_escape_string($conn, secure_input($_POST['phone']));
  $dob = mysqli_real_escape_string($conn, secure_input($_POST['dob']));
  $country = mysqli_real_escape_string($conn, secure_input($_POST['country']));
  $address = mysqli_real_escape_string($conn, secure_input($_POST['address']));
  $password = mysqli_real_escape_string($conn, secure_input($_POST['password']));
  $conpsw = mysqli_real_escape_string($conn, secure_input($_POST['confirm_password']));
  


  if (empty($name)) {
    $nameErr = "Name is Required";
    $error = 1;
  }elseif(!preg_match("/^[a-zA-Z ]*$/", $name)){
    $name = trim($name);
    $nameErr ="name should not contain numbers";
    $error = 1;
  }
  
  if(empty($email)){
    $emailErr = "email is empty";
    $error = 1;
  }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $emailErr = "please enter a valid email";
   $error = 1;
  }
  if (empty($phone)) {
    $phoneErr = "phone number is required";
    $error = 1;
  }elseif(strlen($phone) <= 10){
    $phoneErr = "incorrect phone number";
    $error = 1;
  }
  if (empty($dob)) {
    $dobErr = "Date of birth is required";
    $error = 1;
  }
  if (empty($country)) {
    $countryErr = "country is required";
    $error = 1;
  }
  if (empty($address)) {
    $addressErr = "address is required";
    $error = 1;
  }
  if(empty($password)){
    $passwordErr = "password is required";
    $error = 1;
  }elseif(strlen($password) <= 8){
    $passwordErr = "password should contain at least 8 characters";
    $error = 1;
  }elseif(!preg_match("#[0-9]+#", $password)){
    $passwordErr = "password must contain at least 1 number";
  }
  elseif(!preg_match("#[A-Z]+#", $password)){
    $passwordErr = "password must contain at least 1 Capiter Letter";
  }
  elseif(!preg_match("#[a-z]+#", $password)){
    $passwordErr = "password must contain at least 1 small Letter";
  }
  if (empty($conpsw)) {
    $conpswErr = "You Must confirm password to proceed";
  }elseif($password != $conpsw){
    $conpswErr = "passwords does not match";
  }
  
   
  // eiupnearxzvmrjmb

  if ($error === 0) {
    
    $get_details = "SELECT * FROM `users` WHERE email = '$email'";
    $query2 = mysqli_query($conn, $get_details);
    $query = mysqli_query($conn, $get_details);
    if(mysqli_num_rows($query) > 0 ) {
      echo "<script>alert('User Already Existing');window.history.back();</script>";
    }else{
        $account = '0.00';
        // Insert into database
        $insert = "INSERT INTO `users`(`name`, `email`, `account`, `phone`, `dob`, `country`, `address`, `password`) VALUES ('$name','$email','$account','$phone','$dob','$country','$address','$password')";

        // query database
        $query = mysqli_query($conn, $insert);
    
        // check if insert was successful
        if($query){
          
          // $user_id = $_SESSION['id'];
          $get_user_details = mysqli_query($conn, "SELECT  * FROM `users` WHERE email = '$email'");
          if(mysqli_num_rows($get_user_details) > 0) {
              while($row = mysqli_fetch_assoc($get_user_details)){
                  $user_name  = $row['name'];
                  $user_email = $row['email'];
                  $user_id = $row['id'];
                  // $amount = $row['account'];
              }
          }
};
        
        // $result = mysqli_fetch_assoc($query2);
        $username = $name;
        $useremail = $email;
        // echo $useremail;

        // $_SESSION["id"] = $result["id"];

        $otp = rand(00000,99999);

        $created_at = date('Y-m-d H:i:s');


        $messsage = `<div>
        <p>Hello $name</p><br>
         <p>This is Your OTP to verify Your Oway</p>
        </div>`;

        $mail = new PHPMailer(true);

            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send throu
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'okwastephen23@gmail.com';                     //SMTP username
            $mail->Password   = 'esvzbmpvivaxxadz';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             //Enable implicit TLS encryption
            $mail->Port      = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('supportoway@gmail.com', 'Oway bank of nigeria');
            $mail->addAddress($useremail, $username);     //Add a recipient
            
        
           
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Welcome to oway';
            $mail->Body    = '<div>
        <p>Hello '.$name.'</p><br>
         <p>This is Your OTP to verify Your Oway. <strong>'.$otp.'</strong></p>
        </div>';
           
        
            if ( $mail->send()) {

              $insert_otp = "INSERT INTO `otp`( `otp`, `user_id`, `user_email`, `time`) VALUES ('$otp','$user_id','$user_email','$created_at')";


              $query3 = mysqli_query($conn, $insert_otp);
              
              if($query3){
                header("Location: otp.php");
              }
              
            }
           
        
        // }else{
        //   echo "details are invalid";
        // }
  
    }
  }else{
    // $msg = "fill all forms oo";
    // echo '<script>window.history.back()</script>';
    // exit();
  }

  };


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oway || Sign Up</title>
    <link rel="stylesheet" href="css/output.css" />
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </head>
  <body>
    <section
      class="bg-gradient-to-r from-blue-800 h-screen overflow-y-scroll to-purple-600"
    >
      <div class="w-[90%] lg:flex mx-auto pt-[20px]">
        <div
          class="lg:w-[50%] bg-transparent py-[20px] rounded w-[95%] mx-auto"
        >
          <div class="pl-[50px] pt-[30px]">
            <h2 class="text-white text-4xl font-extrabold">
              O<span class="text-purple-400 text-lg py-[10px]">Way</span>
            </h2>
            <p class="text-white text-lg">
              Already Have An Account?
              <a class="underline text-purple-400" href="login.php">Login</a>
            </p>
          </div>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="w-[95%] mx-auto text-center mt-[30px]">
              <div class="w-[90%] pt-[3px] mx-auto text-start">
                <label
                class="text-white text-start font-bold text-sm"
                for="name"
                >Names :</label
                >
                <span class="text-sm block py-[3px] font-bold text-red-500"><?php if (!empty($nameErr)) {
                  echo $nameErr;
                } ?></span>
                
              </div>
              <input
                class="w-[90%] placeholder:text-white font-semibold text-sm py-[10px] px-[10px] bg-neutral-200 rounded-xl outline-none"
                type="text"
                id="name"
                value="<?php echo $name ?>"
                name="name"
                placeholder="Full Name"
              />
            </div>

            <div class="w-[95%] mx-auto text-center mt-[30px]">
              <div class="w-[90%] pt-[5px] mx-auto text-start">
                <label
                  class="text-white text-start font-bold text-sm"
                  for="email"
                  >Email :</label
                >
                <span class="text-sm block py-[3px] font-bold text-red-500"><?php if (!empty($emailErr)) {
                  echo $emailErr;
                } ?></span>
              </div>
              <input
                class="w-[90%] placeholder:text-white font-semibold text-sm py-[10px] px-[10px] bg-neutral-200 rounded-xl outline-none"
                type="email"
                value="<?php echo $email ?>"
                name="email"
                placeholder="Example@gmail.com"
              />
            </div>

            <div class="w-[95%] mx-auto text-center mt-[30px]">
              <div class="w-[90%] pt-[5px] mx-auto text-start">
                <label
                  class="text-white text-start font-bold text-sm"
                  for="name"
                  >Phone No :</label
                >
                <span class="text-sm block py-[3px] font-bold text-red-500"><?php if (!empty($phoneErr)) {
                  echo $phoneErr;
                } ?></span>
              </div>
              <input
                class="w-[90%] placeholder:text-white font-semibold text-sm py-[10px] px-[10px] bg-neutral-200 rounded-xl outline-none"
                type="number"
                value="<?php echo $phone ?>"
                name="phone"
                placeholder="+234-90-2749-8384"
              />
            </div>

            <div class="w-[95%] mx-auto text-center mt-[30px]">
              <div class="w-[90%] pt-[5px] mx-auto text-start">
                <label
                  class="text-white text-start font-bold text-sm"
                  for="name"
                  >Date Of Birth :</label
                >
                <span class="text-sm block py-[3px] font-bold text-red-500"><?php if (!empty($dobErr)) {
                  echo $dobErr;
                } ?></span>
              </div>
              <input
                class="w-[90%] text-white placeholder:text-white font-semibold text-sm py-[10px] px-[10px] bg-neutral-200 rounded-xl outline-none"
                type="date"
                name="dob"
                value="<?php echo $dob ?>"
              />
            </div>

            <div class="w-[95%] mx-auto text-center mt-[30px]">
              <div class="w-[90%] pt-[5px] mx-auto text-start">
                <label
                  class="text-white text-start font-bold text-sm"
                  for="name"
                  >Country :</label
                >
                <span class="text-sm block py-[3px] font-bold text-red-500"><?php if (!empty($countryErr)) {
                  echo $countryErr;
                } ?></span>
              </div>
              <input
                class="w-[90%] placeholder:text-white font-semibold text-sm py-[10px] px-[10px] bg-neutral-200 rounded-xl outline-none"
                type="text"
                name="country"
                value="<?php echo $country ?>"
                placeholder="Country"
              />
            </div>

            <div class="w-[95%] mx-auto text-center mt-[30px]">
              <div class="w-[90%] pt-[5px] mx-auto text-start">
                <label
                  class="text-white text-start font-bold text-sm"
                  for="name"
                  >Address :</label
                >
                <span class="text-sm block py-[3px] font-bold text-red-500"><?php if (!empty($addressErr)) {
                  echo $addressErr;
                } ?></span>
              </div>
              <input
                class="w-[90%] placeholder:text-white font-semibold text-sm py-[10px] px-[10px] bg-neutral-200 rounded-xl outline-none"
                type="text"
                name="address"
                value="<?php echo $address ?>"
                placeholder="Address"
              />
            </div>

            <!-- <div class="w-[95%] mx-auto text-center mt-[30px]">
              <input
                class="w-[90%] placeholder:text-white font-semibold text-sm py-[10px] px-[10px] bg-neutral-200 rounded-xl outline-none"
                type="text"
                placeholder="Full Name"
              />
            </div> -->

            <div class="w-[95%] mx-auto text-center mt-[30px]">
              <div class="w-[90%] pt-[5px] mx-auto text-start">
                <label
                  class="text-white text-start font-bold text-sm"
                  for="name"
                  >Set a Password :</label
                >
                <span class="text-sm block py-[3px] font-bold text-red-500"><?php if (!empty($passwordErr)) {
                  echo $passwordErr;
                } ?></span>
              </div>
              <input
                class="w-[90%] placeholder:text-white font-semibold text-sm py-[10px] px-[10px] bg-neutral-200 rounded-xl outline-none"
                type="password"
                name="password"
                placeholder="Password"
              />
            </div>

            <div class="w-[95%] mx-auto text-center mt-[30px]">
              <div class="w-[90%] pt-[5px] mx-auto text-start">
                <label
                  class="text-white text-start font-bold text-sm"
                  for="name"
                  >Confirm Password :</label
                >
                <span class="text-sm block py-[3px] font-bold text-red-500"><?php if (!empty($conpswErr)) {
                  echo $conpswErr;
                } ?></span>
              </div>
              <input
                class="w-[90%] placeholder:text-white font-semibold text-sm py-[10px] px-[10px] bg-neutral-200 rounded-xl outline-none"
                type="password"
                name="confirm_password"
                placeholder="confirm Password"
              />
            </div>

            
            <div class="w-[95%] mx-auto text-center mt-[20px]">
              <input
                class="bg-gradient-to-r cursor-pointer py-[10px] rounded-md px-[10px] from-purple-600 to-blue-800 text-white font-bold text-sm w-[90%] mx-auto"
                type="submit"
                name="sign_up"
                value="Create Account"
              />
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
