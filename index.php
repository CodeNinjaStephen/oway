<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oway || Home</title>
    <link rel="stylesheet" href="css/output.css" />
    <link rel="stylesheet" href="css/normal.css" />
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
    /* .try {
      background: linear-gradient(to right blue, purple);
    } */
    .background {
      background: linear-gradient(rgba(0, 0, 255, 1), rgba(238, 60, 255, 0.692)),
        url(image/work.jpeg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }
  </style>
  <body>
    <section>
      <div
        class="lg:h-screen h-fit pb-[10px] bg-gradient-to-r from-blue-800 to-purple-600 try w-full"
      >
        <!-- header  -->
        <header
          class="flex md:-full md:overflow-hidden z-[100] mx-auto bg-transparent px-[20px] items-center justify-between w-full h-[65px]"
        >
          <span
            class="md:w-[15%] text-purple-600 font-extrabold text-2xl text-center cursor-pointer w-[25%] py-[15px] h-[60px]"
            >O<span class="text-white text-sm">Way.</span></span
          >
          <nav
            class="nav_links md:static md:min-h-fit h-screen md:w-auto md:items-center flex md:flex-row bg-black md:bg-transparent lg:bg-transparent w-full duration-[0.5s] md:z-0 z-[100] text-start py-[15px] flex-col absolute top-[0%] left-[-100%]"
          >
            <div
              class="lg:hidden text-end text-lg px-[15px] sm:block md:hidden"
            >
              <span class="" onclick="onToggleMenu(this)"
                ><ion-icon
                  class="text-white font-bold text-xl align-middle"
                  name="close-outline"
                ></ion-icon
              ></span>
            </div>
            <a
              onclick="onToggleMenu(this)"
              class="px-[15px] font-serif text-[14px] hover:text-black mx-[10px] duration-[1s] text-white rounded py-[15px]"
              href="#home"
              >Home</a
            >
            <a
              onclick="onToggleMenu(this)"
              class="px-[15px] font-serif text-[14px] hover:text-black duration-[1s] text-white rounded py-[15px] mx-[10px]"
              href="#about"
              >About</a
            >
            <a
              onclick="onToggleMenu(this)"
              class="px-[15px] font-serif text-[14px] hover:text-black duration-[1s] text-white rounded py-[15px] mx-[10px]"
              href="#contact"
              >Features</a
            >
            <a
              class="px-[15px] font-serif text-[14px] hover:text-black duration-[1s] text-white rounded py-[15px] mx-[10px]"
              href="library.php"
              >Contact</a
            >

            <a
              class="px-[15px] font-serif text-[14px] hover:text-black duration-[1s] text-white rounded py-[15px] mx-[10px]"
              href="library.php"
              >Faq</a
            >
          </nav>
          <!-- <a
            href="login.php"
            class="w-[130px] text-center font-mono bg-red-500 rounded-full cursor-pointer px-[10px] text-white py-[8px] hover:bg-slate-700 hover:text-neutral-500 duration-[1s]"
          >
            Sign Up
          </a> -->
          <div class="lg:hidden sm:block md:hidden">
            <span onclick=" onToggleMenu(this)"
              ><ion-icon
                class="text-white font-bold text-xl align-middle"
                name="menu-outline"
              ></ion-icon
            ></span>
          </div>
        </header>
        <!-- header-end  -->
        <!-- hero section  -->
        <div class="w-full">
          <div class="w-[90%] lg:flex mx-auto">
            <div class="lg:w-[50%] w-full">
              <h1
                class="text-white capitalize pt-[50px] lg:pt-[80px] text-3xl lg:text-5xl"
              >
                Online Banking platform for seamless money management.
              </h1>
              <p class="text-white text-sm font-serif pt-[10px]">
                Empowering your financial future with innovative solutions,
                secure transactions, exceptional customer service, and expert
                financial guidance. We help you achieve your goals, whether
                personal or business, with our comprehensive range of banking
                services and products.
              </p>
              <div class="pt-[20px] flex gap-4">
                <a
                  class="w-[120px] bg-white text-center text-blue-500 px-[10px] rounded-md py-[7px]"
                  href="welcome.html"
                  >Get Started</a
                >

                <a
                  class="w-[120px] border-2 text-center border-white text-white px-[10px] rounded-md py-[7px]"
                  href="sign.php"
                  >Sign Up</a
                >
              </div>
            </div>
            <div class="lg:w-[50%] lg:pt-0 pt-[25px] mx-auto w-[95%]">
              <img
                class="h-[475px] w-[400px] mx-auto"
                src="image/hero_xray-prelaunch-removebg-preview.png"
                alt=""
              />
            </div>
          </div>
        </div>
        <!-- hero section end  -->
      </div>
    </section>
    <section class="w-full">
      <div class="lg:flex py-[30px] lg:w-[90%] mx-auto w-full">
        <div class="lg:w-[50%] w-full">
          <img class="h-[450px]" src="image/17-removebg-preview.png" alt="" />
        </div>
        <div class="lg:w-[50%] pt-[100px] py-[20px] mx-auto w-[95%]">
          <h2 class="text-black font-bold text-2xl pt-[30px] text-center">
            About Oway
          </h2>
          <p class="text-neutral-600 text-sm font-serif pt-[10px]">
            At Oway Bank, we're driven by a passion for empowering individuals
            and businesses to achieve their financial goals. With a commitment
            to innovation, security, and exceptional customer service, we're
            dedicated to making banking easier, faster, and more convenient.
          </p>

          <p class="text-neutral-600 text-sm font-serif pt-[30px]">
            As a forward-thinking financial institution, Oway Bank is built on a
            foundation of trust, integrity, and expertise. Our team of
            experienced professionals is dedicated to providing personalized
            service, expert guidance, and tailored solutions to meet the unique
            needs of our customers.
          </p>

          <div class="pt-[20px] flex gap-4">
            <a
              class="w-[150px] bg-gradient-to-tr text-sm from-blue-500 to-purple-600 text-center text-white px-[10px] rounded-md font-bold py-[7px]"
              href=""
              >Get Started</a
            >

            <a
              class="w-[150px] border-2 text-center text-sm border-neutral-500 text-neutral-500 px-[10px] rounded-md font-bold py-[7px]"
              href=""
              >Watch Demo</a
            >
          </div>
        </div>
      </div>
    </section>
    <section class="w-full py-[30px]">
      <div class="pt-[20px]">
        <h2 class="capitalize text-black text-2xl font-bold text-center">
          Awesome Trending Features
        </h2>
        <p
          class="text-neutral-600 text-sm text-center pt-[10px] lg:w-[500px] mx-auto"
        >
          Discover the innovative features that make Oway Bank stand out,
          designed to simplify your banking experience and empower your
          financial future.
        </p>
      </div>
      <div class="lg:w-[90%] w-[95%] mx-auto">
        <div class="grid pt-[20px] lg:grid-cols-3 gap-3 grid-cols-1">
          <div
            class="bg-white p-[10px] shadow-md rounded h-[250px] grid place-content-center border-2"
          >
            <span class="text-4xl text-purple-600 text-center">
              <ion-icon name="shield-checkmark-sharp"></ion-icon>
            </span>
            <h2 class="text-center py-[5px] text-black font-bold text-sm">
              Safe & Secure
            </h2>
            <p class="text-center text-sm text-neutral-600">
              Protecting your finances with advanced security measures,
              encryption, and fraud detection for safe and secure transactions
              always. Your money, our priority.
            </p>
          </div>
          <!-- jadj  -->

          <div
            class="bg-white p-[10px] shadow-md rounded h-[250px] grid place-content-center border-2"
          >
            <span class="text-4xl text-purple-600 text-center">
              <ion-icon name="shield-checkmark-sharp"></ion-icon>
            </span>
            <h2 class="text-center py-[5px] text-black font-bold text-sm">
              Fast Transfer
            </h2>
            <p class="text-center text-sm text-neutral-600">
              Send and receive money instantly with our fast, reliable, and
              convenient transfer services available 24/7. No delays, no
              hassles, just quick and easy transfers.
            </p>
          </div>

          <div
            class="bg-white p-[10px] shadow-md rounded h-[250px] grid place-content-center border-2"
          >
            <span class="text-4xl text-purple-600 text-center">
              <ion-icon name="shield-checkmark-sharp"></ion-icon>
            </span>
            <h2 class="text-center py-[5px] text-black font-bold text-sm">
              24/7 Support
            </h2>
            <p class="text-center text-sm text-neutral-600">
              "Get expert help whenever you need it with our dedicated customer
              support team available 24 hours a day, 7 days a week. We're always
              here to assist you
            </p>
          </div>
          <!-- end  -->
        </div>
      </div>
    </section>
    <section class="pt-[30px] py-[20px]">
      <div class="h-[250px] grid place-content-center w-full background">
        <p class="text-white text-2xl font-serif font-bold text-center">
          Start Your Journey With Us
        </p>
        <span class="text-white text-sm"
          >Begin your banking journey with Oway Bank today and experience the
          future of banking with our innovative solutions, expert guidance, and
          exceptional service.</span
        >
      </div>
    </section>

    <section class="py-[30px]">
      <div class="w-full pt-[20px]">
        <div class="pt-[20px]">
          <h2 class="capitalize text-black text-2xl font-bold text-center">
            How Does It Work?
          </h2>
          <p
            class="text-neutral-600 text-sm text-center pt-[10px] lg:w-[500px] mx-auto"
          >
            "Oway Bank's simple and secure online platform allows you to manage
            your finances, make transactions, and access expert support with
            ease, anytime, anywhere. See the steps below.
          </p>
        </div>
        <div class="lg:w-[90%] w-[95%] mx-auto">
          <div class="grid pt-[20px] lg:grid-cols-3 gap-3 grid-cols-1">
            <div
              class="bg-white p-[10px] shadow-md rounded h-[250px] grid place-content-center border-2"
            >
              <span class="text-4xl text-purple-600 text-center">
                <ion-icon name="shield-checkmark-sharp"></ion-icon>
              </span>
              <h2 class="text-center py-[5px] text-black font-bold text-sm">
                Sign up
              </h2>
              <p class="text-center text-sm text-neutral-600">
                Create an account online or through our mobile app by providing
                basic information and following our easy registration process.
              </p>
            </div>
            <!-- jadj  -->

            <div
              class="bg-white p-[10px] shadow-md rounded h-[250px] grid place-content-center border-2"
            >
              <span class="text-4xl text-purple-600 text-center">
                <ion-icon name="shield-checkmark-sharp"></ion-icon>
              </span>
              <h2 class="text-center py-[5px] text-black font-bold text-sm">
                Verify Account
              </h2>
              <p class="text-center text-sm text-neutral-600">
                Confirm your identity and activate your account by verifying
                your email, phone number, and other details as required.
              </p>
            </div>

            <div
              class="bg-white p-[10px] shadow-md rounded h-[250px] grid place-content-center border-2"
            >
              <span class="text-4xl text-purple-600 text-center">
                <ion-icon name="shield-checkmark-sharp"></ion-icon>
              </span>
              <h2 class="text-center py-[5px] text-black font-bold text-sm">
                Fund Account
              </h2>
              <p class="text-center text-sm text-neutral-600">
                Deposit funds into your account through various payment channels
                and start enjoying Oway Bank's innovative banking
                services and features.
              </p>
            </div>
            <!-- end  -->
          </div>
        </div>
      </div>
    </section>
    <section class="w-full py-[30px]">
      <div class="w-full pt-[20px]">
        <div class="pt-[20px]">
          <h2 class="capitalize text-black text-2xl font-bold text-center">
            Layers of Oway
          </h2>
          <p
            class="text-neutral-600 text-sm text-center pt-[10px] lg:w-[500px] mx-auto"
          >
            Choose the plan that suits your financial goals and lifestyle. Our
            tiered plans offer flexible and affordable options, each packed with
            exclusive benefits and rewards.
          </p>
        </div>
        <div
          class="grid gap-3 lg:grid-cols-3 grid-cols-1 lg:w-[70%] w-[85%] mx-auto pt-[20px]"
        >
          <!-- first  -->
          <div
            class="h-[350px] w-[300px] mx-auto lg:w-[250px] border-2 rounded-md"
          >
            <span class="text-4xl block pt-[20px] text-purple-600 text-center">
              <ion-icon name="shield-checkmark-sharp"></ion-icon>
            </span>
            <p class="text-center font-bold text-black text-xl">Layer 2</p>
            <span
              class="block text-black text-center py-[10px] font-semibold text-sm"
              >With BVN</span
            >
            <div class="pt-[10px]">
              <span class="block text-center py-[3px] text-sm text-neutral-500"
                >Unlimited Email Support</span
              >
              <span class="block text-center py-[3px] text-sm text-neutral-500"
                >10 Extra More Features</span
              >
              <span class="block text-center py-[3px] text-sm text-neutral-500"
                >24/7 Support</span
              >
            </div>
            <div class="text-center mt-[20px]">
              <button
                class="bg-gradient-to-r from-blue-800 to-purple-600 rounded-md text-white py-[6px] px-[10px]"
              >
                Upgrade
              </button>
            </div>
          </div>
          <!-- first end  -->

          <div
            class="h-[350px] mx-auto bg-gradient-to-r from-blue-800 to-purple-600 w-[300px] lg:w-[250px] border-2 rounded-md"
          >
            <span class="text-4xl block pt-[20px] text-white text-center">
              <ion-icon name="shield-checkmark-sharp"></ion-icon>
            </span>
            <p class="text-center font-bold text-white text-xl">Layer 1</p>
            <span
              class="block text-white text-center py-[10px] font-semibold text-sm"
              >With NIN</span
            >
            <div class="pt-[10px]">
              <span class="block text-center py-[3px] text-sm text-white">
                Email Support</span
              >
              <span class="block text-center py-[3px] text-sm text-white"
                >5 Extra More Features</span
              >
              <span class="block text-center py-[3px] text-sm text-white"
                >24/7 Support</span
              >
            </div>
            <div class="text-center mt-[20px]">
              <button
                class="bg-white rounded-md text-neutral-600 py-[6px] px-[10px]"
              >
                Upgrade
              </button>
            </div>
          </div>

          <div
            class="h-[350px] mx-auto w-[300px] lg:w-[250px] border-2 rounded-md"
          >
            <span class="text-4xl block pt-[20px] text-purple-600 text-center">
              <ion-icon name="shield-checkmark-sharp"></ion-icon>
            </span>
            <p class="text-center font-bold text-black text-xl">Layer 3</p>
            <span
              class="block text-black text-center py-[10px] font-semibold text-sm"
              >With NIN</span
            >
            <div class="pt-[10px]">
              <span class="block text-center py-[3px] text-sm text-neutral-500"
                >Unlimited Email Support</span
              >
              <span class="block text-center py-[3px] text-sm text-neutral-500"
                >20 Extra More Features</span
              >

              <span class="block text-center py-[3px] text-sm text-neutral-500"
                >24/7 Support</span
              >
            </div>
            <div class="text-center mt-[20px]">
              <button
                class="bg-gradient-to-r from-blue-800 to-purple-600 rounded-md text-white py-[6px] px-[10px]"
              >
                Upgrade
              </button>
            </div>
          </div>

          <!-- djahsd  -->
        </div>
      </div>
    </section>
    <section class="w-full py-[30px]">
      <div class="pt-[20px] w-full">
        <div class="pt-[20px]">
          <h2 class="capitalize text-black text-2xl font-bold text-center">
            Frequently Asked Questions
          </h2>
          <p
            class="text-neutral-600 text-sm text-center pt-[10px] lg:w-[500px] mx-auto"
          >
            Get answers to frequently asked questions about Oway Bank's
            services, accounts, security, and more, to help you make the most of
            your banking experience.
          </p>
        </div>

        <div class="lg:flex pt-[10px] w-[90%] mx-auto">
          <div class="lg:w-[50%] w-[90%] mx-auto">
            <img
              class="lg:w-[500px] lg:h-[450px]"
              src="image/fa1-removebg-preview.png"
              alt=""
            />
          </div>
          <div class="lg:w-[50%] w-[90%] mx-auto">
            <ul class="accordion w-[90%] mx-auto">
              <li class="list-none shadow my-[10px] p-[10px] rounded-md">
                <input type="radio" name="accordion" id="first" checked />
                <label
                  for="first"
                  class="text-black flex items-center p-[10px] cursor-pointer text-sm font-bold"
                  >What is Oway Bank and how is it different from traditional
                  banks?
                </label>
                <div class="contain">
                  <p class="font-semibold text-neutral-500 text-[12px]">
                    Oway Bank is a digital bank offering innovative financial
                    solutions. We differ from traditional banks by providing
                    online-only services, lower fees, and user-friendly digital
                    platforms for easy banking.
                  </p>
                </div>
              </li>
              <!-- first  -->
              <li class="list-none shadow my-[10px] p-[10px] rounded-md">
                <input type="radio" name="accordion" id="second" />
                <label
                  for="second"
                  class="text-black flex items-center p-[10px] cursor-pointer text-sm font-bold"
                  >Is my money safe with Oway Bank?
                </label>
                <div class="contain">
                  <p class="font-semibold text-neutral-500 text-[12px]">
                    Yes, your money is safe. Oway Bank is licensed and
                    regulated, ensuring your deposits are insured and protected.
                    We also employ robust security measures to safeguard your
                    transactions and data.
                  </p>
                </div>
              </li>

              <li class="list-none my-[10px] shadow p-[10px] rounded-md">
                <input type="radio" name="accordion" id="third" />
                <label
                  for="third"
                  class="text-black flex items-center p-[10px] cursor-pointer text-sm font-bold"
                  >How do I open an account with Oway Bank?
                </label>
                <div class="contain">
                  <p class="font-semibold text-neutral-500 text-[12px]">
                    Opening an account is easy. Simply download our mobile app
                    or visit our website, click "Sign Up," and follow the
                    prompts to provide required information and verify your
                    identity.
                  </p>
                </div>
              </li>

              <li class="list-none my-[10px] shadow p-[10px] rounded-md">
                <input type="radio" name="accordion" id="fourth" />
                <label
                  for="fourth"
                  class="text-black flex items-center p-[10px] cursor-pointer text-sm font-bold"
                  >What are the requirements for opening an account?
                </label>
                <div class="contain">
                  <p class="font-semibold text-neutral-500 text-[12px]">
                    To open an account, you'll need to provide a valid
                    government-issued ID, proof of address, and basic personal
                    information. You must also be at least 16 years old.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="pt-[30px] py-[20px]">
      <div class="h-[250px] grid place-content-center w-full background">
        <p class="text-white text-2xl font-serif font-bold text-center">
          Start Your Journey With Us
        </p>
        <span class="text-white text-sm"
          >Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde,
          quisquam.</span
        >
      </div>
    </section> -->
    <section class="w-full bg-neutral-200 py-[30px]">
      <div class="pt-[20px] w-full">
        <div class="pt-[20px]">
          <h2 class="capitalize text-black text-2xl font-bold text-center">
            Contact Customer Service
          </h2>
          <p
            class="text-neutral-600 text-sm text-center pt-[10px] lg:w-[500px] mx-auto"
          >
            Need help or have questions? Our dedicated customer support team is
            here to assist you
          </p>
        </div>
        <div class="w-[90%] lg:flex mx-auto pt-[20px]">
          <div
            class="lg:w-[50%] bg-white lg:h-[400px] py-[20px] rounded w-[90%] mx-auto"
          >
            <form action="">
              <div class="w-[95%] mx-auto text-center mt-[30px]">
                <input
                  class="w-[90%] placeholder:text-neutral-500 font-semibold text-sm py-[10px] px-[10px] bg-white border-2 border-black rounded outline-none"
                  type="text"
                  placeholder="Full Name"
                />
              </div>

              <div class="w-[95%] mx-auto text-center mt-[30px]">
                <input
                  class="w-[90%] placeholder:text-neutral-500 font-semibold text-sm py-[10px] px-[10px] bg-white border-2 border-black rounded outline-none"
                  type="email"
                  placeholder="Email Address"
                />
              </div>

              <div class="w-[95%] mx-auto text-center mt-[30px]">
                <textarea
                  cols="30"
                  rows="5"
                  class="w-[90%] placeholder:text-neutral-500 font-semibold text-sm py-[10px] px-[10px] bg-white border-2 border-black rounded outline-none"
                  placeholder="Type Your Message here..."
                ></textarea>
              </div>

              <div class="w-[95%] mx-auto text-center mt-[20px]">
                <input
                  class="bg-gradient-to-r py-[10px] rounded-md px-[10px] from-blue-800 to-purple-600 text-white font-bold text-sm w-[90%] mx-auto"
                  type="submit"
                  value="Submit Here"
                />
              </div>
            </form>
          </div>
          <div class="lg:w-[50%] w-[90%] mx-auto">
            <img
              class="h-[430px] mx-auto"
              src="image/contact.svg"
              alt=""
              srcset=""
            />
          </div>
        </div>
      </div>
    </section>
    <footer
      class="bg-gradient-to-r from-blue-800 to-purple-600 py-[30px] w-full"
    >
      <div class="pt-[20px]">
        <h2 class="capitalize text-white text-2xl font-bold text-center">
          Subscribe Our Newsletter
        </h2>
      </div>
      <div
        class="w-[80%] flex gap-0 mt-[20px] mx-auto px-[30px] bg-white rounded py-[30px]"
      >
        <input
          class="outline-none rounded-tl-md rounded-bl-md border-2 w-[80%] border-blue-700 py-[10px] px-[10px]"
          type="text"
          name=""
          id=""
        />
        <button
          class="py-[10px] rounded-tr-md rounded-br-md px-[10px] w-[150px] text-white bg-gradient-to-r from-blue-800 to-purple-600"
        >
          Subscribe
        </button>
      </div>

      <div class="grid lg:grid-cols-4 w-[80%] mx-auto py-[20px] grid-cols-1">
        <div class="">
          <span class="text-white text-lg font-bold py-[10px]">Oway</span>
          <p class="text-white text-sm">
            Oway Bank is a digital banking platform offering innovative
            financial solutions, providing easy, secure, and convenient banking
            experiences for individuals and businesses.
          </p>
        </div>

        <div class="md:text-center">
          <span class="text-white block text-lg font-bold py-[8px]"
            >Explore</span
          >
          <a href="#home" class="text-white block text-sm py-[1px]">Home</a>
          <a href="#about" class="text-white block text-sm py-[1px]">About</a>
          <a href="#faq" class="text-white block text-sm py-[1px]">Faq</a>
          <a href="#contact" class="text-white block text-sm py-[1px]"
            >Contact</a
          >
        </div>

        <div class="md:text-center">
          <span class="text-white block text-lg font-bold py-[8px]"
            >Contats</span
          >
          <a href="" class="text-white block text-sm py-[1px]"
            >Phone: 09027498384
          </a>
          <a href="#layers" class="text-white block text-sm py-[1px]"
            >Email: support@owaybank.com
          </a>
          <a href="" class="text-white block text-sm py-[1px]">Loans</a>
          <a href="#contact" class="text-white block text-sm py-[1px]"
            >Service</a
          >
        </div>

        <div class="">
          <span class="text-white text-lg font-bold py-[10px]">Oway</span>
          <p class="text-white text-sm">
            At Oway Bank, we're committed to empowering financial freedom,
            fostering innovation, and delivering exceptional customer
            experiences, making banking easier, smarter, and more
            accessible for all.
          </p>
        </div>
      </div>
      <hr class="w-[80%] mx-auto" />
      <div class="flex py-[20px] w-[80%] mx-auto justify-between">
        <p class="text-[12px] text-white">
          &copy;Oway &bull;2024 All Rights Reserved
        </p>
        <p class="text-white text-[12px]">Tems&Condditions</p>
      </div>
      <hr class="w-[80%] mx-auto" />
    </footer>
    <script>
      const nav_links = document.querySelector(".nav_links");
      function onToggleMenu(e) {
        e.name = e.name === "menu" ? "close" : "menu";
        nav_links.classList.toggle("left-[0%]");
      }
    </script>
  </body>
</html>
