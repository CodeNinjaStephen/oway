<?php
session_start();
include_once "php/db.php";
$user_id = $_SESSION['id'];

if (!isset($_SESSION['id'])) {
  header("Location: login.php");
}else{

};

$sent ="Sent";
$try = "";

$get_user_details = mysqli_query($conn, "SELECT  * FROM `users` WHERE id = '$user_id'");
if(mysqli_num_rows($get_user_details) > 0) {
    while($row = mysqli_fetch_assoc($get_user_details)){
        $username  = $row['name'];
        $email = $row['email'];
        $amount = $row['account'];
    }
}
if ($amount == 0) {
  $amount1 = '0.00';
}else {
  $amount1 = $amount;
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
        <div class="md:w-[20%] absolute nav_links left-[-100%]  md:static w-[90%] duration-[0.5s]   bg-purple-500 h-[100%]">
          <div class="h-[130px] flex place-content-center items-center w-full">
            <span
              class="text-white font-extrabold text-4xl text-center cursor-pointer w-[25%] py-[15px] h-[60px]"
              >O<span class="text-black text-lg">Way.</span></span
            >
          </div>
          <div class="w-full h-fit py-[20px]">
            <a
              class="text-white bg-black rounded py-[10px] mx-auto w-[95%] flex place-content-start px-[20px] font-bold text-sm"
              href="trydash.html"
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
              class="text-white mt-[20px] bg-purple-300 rounded py-[10px] mx-auto w-[95%] flex place-content-start px-[20px] font-bold text-sm"
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
              href="index.php"
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
        <div class="md:w-[80%] w-full  h-[100%]">
          <div
            class="w-full flex justify-between items-center px-[20px] h-[50px] border-2"
          >
            <span class="text-sm font-semibold">dashboard </span>
            <span onclick="onToggleMenu(this)" class="md:hidden w-[20px] h-[20px] font-bold pr-2 lg:hidden xl:hidden"><ion-icon name="menu-outline"></ion-icon></span>
          </div>

          <div class="w-full px-[10px] md:px-[20px] pt-[20px]">
            <div>
              <span class="text-sm font-semibold">Hello</span>
              <p class="text-lg capitalize font-bold py-[3px]"><?= $username ?></p>
            </div>
            <div
              class="w-full bg-purple-300 px-[10px] md:px-[20px] flex justify-between h-[100px] rounded-md"
            >
              <div class="pt-[15px]">
                <span class="pl-[10px] font-semibold text-black"
                  >Account balance</span
                >
                <div class="flex items-center">
                  <img class="w-[25px] h-[30px]" src="image/naira.png" alt="" />
                  <h2 class="md:text-xl text-sm font-bold"><?=number_format($amount1)?>.00</h2>
                </div>
              </div>
              <div class="flex items-center place-content-center gap-3">
                <a
                  class="font-semibold w-[80px] md:w-[100px] bg-purple-700 text-white text-[10px] md:text-sm px-[10px] rounded-md py-[8px]"
                  href="sendmoney.php"
                  >Send Money</a
                >

                <a
                  class="font-semibold w-[80px] md:w-[100px] bg-transparent border-2 text-[10px] md:text-sm border-purple-500 text-purple-500 px-[10px] rounded-md py-[8px]"
                  href=""
                  >Add Money</a
                >
              </div>
            </div>
          </div>

          <div class="w-full mt-[10px] px-[10px] md:px-[20px]">
            <h2 class="font-bold text-black py-[10px]">
              Recent Transactions
            </h2>
            <div class="w-full overflow-scroll">
              <table class="md:w-full w-[550px]">
                <tr>
                  <th></th>
                  <th>name</th>
                  <th>Amount</th>
                  <th>Remark</th>
                  <th>Status</th>
                  <th>Reciept</th>
                </tr>
                <?php
        $get_user_details = mysqli_query($conn, "SELECT * FROM `transaction` WHERE user_id = '$user_id' ORDER BY transaction_id DESC LIMIT 4");
        $get_user_details4 = mysqli_query($conn, "SELECT * FROM `transaction` WHERE user_id = '$user_id' ORDER BY transaction_id DESC LIMIT 5");
        
        if(mysqli_num_rows($get_user_details) > 0) {
            while($row1 = mysqli_fetch_assoc($get_user_details)){
              $transac_id = $row1['transaction_id'];
              if ($row1['status'] == 1) {
                $status = '<p  style="background-color: green; border-radius:6px; padding: 8px 5px; color: white; text-align: center;">Successful</p>';
              }elseif ($row1['status'] == 2) {
                $status = '<p  style="background-color: red; border-radius:6px; padding: 8px 5px; color: white; text-align: center;">Declined!</p>';
              }else {
                $status = '<p  style="background-color: orange; border-radius:6px; padding: 8px 5px; color: white; text-align: center;">waitng!</p>';
              };

          
              if ($row1['remark'] == "Sent") {
                $try = 'to';
            }elseif($row1['remark'] == 'Recieved') {
                $try = 'from';
            };
              
    ?>
                <tr>
                  <td>
                    <p class="text-black font-bold text-sm">Transfer <?= $try ?></p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">
                    <?=$row1['name']?> 
                    </p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm"><?php echo $row1['amount']?></p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm"><?php echo $row1['remark']?></p>
                  </td>
                  <td>
                    
                    <?=$status?>
                    
                  </td>
                  <td class="place-content-center flex">
                    
                    <a style="padding: 7px 15px;" class="bg-neutral-500 rounded-md shadow-md px-[5px] py-[7px]" href="receipt.php?transaction_id=<?php echo $row1['transaction_id']?>">View</a>
                    
                  </td>
                </tr>
                <!-- space  -->
                <?php
        }
    }
  ?>

                
              </table>
            </div>
          </div>
          <!-- he  -->
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
