<?php
session_start();
include_once "php/db.php";
$user_id = $_SESSION['id'];

$transac_id = $_GET['transaction_id'];


if (!isset($_SESSION['id'])) {
  header("Location: login.php");
}else{

};



$get_user = mysqli_query($conn, "SELECT * FROM `transaction` WHERE transaction_id = '$transac_id'");
  if(mysqli_num_rows($get_user) > 0) {
      $row1 = mysqli_fetch_assoc($get_user);
        $username  = $row1['name'];
        $user = $row1['user_id'];
        $email = $row1['email'];
       $amount = $row1['amount'];
       $rec_id = $row1['rec_id'];
       $transac_no = $row1['transaction_ref'];
       $transac_date = $row1['time'];
       $transac_remark = $row1['remark'];
       

       if ($row1['remark'] == "Sent") {
        $try = 'to';
    }elseif($row1['remark'] == 'Recieved') {
        $try = 'from';
    };
                  
    } 

    $get_user2 = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$rec_id'");
    if(mysqli_num_rows($get_user2) > 0) {
        $row1 = mysqli_fetch_assoc($get_user2);
            $username2  = $row1['name'];
           
        
    }

    $get_user3 = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user'");
    if(mysqli_num_rows($get_user3) > 0) {
        $row1 = mysqli_fetch_assoc($get_user3);
            $username1  = $row1['name'];
           
        
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
            <span class="text-sm font-semibold">Receipt </span>
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
              class="mt-[10px] w-full h-[73vh] bg-neutral-200 py-[10px] shadow-md rounded-md"
            >
            
              <div
                class="w-[80%] h-[80px] flex-col flex items-center place-content-center mx-auto"
              >
                <h2 class="text-black pt-[10px] capitalize font-bold text-sm">
                  Transfer <?= $try ?> <?= $username2?>
                </h2>
                <span class="text-black text-2xl font-bold"><?= $amount ?></span>
                <span
                  class="text-sm flex items-center text-green-500 py-[5px] font-bold"
                >
                  <ion-icon
                    class="text-lg px-[2px]"
                    name="checkmark-circle-sharp"
                  ></ion-icon>
                  Success
                </span>
              </div>
              <div class="w-full px-[10px] md:px-[50px] pt-[30px]">
                <div class="flex gap-3 justify-between">
                  <span class="md:text-sm text-[13px] font-bold"
                    >Sender Details:</span
                  >
                  <span class="md:text-sm capitalize text-[13px] font-bold"
                    ><?= $username1 ?></span
                  >
                </div>
                <div class="flex gap-3 mt-[15px] justify-between">
                  <span class="md:text-sm text-[13px] font-bold"
                    >Receipient Details:</span
                  >
                  <span class="md:text-sm capitalize text-[13px] font-bold"
                    ><?= $username2?></span
                  >
                </div>
                <div class="flex gap-3 mt-[15px] justify-between">
                  <span class="md:text-sm text-[13px] font-bold"
                    >Transaction Type:</span
                  >
                  <span class="md:text-sm text-end text-[13px] font-bold"
                    >Transfer To Oway Account</span
                  >
                </div>
                <div class="flex gap-3 mt-[15px] justify-between">
                  <span class="md:text-sm text-[13px] font-bold"
                    >Transaction No:</span
                  >
                  <span class="md:text-sm text-[13px] font-bold"><?= $transac_no ?></span>
                </div>
                <div class="flex gap-3 mt-[15px] justify-between">
                  <span class="md:text-sm text-[13px] font-bold"
                    >Payment Method:</span
                  >
                  <span class="md:text-sm text-[13px] font-bold">Wallet</span>
                </div>
                <div class="flex gap-3 mt-[15px] justify-between">
                  <span class="md:text-sm text-[13px] font-bold"
                    >Transaction Date:</span
                  >
                  <span class="md:text-sm text-[13px] font-bold"><?= $transac_date ?></span>
                </div>

                <div class="flex gap-3 mt-[15px] justify-between">
                  <span class="md:text-sm text-[13px] font-bold"
                    >Transaction Remark:</span
                  >
                  <span class="md:text-sm text-[13px] font-bold"><?= $transac_remark ?></span>
                </div>
                <div style="width: 250px;" class=" mx-auto mt-[20px]">
                <p class="font-bold" style="background-color: green; border-radius:6px; padding: 8px 5px; color: white; text-align: center;">Share Receipt</p>
                </div>
              </div>
            </div>
          </div>

          <div class="px-[20px] w-full"></div>
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
