<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Query form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
        <script src="https://cdn.tailwindcss.com"></script>
        

        <link rel="stylesheet" href="contactus.css" />
        <link rel="stylesheet" href="css/style.css" />
    
    <link rel="stylesheet" href="style.css" />

  </head>

  <body>
    <div class="fornt overflow-x-hidden relative ">
        <nav class="bg-deepBlue flex relative">
          <div class="relative mx-auto shrink flex items-center max-lg:w-[100vw] max-lg:justify-between">
            <!-- logo -->
            <a href="index.php" class="cursor-pointer  py-7 px-7">
              <img src="./assetsLog/footer_logo.svg" width="125px" height="30px" />
            </a>
  
            <ul class="flex space-x-6 max-lg:hidden">
              <li
                class="text-white font-mullish py-7 hover:text-lightBlue cursor-pointer transition-all duration-200 relative group"
              >
                <a href="#">Payments</a>
  
                <div
                  class="absolute bottom-0 w-full h-1 bg-lightBlue hidden group-hover:block transition-all duration-200"
                ></div>
              </li>
  
              <li
                class="text-white font-mullish py-7 hover:text-lightBlue cursor-pointer transition-all duration-200 relative group"
              >
                <a href="#">Banking</a>
  
                <div
                  class="absolute bottom-0 w-full h-1 bg-lightBlue hidden group-hover:block transition-all duration-200"
                ></div>
              </li>
  
              <li
                class="text-white font-mullish py-7 hover:text-lightBlue cursor-pointer transition-all duration-200 relative group"
              >
                <a href="#">Corporate Card</a>
              </li>
  
              <li
                class="text-white font-mullish py-7 hover:text-lightBlue cursor-pointer transition-all duration-200 relative group"
              >
                <a href="#">Payroll</a>
              </li>
  
              <li
                class="text-white font-mullish py-7 hover:text-lightBlue cursor-pointer transition-all duration-200 relative group"
              >
                <a href="#">Resources</a>
  
                <div
                  class="absolute bottom-0 w-full h-1 bg-lightBlue hidden group-hover:block transition-all duration-200"
                ></div>
              </li>
  
              <li
                class="text-white font-mullish py-7 hover:text-lightBlue cursor-pointer transition-all duration-200 relative group"
              >
                <a href="contactus.php">Support</a>
  
                <div
                  class="absolute bottom-0 w-full h-1 bg-lightBlue hidden group-hover:block transition-all duration-200"
                ></div>
              </li>
  
              <li
                class="text-white font-mullish py-7 hover:text-lightBlue cursor-pointer transition-all duration-200 relative group"
              >
                <a href="#">Pricing</a>
  
                <div
                  class="absolute bottom-0 w-full h-1 bg-lightBlue hidden group-hover:block transition-all duration-200"
                ></div>
              </li>
            </ul>
  
            <div class="flex space-x-6">
              <img
                src="./images/india-flag.svg"
                width="28px"
                height="20px"
                class="hidden lg:block mx-1"
              />
              
            </div>
            <div class="flex flex-row gap-2">
              <a
              href="login.php"
              ><button
                class="py-3 px-5 font-mullish text-white border-lightBlue border rounded-sm text-sm font-bold"
              >
                Log in
              </button></a
            >
            <button
                class="py-3 px-5 font-mullish text-white border-lightBlue border rounded-sm text-sm font-bold hidden"
              >
                Log out
              </button>
            <a
              href="signup.php"
              ><button
                class="py-3 px-4 mr-4 font-mullish rounded-sm text-sm font-bold bg-white text-lightBlue300 border transition-all duration-200 hover:text-lightBlue500 max-lg:hidden lg:flex"
              >
                Sign Up
                <svg
                  viewBox="0 0 24 24"
                  focusable="false"
                  class="w-[14px] h-[14px] ml-3"
                >
                  <path
                    fill="currentColor"
                    d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"
                  ></path>
                </svg></button
            ></a>
  
            <button class="hidden max-[1023px]:block mx-2 " onclick="menu()" id="menu">
              <img  src="assetsLog/hamburger_icon_white.png" class="w-10">
            </button>
  
            </div>
            
          
  
            <!-- <div class="short-menu  w-[100vw] h-[200vh] hidden absolute bg-black z-[2000] opacity-50 max-[750px]:fixed snap-none" ></div> -->
  
          </div>
        </nav>
  
        <!-- ------------NAV BOX--------------------->
          
          <div class="short-menu w-[50vw] h-[100vh] bg-white fixed  inset-y-0 right-0 max-[750px]:w-[70vw] max-[500px]:w-[90vw] max-[385px]:w-[100vw]  max-[750px]:fixed max-[750px]:bg-fixed z-[4000] hidden" >
  
            <div class="flex flex-col gap-5 mx-2 items-start">
              <div class="flex flex-row justify-between w-full">
                <button class="text-xl font-bold mt-5">PAYMENTS</button>
                <button class="w-8 mt-5"><img src="assetsLog/8487257.png"></button>
              </div>
  
  
              <div class="flex flex-col gap-3 text-lg">
                
                <a class="flex flex-row gap-4"><img
                  src="./images/payment-link-icon.svg"
                  alt=""
                  class="bg-lightBlue rounded-full w-6"
                /> Payment Gateway</a>
                
                <a class="flex flex-row gap-4"><img
                  src="./images/payment-link-icon.svg"
                  alt=""
                  class="bg-lightBlue rounded-full w-6"
                /> Payment Links</a>
  
                <a class="flex flex-row gap-4"><img
                  src="./images/payment-link-icon.svg"
                  alt=""
                  class="bg-lightBlue rounded-full w-6"
                /> Payment Buttons</a>
              </div>
              <button class="text-xl my-3 hover:bg-blue-500 w-full rounded-md hover:text-white font-bold text-left h-16 p-2"><span>Explore Payment Suite</span> ></button>
            </div>
            <div class="bg-gradient-to-b from-blue-300 my-3 text-lg h-20 p-3">
              <p>Not sure which product to choose?</p>
              <a href="#">Find me a product</a>
            </div>
            <div class="flex flex-col gap-5 mx-2 items-start text-xl">
              <button  class="text-xl font-bold">INSATANTPAY X - BANKING SUITE</button>
              <div class="flex flex-col gap-3 text-lg">
                
                <a class="flex flex-row gap-4"><img
                  src="./images/payment-link-icon.svg"
                  alt=""
                  class="bg-lightBlue rounded-full w-6"
                /> Current Account</a>
                
                <a class="flex flex-row gap-4"><img
                  src="./images/payment-link-icon.svg"
                  alt=""
                  class="bg-lightBlue rounded-full w-6"
                />Vendors Payment</a>
  
                <a class="flex flex-row gap-4"><img
                  src="./images/payment-link-icon.svg"
                  alt=""
                  class="bg-lightBlue rounded-full w-6"
                /> Payroll</a>
              </div>
              <button class="text-xl my-3 hover:bg-blue-500 w-full rounded-md hover:text-white font-bold text-left h-16 p-2"><span>Explore Payment Suite</span> ></button>
            </div>
            <script> 
        
              var hamburger = document.querySelector("#menu");
              var shortMenu = document.querySelector(".short-menu");
        
                function dropDown() {
                  document.querySelector(".short-menu").style.display = "block";
                  // document.querySelector(".fornt").style.position = "fixed"
        
                }
        
                hamburger.addEventListener("click", function() {
                  hamburger.classList.toggle("is-active");
                  dropDown();
                }); 
        
                shortMenu.addEventListener("click", function(){
                  hamburger.classList.remove("is-active");
                  shortMenu.style.display = "none";
                });
                
        
        
              </script>
          </div>
          <?php
          // Database connection details
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "instantpay";
          
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          
          // Process form data
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $firstname = $_POST["firstname"];
              $lastname = $_POST["lastname"];
              $mobnumber = $_POST["mobnumber"];
              $emailid = $_POST["emailid"];
              $query = $_POST["query"];
          
              // SQL query to insert data into the database
              $sql = "INSERT INTO contact (firstname, lastname, mobnumber, emailid, query) 
                      VALUES ('$firstname', '$lastname', '$mobnumber', '$emailid', '$query')";
          
              if ($conn->query($sql) === TRUE) {
                  echo "
                  <script>
                    alert('Query submit');
                  </script>
              ";
              } else {
                  // echo "Error: " . $sql . "<br>" . $conn->error;
                  echo "
                  <script>
                    alert('Submission Failed');
                  </script>
              ";
                  
              }
          }
          
          // Close the database connection
          $conn->close();
          ?>
          
  
      <div class=" flex justify-center">
        
        <div class=" max-w-[1080px] z-20 ">
          <h1 class="text-center font-bold text-3xl my-2">Qurey Form</h1>
        <div class="border-black border-4">
          <form action="" method="post" class="flex flex-wrap flex-col justify-center items-center my-3">
            <div class="relative flex flex-row  gap-4 w-[1080px] justify-center items-center my-4 max-[1080px]:max-w-[840px] max-[840px]:max-w-[660px] max-[660px]:max-w-[480px] max-[660px]:flex-col max-[480px]:max-w-[340px] ">
              <div class=" flex flex-col w-[40%] max-[660px]:w-[80%]">
                <label>First Name</label>
                <input type="text" name="firstname" placeholder="First Name" class="border-black border-2 rounded-md p-1 w-[100%] h-[60px]" required/>
              </div>
              <div class=" flex flex-col  w-[40%] max-[660px]:w-[80%]">
                <label>Last Name</label>
                <input type="text" name="lastname" placeholder="Last Name" required class="border-black border-2 rounded-md p-1 w-[100%] h-[60px]"/>
              </div>
            </div>

            <div class="flex flex-row gap-4 flex-wrap w-[1080px]  justify-center items-center my-4 max-[1080px]:w-[840px]  max-[840px]:max-w-[660px] max-[660px]:max-w-[480px] max-[660px]:flex-col max-[480px]:max-w-[340px]">
              <div class="flex flex-col w-[40%] max-[660px]:w-[80%]">
                <label>MOB Number</label>
                <input type="number" name="mobnumber" placeholder="999999999" class="border-black border-2 rounded-md p-1 w-[100%] h-[60px] " required/>
              </div>
              <div class="flex flex-col w-[40%] max-[660px]:w-[80%]">
                <label>Email id</label>
                <input type="email" name="emailid" placeholder="abc@gmail.com" class="border-black border-2 rounded-md p-1 w-[100%] h-[60px]" required/>
              </div>
            </div>
            <div class="flex flex-col  flex-wrap w-[1080px] my-4 justify-center items-center max-[1080px]:w-[840px] max-[840px]:max-w-[660px] max-[660px]:max-w-[480px] max-[660px]:flex-col max-[480px]:max-w-[340px]">
                <textarea name ="query" class="border-black border-2 rounded-md w-[82%] p-1 h-[200px]" placeholder="Write your query here...." required></textarea>
            </div>
            <button type="submit"
            class="bg-blue-600 text-white py-[14px] px-[18px] rounded-md font-mullish font-bold hover:bg-blue-800 transition-all duration-200"
          >
           Submit here
          </button>
            
              
          </form>
        </div>
        </div>
      </div>
    </div> 

    <footer
      style="background: linear-gradient(to right, #eef9fe, #edf7ff)"
      
    >
    <!-- class="-mt-[400px] md:-mt-[300px]" -->
      <div
        class="w-10/12 pt-[200px] pb-10 md:pt-[150px] md:my-0 md:w-11/12 max-w-[1080px] mx-auto flex flex-col space-y-6 lg:space-y-0 lg:space-x-4 lg:flex-row justify-between"
      >
        <!-- column - 1 -->
        <div class="flex flex-col md:max-w-[340px] lg:max-w-[260px]">
          <img
            src="assetsLog/png-IP-logo.png"
            loading="lazy"
            width="120px"
            height="24px"
          />
          <p class="text-sm text-grayText my-3 font-mullish">
            Instantpay is the only payments solution in India that allows
            businesses to accept, process and disburse payments with its product
            suite. It gives you access to all payment modes including credit
            card, debit card, netbanking, UPI and popular wallets including
            JioMoney, Mobikwik, Airtel Money, FreeCharge, Ola Money and PayZapp.
          </p>
          <p class="text-sm text-grayText my-3 font-mullish">
            InstantpayX supercharges your business banking experience, bringing
            effectiveness, efficiency, and excellence to all financial
            processes. With InstantpayX, businesses can get access to
            fully-functional current accounts, supercharge their payouts and
            automate payroll compliance.
          </p>
          <p class="text-sm text-grayText my-3 font-mullish">
            Manage your marketplace, automate bank transfers, collect recurring
            payments, share invoices with customers and avail working capital
            loans - all from a single platform. Fast forward your business with
            Instantpay.
          </p>
          <p class="text-[0.625rem] text-grayText my-3 font-mullish">
            Disclaimer: The InstantpayX powered Current Account and VISA corporate
            credit card are provided by RBI licensed banks. Your InstantpayX
            powered account is provided by our partner bank, in accordance with
            RBI regulations. InstantpayX itself is not a bank and doesn't hold or
            claim to hold a banking license.
          </p>
          <p class="font-mullish uppercase font-bold text-gray2">
            Subscribe to our newsletter
          </p>
          <form class="relative bg-white w-[260px] mt-2 mb-4">
            <input
              placeholder="Your email address"
              class="pr-16 font-mullish border-gray-300 outline-lightBlue focus:outline-lightBlue placeholder:text-sm py-2 px-4 border rounded-sm transition-all duration-200"
            />
            <button
              class="h-[90%] bg-white absolute right-[1.5px] top-1/2 -translate-y-1/2 z-10 font-mullish text-sm font-bold text-lightBlue300 flex rounded-sm items-center hover:text-lightBlue500 transition-all duration-200"
            >
              Subscribe
              <svg
                viewBox="0 0 24 24"
                focusable="false"
                class="w-[14px] h-[14px] ml-3"
              >
                <path
                  fill="currentColor"
                  d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"
                ></path>
              </svg>
            </button>
          </form>
          <div class="flex items-start space-x-4">
            <img
              src="assetsLog\footer-certificate-1.png"
              loading="lazy"
              width="92"
              height="40"
              class="cursor-pointer"
            />
            <img
              src="assetsLog/footer-certificate-2.jpg"
              loading="lazy"
              width="122"
              height="80"
              class="cursor-pointer"
            />
          </div>
        </div>
        <!-- column - 2 -->
        <div
          class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4 justify-between"
        >
          <!-- sub column - 1 -->
          <div class="space-y-3">
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1">
                BANKING PLUS
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >InstantpayX</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Current Accounts</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Payouts</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Payout Links</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Corporate Credit Card</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="relative font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    View Live Demo
                    <span
                      class="text-white font-mullish uppercase bg-green-500 rounded-sm text-xs font-bold p-1"
                      >New</span
                    >
                  </a>
                </li>
              </ul>
            </div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1">
                LENDING
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Instantpay Capital</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Instant Settlements</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Working Capital Loans</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Marketplace Instant Settlements</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1">
                RISK & FRAUD
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Thirdwatch</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="relative font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    PrePay CoD
                    <span
                      class="text-white font-mullish uppercase bg-green-500 rounded-sm text-xs font-bold p-1"
                      >New</span
                    >
                  </a>
                </li>
              </ul>
            </div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1">
                BECOME A PARTNER
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Refer and Earn</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    Onboarding APIs
                  </a>
                </li>
              </ul>
            </div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1">
                MORE
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Route</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Invoices</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Freelancer Payments</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >International</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Flash Checkout</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >UPI</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >ePOS</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Checkout Demo</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >InstantpayX Payroll</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <!-- sub column - 2 -->
          <div class="space-y-3">
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1">
                ACCEPT PAYMENTS
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Payment Gateway</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Payment Pages</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Payment Links</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >QR Codes</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Subscriptions</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    Smart Collect
                  </a>
                </li>
              </ul>
            </div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1">
                DEVELOPERS
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Docs</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Integrations</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >API Reference</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1">
                RESOURCES
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Blog</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="relative font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    Customer Stories
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="relative font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    Events
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="relative font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    Chargeback Guide
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="relative font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    Settlement Guide
                  </a>
                </li>
              </ul>
            </div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1">
                SOLUTIONS
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Education</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    E-commerce
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    Saas
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    BFSI
                  </a>
                </li>
              </ul>
            </div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1">
                FREE TOOLS
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >GST Calculator</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Online TDS Payment</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="relative font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    GST Number Search
                    <span
                      class="text-white font-mullish uppercase bg-green-500 rounded-sm text-xs font-bold p-1"
                      >New</span
                    >
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- sub column - 3 -->
          <div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1">
                COMPANY
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >About Us</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish relative font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Careers
                    <span
                      class="text-white font-mullish bg-green-500 rounded-sm text-xs font-bold p-1"
                      >We're hiring!</span
                    >
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Terms of Use</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Privacy Policy</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Grievance Redressal</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    Responsible Disclosure
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    Partners
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    White Papers
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                  >
                    Corporate Information
                  </a>
                </li>
              </ul>
            </div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1 mt-3">
                HELP & SUPPORT
              </p>
              <ul class="space-y-2">
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Support</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="font-mullish font-medium text-lightBlue500 hover:text-grayBlue transition-all duration-200"
                    >Knowledge base</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1 mt-6">
                FIND US ONLINE
              </p>
              <ul class="flex space-x-4 items-center mt-4">
                <li class="cursor-pointer">
                  <a>
                    <img
                      src="images/facebook-icon.svg"
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                  </a>
                </li>
                <li class="cursor-pointer">
                  <a>
                    <img
                      src="images/twitter-icon.svg"
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                  </a>
                </li>
                <li class="cursor-pointer">
                  <a>
                    <img
                      src="images/instagram-icon.svg"
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                  </a>
                </li>
                <li class="cursor-pointer">
                  <a>
                    <img
                      src="images/github-icon.svg"
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                  </a>
                </li>
                <li class="cursor-pointer">
                  <a>
                    <img
                      src="images/linkedin-icon.svg"
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                  </a>
                </li>
              </ul>
            </div>
            <div>
              <p class="font-mullish uppercase font-bold text-gray2 mb-1 mt-6">
                REGD. OFFICE ADDRESS
              </p>
              <p class="font-mullish text-sm mt-4 whitespace-nowrap">
                Instantpay Software Private Limited, <br />1st Floor, SJR Cyber,
                <br />22 Laskar Hosur Road, Adugodi, <br />Bengaluru, 560030,
                <br />Karnataka, India <br />CIN: U72200KA2013PTC097389
              </p>
              <div class="font-mullish mt-6">
                <p class="text-sm">© Instantpay 2023</p>
                <p class="text-sm">All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>