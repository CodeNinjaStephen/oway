<?php 
session_start(); 
if (!isset($_SESSION['id'])) { 
    header("Location: login.php"); 
}
include_once "php/db.php"; 
$user_id = $_SESSION['id']; 


$id = $_GET['rec_id']; 


// echo $id;

$amount = ""; 
$status2 = '1'; 


if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, secure_input($_POST['name']));
    $email = mysqli_real_escape_string($conn, secure_input($_POST['email']));
    $amount = mysqli_real_escape_string($conn, secure_input($_POST['amount']));
    $user_id = mysqli_real_escape_string($conn, secure_input($_POST['user_id']));
    $rec_id = mysqli_real_escape_string($conn, secure_input($_POST['rec_id']));
    $pin = mysqli_real_escape_string($conn, secure_input($_POST['pin']));

    $get_user_balance = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id' AND pin = '$pin'");
    
    if(mysqli_num_rows($get_user_balance) > 0) {
        $row = mysqli_fetch_assoc($get_user_balance);
        $new_balance = $row['account'] - $amount;
        
        if ($amount > $row['account']) {
            echo "<script>alert('Insufficient balance');window.history.back();</script>";
        }else {
            $remark = 'Sent';
            $time = Date("y/m/d");
            $status = 1; // Set status to 1 for successful transaction
            $ref = rand(1,9).rand(1,9).rand(1,9).rand(1,9);
            $transfer = 'Trns';
            
            $insert = "INSERT INTO `transaction`( `name`, `amount`, `remark`, `time`, `email`, `status`, `transaction_ref`, `user_id`, `rec_id`) VALUES ('$name','$amount','$remark','$time','$email','$status','$ref','$user_id','$rec_id')";
            $query2 = mysqli_query($conn, $insert);
            
            if ( $query2 == TRUE) {
                // Update sender's balance
                $minus_balance = mysqli_query($conn, "UPDATE `users` SET `account`='$new_balance' WHERE id = '$user_id'");
                
                // Get receiver's current balance
                $get_receiver_balance = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$rec_id'");
                $receiver_row = mysqli_fetch_assoc($get_receiver_balance);
                $receiver_new_balance = $receiver_row['account'] + $amount;
                
                // Update receiver's balance
                $add_balance = mysqli_query($conn, "UPDATE `users` SET `account`='$receiver_new_balance' WHERE id = '$rec_id'");
             
                   
              if ( $add_balance == TRUE) {
                $get_user_details2 = mysqli_query($conn, "SELECT * FROM `transaction` WHERE rec_id = $rec_id ");
               if(mysqli_num_rows($get_user_details2) > 0){
               $row2 = mysqli_fetch_assoc($get_user_details2);
               $user = $row2['user_id'];
                $rec_id2 = $row2['rec_id'];
                $amount2 = $row2['amount'];
                $date = $row2['time'];
                 $name1 = $row2['name'];
                 $email = $row2['email'];

                // geting the main transferer name 
                 $get_user2 = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'");
                 if(mysqli_num_rows($get_user2) > 0) {
                     $row1 = mysqli_fetch_assoc($get_user2);
                         $username1  = $row1['name'];
                        
                     
                 }
                  // echo $name11;

                   $remark2 = 'Recieved';
                   $insert2 = "INSERT INTO `transaction`( `name`, `amount`, `remark`, `time`, `email`, `status`, `transaction_ref`, `user_id`, `rec_id`) VALUES ('$username1','$amount','$remark2','$time','$email','$status','$ref','$rec_id','$user_id')";
                   $query3 = mysqli_query($conn, $insert2);
               }


              }


                echo "<script>alert('Transfer has been processed Successfully');window.history.back();</script>";
            }
        }
    }else{
      echo "<script>alert('Pls Enter Amount and Pin to continue or Try Creating a Pin');window.history.back();</script>";
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
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </head>
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
      overflow-x: scroll;
    }

    th,
    td {
      text-align: left;
      padding: 10px;
    }
    td {
      font-size: 13px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
  <body>
    <section class="w-full h-screen">
      <div class="w-full h-[100%] flex">
        <!-- side bar  -->
        <div
          class="md:w-[20%] absolute nav_links left-[-100%] z-[1000] md:static w-[90%] duration-[0.5s] bg-purple-500 h-[100%]"
        >
          <div class="h-[130px] flex place-content-center items-center w-full">
            <span
              class="text-white font-extrabold text-4xl text-center cursor-pointer w-[25%] py-[15px] h-[60px]"
              >O<span class="text-black text-lg">Way.</span></span
            >
          </div>
          <div class="w-full h-fit py-[20px]">
            <a
              class="text-white bg-purple-300 rounded py-[10px] mx-auto w-[95%] flex place-content-start px-[20px] font-bold text-sm"
              href="trydash.php"
              ><span class="flex items-center"
                ><ion-icon
                  class="text-xl pr-[5px]"
                  name="home-outline"
                ></ion-icon>
                Home</span
              ></a
            >

            <a
              class="text-white mt-[20px] bg-purple-300 rounded py-[10px] mx-auto w-[95%] flex place-content-start px-[20px] font-bold text-sm"
              href="transac.php"
              ><span class="flex items-center"
                ><ion-icon
                  class="text-xl pr-[5px]"
                  name="sync-sharp"
                ></ion-icon>
                Transactions</span
              ></a
            >

            <a
              class="text-white mt-[20px] bg-black rounded py-[10px] mx-auto w-[95%] flex place-content-start px-[20px] font-bold text-sm"
              href="sendmoney.php"
              ><span class="flex items-center"
                ><ion-icon
                  class="text-xl pr-[5px]"
                  name="send-sharp"
                ></ion-icon>
                Send Money</span
              ></a
            >

            <a
              class="text-white mt-[20px] bg-purple-300 rounded py-[10px] mx-auto w-[95%] flex place-content-start px-[20px] font-bold text-sm"
              href=""
              ><span class="flex items-center"
                ><ion-icon
                  class="text-xl pr-[5px]"
                  name="settings-sharp"
                ></ion-icon>
                Settings</span
              ></a
            >

            <a
              class="text-white mt-[20px] bg-purple-300 rounded py-[10px] mx-auto w-[95%] flex place-content-start px-[20px] font-bold text-sm"
              href=""
              ><span class="flex items-center"
                ><ion-icon
                  class="text-xl pr-[5px]"
                  name="people-sharp"
                ></ion-icon>
                Customer Care</span
              ></a
            >

            <a
              class="text-white mt-[20px] bg-purple-300 rounded py-[10px] mx-auto w-[95%] flex place-content-start px-[20px] font-bold text-sm"
              href=""
              ><span class="flex items-center"
                ><ion-icon
                  class="text-xl pr-[5px]"
                  name="home-outline"
                ></ion-icon>
                Home page</span
              ></a
            >
          </div>
        </div>
        <!-- side bar end  -->
        <div class="md:w-[80%] w-full h-[100%]">
          <div
            class="w-full flex justify-between items-center px-[20px] h-[50px] border-2"
          >
            <span class="text-sm font-semibold">Transfer to Oway Account </span>
            <span
              onclick="onToggleMenu(this)"
              class="md:hidden w-[20px] h-[20px] font-bold pr-2 lg:hidden xl:hidden"
              ><ion-icon name="menu-outline"></ion-icon
            ></span>
          </div>
          <div class="px-[20px] w-full">
            <div
              class="mt-[10px] flex items-center place-content-center w-full h-[70px] bg-neutral-400 rounded-md"
            >
              <span
                class="text-white font-extrabold text-3xl text-center cursor-pointer w-[25%] h-[50px]"
                >O<span class="text-black text-lg">Way.</span></span
              >
            </div>
          </div>
          <div class="px-[20px] w-full">
            <div
              class="mt-[10px] flex-col flex items-center place-content-center w-full h-[70px] bg-neutral-400 rounded-md"
            >
            <?php  
              $get_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$id'");
              if(mysqli_num_rows($get_user) > 0) {
                  $row1 = mysqli_fetch_assoc($get_user);
                      $username  = $row1['name'];
                      $email = $row1['email'];
                      $phone = $row1['phone'];
                      $amount = $row1['account'];
                      $rec_id = $row1['id'];
                  
              } 
              ?>
              <h2 class="text-black capitalize font-bold text-lg">
                <?= $username ?>
              </h2>
              <span class="text-sm text-neutral-500 font-bold"><?= $phone ?></span>
            </div>
          </div>
          <div class="px-[20px] w-full">
            <div
              class="mt-[10px] w-full h-[30px] flex items-center px-[10px] bg-purple-300 rounded-md"
            >
              <p class="text-purple-500 font-semibold text-sm">
                Instant, Zero Issues, Free
              </p>
            </div>
          </div>
          <div class="px-[20px] w-full">
            <form
              class="w-full items-center place-content-center"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"
            >
              <div
                class="mt-[10px] flex flex-col gap-3 pt-[30px] items-center px-[10px] w-full h-[150px] bg-neutral-400 rounded-md"
              >
                <input
                  class="outline-none text-sm font-semibold bg-white w-[90%] rounded-md py-[8px] px-[10px]"
                  name="amount"
                  type="text"
                  placeholder="Amount"
                />
                <input
                  class="outline-none text-sm font-semibold bg-white w-[90%] rounded-md py-[8px] px-[10px]"
                  type="text"
                  maxlength="4"
                  name="pin"
                  placeholder="PIN"
                />
                <input type="hidden" name="name" value="<?= $username?>">
                  <input type="hidden" name="rec_id" value="<?= $id?>">
                  <input type="hidden" name="email" value="<?=$email?>">
                  <input type="hidden" name="user_id" value="<?=$user_id ?>">
              </div>
              <div class="mt-[30px] flex place-content-center">
                <input
                  class="bg-purple-300 cursor-pointer mx-auto w-[350px] py-[8px] rounded-md px-[10px] text-white font-bold text-center"
                  type="submit"
                   name="send"
                  value="Confirm"
                />
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
  <script>
    const nav_links = document.querySelector(".nav_links");
    function onToggleMenu(e) {
      e.name = e.name === "menu" ? "menu" : "menu";
      nav_links.classList.toggle("left-[0%]");
    }
  </script>
</html>
