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
            <span class="text-sm font-semibold">Send Money </span>
            <span
              onclick="onToggleMenu(this)"
              class="md:hidden w-[20px] h-[20px] font-bold pr-2 lg:hidden xl:hidden"
              ><ion-icon name="menu-outline"></ion-icon
            ></span>
          </div>
          <div
            class="w-full flex md:flex-row flex-col pt-[30px] px-[20px] gap-3"
          >
            <div
              class="md:w-[50%] w-full flex place-content-center items-center h-[150px] bg-purple-500 rounded-md shadow-md"
            >
              <a class="block text-center" href="transfer.php">
                <span class="text-white text-5xl"
                  ><ion-icon name="git-compare-outline"></ion-icon
                ></span>
                <p class="text-white text-sm font-semibold">Oway Accounts</p>
              </a>
            </div>
            <div
              class="md:w-[50%] w-full flex place-content-center items-center h-[150px] bg-purple-500 rounded-md shadow-md"
            >
              <a class="block text-center" href="">
                <span class="text-white text-5xl"
                  ><ion-icon name="swap-vertical-outline"></ion-icon
                ></span>
                <p class="text-white text-sm font-semibold">Other Banks</p>
              </a>
            </div>
          </div>
          <div class="w-full mt-[10px] px-[10px] md:px-[20px]">
            <div class="w-full overflow-scroll">
              <h2 class="font-bold text-black py-[10px]">Beneficiaries</h2>
              <table class="md:w-full w-[450px]">
                <tr>
                  <th>Name</th>
                  <th>Bank</th>
                  <th>Account no</th>
                  <th>Email</th>
                </tr>
                <tr>
                  <td>
                    <p class="text-black font-bold text-sm">Okwa Stephen</p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">
                      Oway Bank Of Nigeria
                    </p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">9027498384</p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">
                      OkwaStephen1@gmail.com
                    </p>
                  </td>
                </tr>
                <!-- space  -->
                <tr>
                  <td>
                    <p class="text-black font-bold text-sm">Iboyi Anthony</p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">
                      Oway bank of Nigeria
                    </p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">7019914422</p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">Mero1@gmail.com</p>
                  </td>
                </tr>

                <tr>
                  <td>
                    <p class="text-black font-bold text-sm">
                      Salome OGhenetega
                    </p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">
                      United bank of Africa
                    </p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">2233445566</p>
                  </td>
                  <td>
                    <p class="text-black font-bold text-sm">
                      OGhenetega@gamil.com
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
