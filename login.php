<?php
session_start();
include_once "php/db.php";

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, secure_input($_POST['email']));
    $password = mysqli_real_escape_string($conn, secure_input($_POST['password']));

    if (!empty($email) && !empty($password)) {
        $check_details = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password' AND verify = 1");

        if (mysqli_num_rows($check_details) > 0) {
            while ($row = mysqli_fetch_assoc($check_details)) {
                $_SESSION['id'] = $row['id'];

                if ($_SESSION['id'] == 1) {
                    header("Location: admin/trydash.php");
                } else {
                    header("Location: trydash.php");
                }
            }
        } else {
            echo "<script>alert('Invalid details or You might have not enter your otp');window.history.back();</script>";
        }
    }
}


?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oway || Login</title>
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
          <div class="pl-[50px] pt-[180px] lg:pt-[50px]">
            <h2 class="text-white text-4xl font-extrabold">
              O<span class="text-purple-400 text-lg py-[10px]">Way</span>
            </h2>
            <p class="text-white text-lg">
              You Dont Have An Account?
              <a class="underline text-purple-400" href="sign.php">Sign Up</a>
            </p>
          </div>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="w-[95%] mx-auto text-center mt-[30px]">
              <div class="w-[90%] pt-[5px] mx-auto text-start">
                <label
                  class="text-white text-start font-bold text-sm"
                  for="name"
                  >Email :</label
                >
              </div>
              <input
                class="w-[90%] placeholder:text-white font-semibold text-sm py-[10px] px-[10px] bg-neutral-200 rounded-xl outline-none"
                type="email"
                name="email"
                placeholder="Example@gmail.com"
              />
            </div>

            <div class="w-[95%] mx-auto text-center mt-[30px]">
              <div class="w-[90%] pt-[5px] mx-auto text-start">
                <label
                  class="text-white text-start font-bold text-sm"
                  for="password"
                >
                  Password :</label
                >
              </div>
              <input
                class="w-[90%] placeholder:text-white font-semibold text-sm py-[10px] px-[10px] bg-neutral-200 rounded-xl outline-none"
                type="password"
                name="password"
                placeholder="Password"
              />
            </div>

            <div class="w-[95%] mx-auto text-center mt-[20px]">
              <input
                class="bg-gradient-to-r cursor-pointer py-[10px] rounded-md px-[10px] from-purple-600 to-blue-800 text-white font-bold text-sm w-[90%] mx-auto"
                type="submit"
                name="login"
                value="Login"
              />
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
