<?php
session_start();
include_once "php/db.php";
$user_id = $_SESSION['id'];




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
        <div  class="md:w-[20%] absolute nav_links left-[-100%]  md:static w-[90%] duration-[0.5s]   bg-purple-500 h-[100%]">
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
              class="text-white mt-[20px] bg-black rounded py-[10px] mx-auto w-[95%] flex place-content-start px-[20px] font-bold text-sm"
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
        <div class="md:w-[80%] w-full  h-[100%]">
          <div
          class="w-full flex justify-between items-center px-[20px] h-[50px] border-2"
          >
          <span class="text-sm">Transactions</span>
          <span onclick="onToggleMenu(this)" class="md:hidden w-[20px] h-[20px] font-bold pr-2 lg:hidden xl:hidden"><ion-icon name="menu-outline"></ion-icon></span>
          </div>

          <div class="w-full mt-[10px] px-[20px]">
            <div class="w-full">
              <h2 class="font-bold text-black py-[10px]">All Transactions</h2>
              <table>
                <tr>
                  <th></th>
                  <th>name</th>
                  <th>Amount</th>
                  <th>Time</th>
                  <th>Remark</th>
                  <th>Status</th>
                </tr>
                <?php
        $get_user_details = mysqli_query($conn, "SELECT * FROM `transaction` WHERE user_id = '$user_id' ORDER BY transaction_id DESC");
        if(mysqli_num_rows($get_user_details) > 0) {
            while($row1 = mysqli_fetch_assoc($get_user_details)){
              if ($row1['status'] == 1) {
                $status = '<p  style="background-color: green; border-radius:6px; padding: 8px 5px; color: white; text-align: center;">Successful</p>';
              }elseif ($row1['status'] == 2) {
                $status = '<p  style="background-color: red; border-radius:6px; padding: 8px 5px; color: white; text-align: center;">Declined!</p>';
              }else {
                $status = '<p  style="background-color: orange; border-radius:6px; padding: 8px 5px; color: white; text-align: center;">waitng!</p>';
              }

              if ($row1['remark'] == "Sent") {
                $try = 'to';
            }elseif($row1['remark'] == 'Recieved') {
                $try = 'from';
            };
              
              
    ?>
                <tr>
                  <td>
                    <p class="text-black font-bold text-sm">Transfer <?=  $try?></p>
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
                  <p class="text-black font-bold text-sm"><?php echo $row1['time']?></p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm"><?php echo $row1['remark']?></p>
                  </td>
                  <td>
                  <?=$status?>
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
