<?php
session_start();
include_once "php/db.php";

// Get the OTP from the database
$get_otp = mysqli_query($conn, "SELECT * FROM `otp`");
if (mysqli_num_rows($get_otp) > 0) {
    while ($row = mysqli_fetch_assoc($get_otp)) {
        $otp = $row['otp'];
        $user_email = $row['user_email'];
    }
}

// if(isset($_POST['sign_up']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
//   $first_num = mysqli_real_escape_string($conn, secure_input($_POST['first']));
//   $second_num = mysqli_real_escape_string($conn, secure_input($_POST['second']));
//   $third_num = mysqli_real_escape_string($conn, secure_input($_POST['third']));
//   $fourth_num = mysqli_real_escape_string($conn, secure_input($_POST['fourth']));
//   $fifth_num = mysqli_real_escape_string($conn, secure_input($_POST['fifth']));

  
// }
// Display the OTP form
// try 

// $otp_query = mysqli_query($conn, "SELECT * FROM `otp` WHERE `otp` = '$otp' AND `user_id` = `$user_id` and 'time'>= DATE_SUB(NOW(),INTERVAL 5 minutes)");

if (isset($_POST['verify'])) {
  $first_num = mysqli_real_escape_string($conn, secure_input($_POST['first']));
  $second_num = mysqli_real_escape_string($conn, secure_input($_POST['second']));
  $third_num = mysqli_real_escape_string($conn, secure_input($_POST['third']));
  $fourth_num = mysqli_real_escape_string($conn, secure_input($_POST['fourth']));
  $fifth_num = mysqli_real_escape_string($conn, secure_input($_POST['fifth']));
  $user_otp = $first_num.$second_num.$third_num.$fourth_num.$fifth_num;

  if ($user_otp == $otp) {
      // Update the user's status to verified
      $update_user = mysqli_query($conn, "UPDATE `users` SET verify = '1' WHERE email = '$user_email'");
      if ($update_user) {
          // Delete the OTP from the database
          $delete_otp = mysqli_query($conn, "DELETE FROM `otp` WHERE user_email = '$user_email'");

          // Log the user in
          $get_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$user_email'");
          if (mysqli_num_rows($get_user) > 0) {
              while ($row = mysqli_fetch_assoc($get_user)) {
                  $_SESSION['id'] = $row['id'];
                  $_SESSION['email'] = $row['email'];
              }
          }
          // echo "Account verified successfully!";
          header("Location: trydash.php");
          exit();
      } else {
          echo "Error: Unable to verify account";
      }
  } else {
      echo "Error: Invalid OTP";
  }
}



?>














<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/output.css" />
  </head>
  <body>
    <section
      class="bg-gradient-to-r from-blue-800 h-screen flex place-content-center items-center overflow-y-scroll to-purple-600"
    >
      <div class="bg-white rounded-md shadow-md w-[95%] h-[800px] md:h-[520px]">
        <h2
          class="text-purple-400 text-center pt-[10px] text-4xl font-extrabold"
        >
          O<span class="text-purple-400 text-lg py-[10px]">Way</span>
        </h2>
        <span class="text-sm font-bold block text-center"
          >Welcome to oway bank</span
        >
        <div class="flex md:flex-row flex-col px-[20px]">
          <div class="md:w-[50%] w-[90%]">
            <img
              src="image/mobile-otp-secure-verification-method-onetime-password-secure-transaction-woman-using-security-otp-one-time-password-verification-mobile-app-smartphone-screen-2step-verification_735449-280.avif"
              alt=""
            />
          </div>
          <div
            class="mt-[20px] mx-auto flex pt-[20px] md:pt-0 place-content-center h-[400px] rounded w-[90%] md:w-[50%]"
          >
            <div class="bg-neutral-100 rounded-md w-[400px] h-[400px]">
              <h2 class="text-lg font-bold text-center pt-[50px]">
                OTP Verification
              </h2>
              <span class="text-sm font-semibold block text-center"
                >OTP code has been sent to
                <span class="font-bold">normal@gmail.com</span></span
              >
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div
                  class="w-[90%] mt-[40px] flex gap-2 place-content-center mx-auto p-[10px]"
                >
                  <input
                    class="w-[50px] outline-none text-center text-lg font-bold h-[50px] rounded bg-neutral-400"
                    type="text"
                    name="first"
                    maxlength="1"
                  />
                  <input
                    class="w-[50px] outline-none text-center text-lg font-bold h-[50px] rounded bg-neutral-400"
                    type="text"
                    name="second"
                    maxlength="1"
                  />
                  <input
                    class="w-[50px] outline-none text-center text-lg font-bold h-[50px] rounded bg-neutral-400"
                    type="text"
                    name="third"
                    maxlength="1"
                  />
                  <input
                    class="w-[50px] outline-none text-center text-lg font-bold h-[50px] rounded bg-neutral-400"
                    type="text"
                    name="fourth"
                    maxlength="1"
                  />
                  <input
                    class="w-[50px] outline-none text-center text-lg font-bold h-[50px] rounded bg-neutral-400"
                    type="text"
                    name="fifth"
                    maxlength="1"
                  />
                </div>
                <div>
                  <p class="text-sm text-center font-semibold pt-[10px]">
                    Didn't recieve OTP code?
                    <a class="underline" href="">Resend</a>
                  </p>
                </div>
                <div class="w-[80%] mt-[20px] mx-auto">
                  <input
                    class="w-full rounded-md py-[7px] bg-neutral-400 pz-[10px] text-white font-semibold text-lg"
                    type="submit"
                    value="Verify"
                    name="verify"
                  />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

