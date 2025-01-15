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
              href="transac.html"
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
              href=""
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
              class="mt-[10px] flex-col flex items-center place-content-center w-full h-[150px] bg-neutral-400 rounded-md"
            >
              <h2 class="text-black font-bold text-lg">
                STEPHEN OGHENERUNOR IBOYI
              </h2>
              <span class="text-sm text-neutral-500 font-bold">9160845333</span>
              <div class="flex items-center">
                <img class="w-[25px] h-[30px]" src="image/naira.png" alt="" />
                <h2 class="md:text-xl text-sm font-bold">1000</h2>
              </div>
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
              action=""
              method="post"
            >
              <div
                class="mt-[10px] flex items-center px-[10px] w-full h-[100px] bg-neutral-400 rounded-md"
              >
                <input
                  class="outline-none text-sm font-semibold bg-white w-[90%] rounded-md py-[8px] px-[10px]"
                  type="text"
                  maxlength="4"
                  placeholder="PIN"
                />
              </div>
              <div class="mt-[30px] flex place-content-center">
                <input
                  class="bg-purple-300 cursor-pointer mx-auto w-[350px] py-[8px] rounded-md px-[10px] text-white font-bold text-center"
                  type="submit"
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
