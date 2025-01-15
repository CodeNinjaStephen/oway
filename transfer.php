<?php

session_start();
if (!isset($_SESSION['id'])) {
  header("Location: login.php");
}

include_once "php/db.php";

$user_id = $_SESSION['id'];


    $search = "";

    if(isset($_POST['search'])){
        
      $search = mysqli_real_escape_string($conn, secure_input($_POST['email']));

      if(!empty($search)){
        $check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$search'");
        $row = mysqli_fetch_assoc($check_user);
            $id = $row['id'] ;
        if ($id == $user_id) {
          echo "<script>alert('You Cannot Transfer to Yourself');window.history.back();</script>";
        }else{
          if(mysqli_num_rows($check_user) > 0){
            
            // $row1 = mysqli_fetch_assoc($check_user);
            // $id = $row1['id'] ;
            header("Location: transfer2.php?rec_id=$id"); 
                
                  
          }else{
            
              echo "<script>alert('user does not exsit');window.history.back();</script>";
          }
        };
    }else{
        echo "<script>alert('Please enter all details');window.history.back();</script>";
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
              class="mt-[10px] w-full h-[30px] flex items-center px-[10px] bg-purple-300 rounded-md"
            >
              <p class="text-purple-500 font-semibold text-sm">
                Instant, Zero Issues, Free
              </p>
            </div>
          </div>
          <div class="px-[20px] w-full">
            <div
              class="mt-[10px] flex items-center px-[10px] w-full h-[100px] bg-neutral-400 rounded-md"
            >
              <form
                class="w-full flex items-center place-content-center"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"
              >
                <input
                  class="outline-none text-sm font-semibold bg-white w-[90%] rounded-l-md py-[8px] px-[10px]"
                  type="email"
                  name="email"
                  placeholder="Account Number"
                />
                <input
                  class="bg-purple-500 cursor-pointer rounded-r-md text-white font-semibold py-[6px] px-[10px]"
                  type="submit"
                  name="search"
                  value="search"
                />
              </form>
            </div>
          </div>
          <div class="w-full mt-[10px] px-[10px] md:px-[20px]">
            <div class="w-full overflow-scroll">
              <h2 class="font-bold text-black py-[10px]">
                Recent Transactions
              </h2>
              <table class="md:w-full w-[450px]">
                <tr>
                  <th></th>
                  <th>name</th>
                  <th>Amount</th>
                  <th>Remark</th>
                </tr>
                <tr>
                  <td>
                    <p class="text-black font-bold text-sm">Transfer from</p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">
                      Salome OGhenetega
                    </p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">+5000</p>
                  </td>
                  <td>
                    <p
                      class="bg-green-200 text-green-500 text-center px-[5px] py-[3px] rounded text-sm"
                    >
                      Sucessful
                    </p>
                  </td>
                </tr>
                <!-- space  -->
                <tr>
                  <td>
                    <p class="text-black font-bold text-sm">Transfer to</p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">
                      Esther Godiya Adamu
                    </p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">+5000</p>
                  </td>
                  <td>
                    <p
                      class="bg-green-200 text-green-500 text-center px-[5px] py-[3px] rounded text-sm"
                    >
                      Sucessful
                    </p>
                  </td>
                </tr>

                <tr>
                  <td>
                    <p class="text-black font-bold text-sm">Transfer from</p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">
                      Salome OGhenetega
                    </p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">+5000</p>
                  </td>
                  <td>
                    <p
                      class="bg-red-200 text-red-500 text-center px-[5px] py-[3px] rounded text-sm"
                    >
                      failed
                    </p>
                  </td>
                </tr>
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
