<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="bot.js" defer></script>
    <!-- <script src="index.js"></script> -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    
    


    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href ="css/botstyle.css"/>


    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Instantpay</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />


    <style>
      .corefeaturesection {
        background-size: 200% 103%;
        padding-top: 12rem;
        padding-bottom: 12rem;
      }

      .ctaSection {
        background-size: 200% 107%;
      }

      .companiesList {
        animation: 10s infinite linear moveCompany;
      }

      @keyframes moveCompany {
        0% {
          top: 0;
        }
        100% {
          top: -50%;
        }
      }
    </style>
  </head>
  <body>
  <?php
error_reporting(E_ERROR | E_PARSE);
?>
      
      <?php
      session_start();
          // Check login status
          // $isLoggedIn =  isset($_SESSION['username']) ? 'true' : 'false';
          // echo("$_SESSION[username]");
          // global $isLoggedIn;
          // echo($isLoggedIn);

          // if ($isLoggedIn) {
          //   // Hide login button
          //   echo "<script>";
          //   echo "document.querySelector('.loginb').style.display = 'none';";
          //   echo "alert('Login Successfully')";
          //   echo "</script>";
          //   // echo($isLoggedIn);
          //   // Show logout button
          //   echo "<script>";
          //   echo "document.querySelector('.logoutb').style.display = 'block';";
          //   echo "</script>";
          // } else {
          //   // Change CSS properties for a logged-out user
          //   echo "<script>";
          //   echo "document.querySelector('.loginb').style.display = 'block';";
          //   echo "alert('Logout Successfully')";
          //   echo "</script>";
          //   // echo($isLoggedIn);
          //   // Show logout button
          //   echo "<script>";
          //   echo "document.querySelector('.logoutb').style.display = 'none';";
          //   echo "</script>";
          // }
      ?>
      
      

    <div class="fornt overflow-x-hidden relative ">
      <!--Navbar-->
      <nav class="bg-deepBlue flex relative">
        <div class="relative mx-auto shrink flex items-center max-lg:w-[100vw] max-lg:justify-between">
          <!-- logo -->
          <a href="#" class="cursor-pointer  py-7 px-7">
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
            
            <button
              class="loginb py-3 px-5 font-mullish text-white border-lightBlue border rounded-sm text-sm font-bold block"
              onclick="buttonChange()">
              Log in
            </button>
          
          <button
          class="logoutb py-3 px-5 font-mullish text-white border-lightBlue border rounded-sm text-sm font-bold hidden"
          onclick= "logout()"
          >
          Log out
        </button>

        

        <script>
          var count = 0;
          function buttonChange() {
              // Redirect to login.php
              
              window.location.href = 'login.php';
              
              
          }
  
          // Function to handle logout
          function logout() {
              // Redirect to logout.php
               
              
              window.location.href = 'logout.php';

          }
  
          // Check session status and update CSS on page load
          // document.addEventListener('DOMContentLoaded', function() {
            
          
          //    var isLoggedIn = 
          //     // console.log(isLoggedIn)
  
          //     if (isLoggedIn) {
          //         // Change CSS properties for a logged-in user
          //         document.querySelector(".loginb").style.display = "none";
          //         document.querySelector(".logoutb").style.display = "block";
          //         console.log("2")
          //         // document.body.classList.add('userLoggedIn');
                  
          //     } else {
          //         // Change CSS properties for a logged-out user
          //         document.querySelector(".loginb").style.display = "block";
          //         document.querySelector(".logoutb").style.display = "none";
          //         console.log("3")
          //     }
          // });
          // function logchange() {
          //   document.querySelector(".loginb").style.display = "none";
          //   document.querySelector(".logoutb").style.display = "block";
          // }

          // function logochange() {
          //   document.querySelector(".loginb").style.display = "block";
          //   document.querySelector(".logoutb").style.display = "none";
          // }
        </script>


       <?php
          // session_start();
          // Check login status
          // $isLoggedIn =  isset($_SESSION['username']) ? 'true' : 'false';
          $isLoggedIn = $_SESSION['username'] ? true : false;
          // echo("$_SESSION[username]");
          // global $isLoggedIn;
          // echo($isLoggedIn);

          if ($isLoggedIn) {
            // Hide login button
            echo "<script>";
            echo "document.querySelector('.loginb').style.display = 'none';";
            
            echo "</script>";

            // Show logout button
            echo "<script>";
            echo "document.querySelector('.logoutb').style.display = 'block';";
            echo "alert('Login Successfully')";
            echo "</script>";
          } else {
            // Change CSS properties for a logged-out user
            echo "<script>";
            echo "document.querySelector('.loginb').style.display = 'block';";
            echo "</script>";
            // Show logout button
            echo "<script>";
            echo "document.querySelector('.logoutb').style.display = 'none';";
            echo "alert('Logout Successfully')";

            echo "</script>";
          }
      ?>

  
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
        
        <div class="short-menu w-[50vw] h-[100vh] bg-white fixed inset-y-0 right-0 max-[750px]:w-[70vw] max-[500px]:w-[90vw] max-[385px]:w-[100vw]  max-[750px]:fixed max-[750px]:bg-fixed z-[4000] hidden" >

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
            <button class="text-xl my-3 hover:bg-blue-500 w-full rounded-md hover:text-white font-bold text-left h-16 p-2"><span>Support</span> ></button>

          </div>
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

      

      <!--Hero Section-->
      <section class="relative bg-deepBlue -z-20">
        <div
          class="w-10/12 max-w-[1080px] flex lg:flex-row max-lg:flex-col justify-between items-center mx-auto"
        >
          <!--left part-->
          <div class="space-y-8">
            <h1
              class="font-mullish font-bold text-[40px] leading-[1.2] text-white"
            >
              Power your finance, grow your business
            </h1>
            <div class="w-6 h-1 bg-greenLight"></div>
            <p class="font-mullish text-[18px] leading-7 text-white opacity-70">
              Accept payments from customers. Automate payouts to vendors &
              employees. Never run out of working capital.
            </p>
            <button 
              class="bg-lightBlue text-white py-[14px] px-[18px] rounded-md font-mullish font-bold hover:bg-lightBlue500 transition-all duration-200 "
            >
             Sign Up Now
            </button>
          </div>
          <!--right part-->
          <!-- <div class="w-[100vw]"></div> -->
          <img
            src="./images/hero-illustration.jpg"
            alt=""
            class="w-full max-w-[50vw]"
          />
        </div>

        <!--shape part-->
        <div class="w-[103%] absolute left-0 right-0">
          <img
            src="./images/hero-shape.svg"
            alt=""
            class="w-full object-fill"
          />
        </div>
      </section>

      <!--feature section - 1-->
      <section class="relative mt-[190px] overflow-hidden">
        <img
          src="./images/feature-section1-dottedrows.png"
          alt=""
          loading="lazy"
          width="233"
          height="167"
          class="absolute -top-[8rem] left-[10rem] inline-block -z-10"
        />

        <img
          src="./images/feature-section1-dottedrows.png"
          alt=""
          loading="lazy"
          width="233"
          height="167"
          class="absolute top-[3rem] right-0 inline-block rotate-180"
        />

        <div class="relative w-11/12 max-w-[1080px] mx-auto pt-4">
          <!--heading-->
          <h2
            class="font-mullish text-center text-2xl leading-[1.2] font-extrabold hidden md:block"
          >
            Accept Payments with Instantpay Payment Suite
          </h2>

          <h2
            class="font-mullish text-center text-5xl leading-[1.2] font-extrabold md:hidden"
          >
            Explore Instantpay Payment Suite
          </h2>

          <div class="w-6 h-1 bg-greenLight mx-auto mt-4 mb-6"></div>

          <!--content box-->
          <div
            class="w-full min-h-[520px] bg-white flex rounded-md relative p-10 py-12 border"
          >
            <!--left section-->
            <div class="flex flex-col justify-between w-full">
              <h3
                class="font-mullish text-[28px] leading-10 font-bold max-w-[500px]"
              >
                Supercharge your business with the all‑powerful
                <span class="text-lightBlue">Payment Gateway</span>
              </h3>
              <ul class="space-y-2">
                <li class="font-mullish flex items-center space-x-2">
                  <i data-feather="check" class="text-greenLight"></i>
                  <span>100+ Payment Methods</span>
                </li>
                <li class="font-mullish flex items-center space-x-2">
                  <i data-feather="check" class="text-greenLight"></i>
                  <span> Industry Leading Success Rate </span>
                </li>
                <li class="font-mullish flex items-center space-x-2">
                  <i data-feather="check" class="text-greenLight"></i>
                  <span> Superior Checkout Experience </span>
                </li>
                <li class="font-mullish flex items-center space-x-2">
                  <i data-feather="check" class="text-greenLight"></i>
                  <span> Easy to Integrate </span>
                </li>
                <li class="font-mullish flex items-center space-x-2">
                  <i data-feather="check" class="text-greenLight"></i>
                  <span> Instant Settlements from day 1 </span>
                </li>
                <li class="font-mullish flex items-center space-x-2">
                  <i data-feather="check" class="text-greenLight"></i>
                  <span> In-depth Reporting and Insights </span>
                </li>
              </ul>

              <!-- for button and hyperlink-->
              <div
                class="flex flex-col-reverse md:flex-row items-center space-x-4"
              >
                <button
                  class="bg-lightBlue w-full md:w-fit text-white py-[14px] px-[18px] rounded-md font-mullish font-bold hover:bg-lightBlue500 translate-all duration-200"
                >
                  Sign Up Now
                </button>
                <!--hyperlink-->
                <div
                  class="flex self-start md:items-center cursor-pointer group"
                >
                  <a
                    href="#"
                    class="font-mullish font-bold text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                    >Know More</a
                  >
                  <i
                    data-feather="chevron-right"
                    class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                  ></i>
                </div>
              </div>
            </div>
            <img
              src="./images/payment-suite.png"
              alt=""
              class="max-w-[600px] absolute right-0 bottom-0 hidden md:max-w-[400px] lg:max-w-[600px] md:block lg:block"
            />
          </div>

          <div
            class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10"
          >
            <!--Box1-->
            <div class="w-full min-h-[15rem] relative cursor-pointer">
              <img
                src="./images/payment-link-icon.svg"
                alt=""
                class="bg-lightBlue absolute right-3 top-3 w-12 h-12 rounded-full z-[8] transition-all duration-200"
              />

              <!--box shape-->
              <svg
                viewBox="0 0 349.32501220703125 225"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                class="stroke-1 stroke-[#818597] h-full w-full absolute z-[9] transition-all duration-200"
                style="stroke-opacity: 0.15"
              >
                <path
                  d="m 0 6 
                  a 6 6 0 0 1 6 -6 
                  h 250.32501220703125 
                  a 16 16 0 0 1 11 5 
                  l 77 77 
                  a 16 16 0 0 1 5 11 
                  v 126 
                  a 6 6 0 0 1 -6 6 
                  h -337.32501220703125 
                  a 6 6 0 0 1 -6 -6 
                  z"
                  fill="#fff"
                ></path>
              </svg>

              <!--box -content -->
              <div
                class="z-[100] absolute w-full h-full flex flex-col justify-between pl-5 py-6 pr-8"
              >
                <!--text part-->
                <div>
                  <h3
                    class="font-mullish font-bold text-deepBlueHead leading-[1.2] text-[1.375rem]"
                  >
                    Payment Links
                  </h3>
                  <p class="font-mullish text-grayText mt-6">
                    Share payment link via an email, SMS, messenger, chatbot
                    etc. and get paid immediately
                  </p>
                </div>

                <!--hyperlink know more-->
                <div class="flex items-center cursor-pointer group">
                  <a
                    href="#"
                    class="font-mullish font-bold text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                    >Know More</a
                  >
                  <i
                    data-feather="chevron-right"
                    class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                  ></i>
                </div>
              </div>
            </div>
            <!--Box2-->
            <div class="w-full min-h-[15rem] relative cursor-pointer">
              <img
                src="./images/payment-link-icon.svg"
                alt=""
                class="bg-lightBlue absolute right-3 top-3 w-12 h-12 rounded-full z-[8] transition-all duration-200"
              />

              <!--box shape-->
              <svg
                viewBox="0 0 349.32501220703125 225"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                class="stroke-1 stroke-[#818597] h-full w-full absolute z-[9] transition-all duration-200"
                style="stroke-opacity: 0.15"
              >
                <path
                  d="m 0 6 
                  a 6 6 0 0 1 6 -6 
                  h 250.32501220703125 
                  a 16 16 0 0 1 11 5 
                  l 77 77 
                  a 16 16 0 0 1 5 11 
                  v 126 
                  a 6 6 0 0 1 -6 6 
                  h -337.32501220703125 
                  a 6 6 0 0 1 -6 -6 
                  z"
                  fill="#fff"
                ></path>
              </svg>

              <!--box -content -->
              <div
                class="z-[100] absolute w-full h-full flex flex-col justify-between pl-5 py-6 pr-8"
              >
                <!--text part-->
                <div>
                  <h3
                    class="font-mullish font-bold text-deepBlueHead leading-[1.2] text-[1.375rem]"
                  >
                    Payment Links
                  </h3>
                  <p class="font-mullish text-grayText mt-6">
                    Share payment link via an email, SMS, messenger, chatbot
                    etc. and get paid immediately
                  </p>
                </div>

                <!--hyperlink know more-->
                <div class="flex items-center cursor-pointer group">
                  <a
                    href="#"
                    class="font-mullish font-bold text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                    >Know More</a
                  >
                  <i
                    data-feather="chevron-right"
                    class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                  ></i>
                </div>
              </div>
            </div>
            <!--Box3-->
            <div class="w-full min-h-[15rem] relative cursor-pointer">
              <img
                src="./images/payment-link-icon.svg"
                alt=""
                class="bg-lightBlue absolute right-3 top-3 w-12 h-12 rounded-full z-[8] transition-all duration-200"
              />

              <!--box shape-->
              <svg
                viewBox="0 0 349.32501220703125 225"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                class="stroke-1 stroke-[#818597] h-full w-full absolute z-[9] transition-all duration-200"
                style="stroke-opacity: 0.15"
              >
                <path
                  d="m 0 6 
                  a 6 6 0 0 1 6 -6 
                  h 250.32501220703125 
                  a 16 16 0 0 1 11 5 
                  l 77 77 
                  a 16 16 0 0 1 5 11 
                  v 126 
                  a 6 6 0 0 1 -6 6 
                  h -337.32501220703125 
                  a 6 6 0 0 1 -6 -6 
                  z"
                  fill="#fff"
                ></path>
              </svg>

              <!--box -content -->
              <div
                class="z-[100] absolute w-full h-full flex flex-col justify-between pl-5 py-6 pr-8"
              >
                <!--text part-->
                <div>
                  <h3
                    class="font-mullish font-bold text-deepBlueHead leading-[1.2] text-[1.375rem]"
                  >
                    Payment Links
                  </h3>
                  <p class="font-mullish text-grayText mt-6">
                    Share payment link via an email, SMS, messenger, chatbot
                    etc. and get paid immediately
                  </p>
                </div>

                <!--hyperlink know more-->
                <div class="flex items-center cursor-pointer group">
                  <a
                    href="#"
                    class="font-mullish font-bold text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                    >Know More</a
                  >
                  <i
                    data-feather="chevron-right"
                    class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                  ></i>
                </div>
              </div>
            </div>
            <!--Box4-->
            <div class="w-full min-h-[15rem] relative cursor-pointer">
              <img
                src="./images/payment-link-icon.svg"
                alt=""
                class="bg-lightBlue absolute right-3 top-3 w-12 h-12 rounded-full z-[8] transition-all duration-200"
              />

              <!--box shape-->
              <svg
                viewBox="0 0 349.32501220703125 225"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                class="stroke-1 stroke-[#818597] h-full w-full absolute z-[9] transition-all duration-200"
                style="stroke-opacity: 0.15"
              >
                <path
                  d="m 0 6 
                  a 6 6 0 0 1 6 -6 
                  h 250.32501220703125 
                  a 16 16 0 0 1 11 5 
                  l 77 77 
                  a 16 16 0 0 1 5 11 
                  v 126 
                  a 6 6 0 0 1 -6 6 
                  h -337.32501220703125 
                  a 6 6 0 0 1 -6 -6 
                  z"
                  fill="#fff"
                ></path>
              </svg>

              <!--box -content -->
              <div
                class="z-[100] absolute w-full h-full flex flex-col justify-between pl-5 py-6 pr-8"
              >
                <!--text part-->
                <div>
                  <h3
                    class="font-mullish font-bold text-deepBlueHead leading-[1.2] text-[1.375rem]"
                  >
                    Payment Links
                  </h3>
                  <p class="font-mullish text-grayText mt-6">
                    Share payment link via an email, SMS, messenger, chatbot
                    etc. and get paid immediately
                  </p>
                </div>

                <!--hyperlink know more-->
                <div class="flex items-center cursor-pointer group">
                  <a
                    href="#"
                    class="font-mullish font-bold text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                    >Know More</a
                  >
                  <i
                    data-feather="chevron-right"
                    class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                  ></i>
                </div>
              </div>
            </div>
            <!--Box5-->
            <div class="w-full min-h-[15rem] relative cursor-pointer">
              <img
                src="./images/payment-link-icon.svg"
                alt=""
                class="bg-lightBlue absolute right-3 top-3 w-12 h-12 rounded-full z-[8] transition-all duration-200"
              />

              <!--box shape-->
              <svg
                viewBox="0 0 349.32501220703125 225"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                class="stroke-1 stroke-[#818597] h-full w-full absolute z-[9] transition-all duration-200"
                style="stroke-opacity: 0.15"
              >
                <path
                  d="m 0 6 
                  a 6 6 0 0 1 6 -6 
                  h 250.32501220703125 
                  a 16 16 0 0 1 11 5 
                  l 77 77 
                  a 16 16 0 0 1 5 11 
                  v 126 
                  a 6 6 0 0 1 -6 6 
                  h -337.32501220703125 
                  a 6 6 0 0 1 -6 -6 
                  z"
                  fill="#fff"
                ></path>
              </svg>

              <!--box -content -->
              <div
                class="z-[100] absolute w-full h-full flex flex-col justify-between pl-5 py-6 pr-8"
              >
                <!--text part-->
                <div>
                  <h3
                    class="font-mullish font-bold text-deepBlueHead leading-[1.2] text-[1.375rem]"
                  >
                    Payment Links
                  </h3>
                  <p class="font-mullish text-grayText mt-6">
                    Share payment link via an email, SMS, messenger, chatbot
                    etc. and get paid immediately
                  </p>
                </div>

                <!--hyperlink know more-->
                <div class="flex items-center cursor-pointer group">
                  <a
                    href="#"
                    class="font-mullish font-bold text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                    >Know More</a
                  >
                  <i
                    data-feather="chevron-right"
                    class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                  ></i>
                </div>
              </div>
            </div>
            <!--Box6-->
            <div class="w-full min-h-[15rem] relative cursor-pointer">
              <img
                src="./images/payment-link-icon.svg"
                alt=""
                class="bg-lightBlue absolute right-3 top-3 w-12 h-12 rounded-full z-[8] transition-all duration-200"
              />

              <!--box shape-->
              <svg
                viewBox="0 0 349.32501220703125 225"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                class="stroke-1 stroke-[#818597] h-full w-full absolute z-[9] transition-all duration-200"
                style="stroke-opacity: 0.15"
              >
                <path
                  d="m 0 6 
                  a 6 6 0 0 1 6 -6 
                  h 250.32501220703125 
                  a 16 16 0 0 1 11 5 
                  l 77 77 
                  a 16 16 0 0 1 5 11 
                  v 126 
                  a 6 6 0 0 1 -6 6 
                  h -337.32501220703125 
                  a 6 6 0 0 1 -6 -6 
                  z"
                  fill="#fff"
                ></path>
              </svg>

              <!--box -content -->
              <div
                class="z-[100] absolute w-full h-full flex flex-col justify-between pl-5 py-6 pr-8"
              >
                <!--text part-->
                <div>
                  <h3
                    class="font-mullish font-bold text-deepBlueHead leading-[1.2] text-[1.375rem]"
                  >
                    Payment Links
                  </h3>
                  <p class="font-mullish text-grayText mt-6">
                    Share payment link via an email, SMS, messenger, chatbot
                    etc. and get paid immediately
                  </p>
                </div>

                <!--hyperlink know more-->
                <div class="flex items-center cursor-pointer group">
                  <a
                    href="#"
                    class="font-mullish font-bold text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                    >Know More</a
                  >
                  <i
                    data-feather="chevron-right"
                    class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                  ></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- feature section 2-->
      <section
        class="bg-[url(./images/feature-section-2BG.svg)] bg-no-repeat bg-cover pb-[500px] mt-14 pt-[20rem]"
      >
        <div class="w-10/12 max-w-[1080px] mx-auto relative pt-4">
          <h2
            class="font-mullish text-center text-2xl leading-[1.2] text-white font-bold"
          >
            Explore Instantpay Business Banking
          </h2>
          <div class="w-6 h-1 bg-greenLight mx-auto mt-4 mb-6"></div>

          <!-- main feaeture box-->
          <div class="w-full min-h[440px] flex flex-col relative">
            <img
              src="./images/x-flame-1.png"
              alt=""
              loading="lazy"
              class="absolute -top-[142px] -left-[140px] w-[200px]"
            />

            <img
              src="./images/x-flame-2.png"
              alt=""
              loading="lazy"
              class="absolute top-[150px] -right-[180px] w-[200px]"
            />

            <!--content box-->
            <div
              class="relative w-full bg-[#181c2e] p-10 py-12 border border-slate-700 z-20 rounded-md"
            >
              <!--left part-->
              <div
                class="flex flex-col justify-between items-start h-full w-full gap-12 z-20"
              >
                <h3
                  class="font-mullish text-[28px] text-white font-bold leading-10 max-w-[500px]"
                >
                  Manage your company’s finances with
                  <img
                    src="./assetsLog/footer_logo.svg"
                    alt=""
                    width="145px"
                    height="32px"
                    class="inline"
                  />
                  <span class="text-greenLight">Business Banking</span>
                </h3>

                <ul class="space-y-2">
                  <li
                    class="font-mullish text-white flex items-center space-x-2"
                  >
                    <i data-feather="check" class="text-greenLight"></i>
                    <span>Open a fully digital current account </span>
                  </li>
                  <li
                    class="font-mullish text-white flex items-center space-x-2"
                  >
                    <i data-feather="check" class="text-greenLight"></i>
                    <span>Automate payables & compliment payments </span>
                  </li>
                  <li
                    class="font-mullish text-white flex items-center space-x-2"
                  >
                    <i data-feather="check" class="text-greenLight"></i>
                    <span>Simplify and track spends with Corporate cards </span>
                  </li>
                  <li
                    class="font-mullish text-white flex items-center space-x-2"
                  >
                    <i data-feather="check" class="text-greenLight"></i>
                    <span>View financial insights at a glance </span>
                  </li>
                </ul>
                <div
                  class="flex flex-col-reverse md:flex-row w-full items-center space-x-4"
                >
                  <button
                    class="relative bg-lightBlue flex items-center place-content-center md:justify-start text-white py-[14px] px-[18px] md:pr-[90px] rounded-md font-mullish font-bold hover:bg-lightBlue500 transition-all duration-200 self-stretch md:w-fit"
                  >
                    <a href="signup.php" >Sign up</a>
                    <div
                      class="w-12 h-[60px] bg-greenLight absolute right-6 skew-x-[20deg] flex justify-center items-center"
                    >
                      <!--arrow-->
                      <svg
                        viewBox="0 0 24 24"
                        focusable="false"
                        class="w-[20px] h-[20px] -skew-x-[20deg]"
                      >
                        <path
                          fill="currentColor"
                          d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"
                        ></path>
                      </svg>
                    </div>
                  </button>
                  <!--hyperlink wala-->
                  <div class="flex flex-row items-center cursor-pointer group">
                    <a
                      href="#"
                      class="font-mullish font-bold text-lightBlue500 group-hover:text-lightBlue transition-all duration-200"
                      >Know More</a
                    >
                    <i
                      data-feather="chevron-right"
                      class="w-5 h-5 text-lightBlue500 group-hover:text-lightBlue transition-all duration-200"
                    ></i>
                  </div>
                </div>
              </div>
              <!--background image for content box-->
              <img
                src="./images/buisness-banking.png"
                alt=""
                class="max-w-[600px] absolute right-0 bottom-0 z-4 max-[1190px]:w-[480px] max-[991px]:w-[400px] max-[933px]:hidden"
              />
            </div>

            <!--card box-->
            <div
              class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-4 my-14"
            >
              <!--box1-->
              <div
                class="w-full min-h-[15rem] relative cursor-pointer featureCard2"
              >
                <!-- box icon -->
                <img
                  src="images/current-icon.svg"
                  class="bg-lightBlue absolute right-3 top-3 w-12 h-12 rounded-full z-[80] featureCardIcon transition-all duration-200"
                />
                <!-- box shape -->
                <svg
                  viewBox="0 0 349.32501220703125 225"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="none"
                  class="stroke-1 stroke-[#525a76] h-full w-full absolute z-[90] featureCardSVG transition-all duration-200"
                  style="stroke-opacity: 0.8"
                >
                  <path
                    d="m 0 6 
                    a 6 6 0 0 1 6 -6 
                    h 250.32501220703125 
                    a 16 16 0 0 1 11 5 
                    l 77 77 
                    a 16 16 0 0 1 5 11 
                    v 126 
                    a 6 6 0 0 1 -6 6 
                    h -337.32501220703125 
                    a 6 6 0 0 1 -6 -6 
                    z"
                    fill="#181C2E"
                  ></path>
                </svg>
                <!-- box content -->
                <div
                  class="z-[1000] absolute h-full w-full pl-5 py-6 pr-8 flex flex-col justify-between featureCardBox"
                >
                  <div>
                    <h3
                      class="font-mullish font-extrabold text-white leading-[1.2] text-[1.375rem]"
                    >
                      Current Account
                    </h3>
                    <p class="font-mullish text-grayText mt-6">
                      Current accounts for fast-growing businesses, supported by
                      the best-in-class technology
                    </p>
                  </div>
                  <div class="flex items-center cursor-pointer place-items-end">
                    <a
                      href="#"
                      class="font-mullish font-bold text-lightBlue500 transition-all duration-200"
                      >Know More</a
                    >
                    <i
                      data-feather="chevron-right"
                      class="w-5 h-5 text-lightBlue500 transition-all duration-200"
                    ></i>
                  </div>
                </div>
              </div>
              <!--box2-->
              <div
                class="w-full min-h-[15rem] relative cursor-pointer featureCard2"
              >
                <!-- box icon -->
                <img
                  src="images/current-icon.svg"
                  class="bg-lightBlue absolute right-3 top-3 w-12 h-12 rounded-full z-[80] featureCardIcon transition-all duration-200"
                />
                <!-- box shape -->
                <svg
                  viewBox="0 0 349.32501220703125 225"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="none"
                  class="stroke-1 stroke-[#525a76] h-full w-full absolute z-[90] featureCardSVG transition-all duration-200"
                  style="stroke-opacity: 0.8"
                >
                  <path
                    d="m 0 6 
                    a 6 6 0 0 1 6 -6 
                    h 250.32501220703125 
                    a 16 16 0 0 1 11 5 
                    l 77 77 
                    a 16 16 0 0 1 5 11 
                    v 126 
                    a 6 6 0 0 1 -6 6 
                    h -337.32501220703125 
                    a 6 6 0 0 1 -6 -6 
                    z"
                    fill="#181C2E"
                  ></path>
                </svg>
                <!-- box content -->
                <div
                  class="z-[1000] absolute h-full w-full pl-5 py-6 pr-8 flex flex-col justify-between featureCardBox"
                >
                  <div>
                    <h3
                      class="font-mullish font-extrabold text-white leading-[1.2] text-[1.375rem]"
                    >
                      Current Account
                    </h3>
                    <p class="font-mullish text-grayText mt-6">
                      Current accounts for fast-growing businesses, supported by
                      the best-in-class technology
                    </p>
                  </div>
                  <div class="flex items-center cursor-pointer place-items-end">
                    <a
                      href="#"
                      class="font-mullish font-bold text-lightBlue500 transition-all duration-200"
                      >Know More</a
                    >
                    <i
                      data-feather="chevron-right"
                      class="w-5 h-5 text-lightBlue500 transition-all duration-200"
                    ></i>
                  </div>
                </div>
              </div>
              <!--box3-->
              <div
                class="w-full min-h-[15rem] relative cursor-pointer featureCard2"
              >
                <!-- box icon -->
                <img
                  src="images/current-icon.svg"
                  class="bg-lightBlue absolute right-3 top-3 w-12 h-12 rounded-full z-[80] featureCardIcon transition-all duration-200"
                />
                <!-- box shape -->
                <svg
                  viewBox="0 0 349.32501220703125 225"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="none"
                  class="stroke-1 stroke-[#525a76] h-full w-full absolute z-[90] featureCardSVG transition-all duration-200"
                  style="stroke-opacity: 0.8"
                >
                  <path
                    d="m 0 6 
                    a 6 6 0 0 1 6 -6 
                    h 250.32501220703125 
                    a 16 16 0 0 1 11 5 
                    l 77 77 
                    a 16 16 0 0 1 5 11 
                    v 126 
                    a 6 6 0 0 1 -6 6 
                    h -337.32501220703125 
                    a 6 6 0 0 1 -6 -6 
                    z"
                    fill="#181C2E"
                  ></path>
                </svg>
                <!-- box content -->
                <div
                  class="z-[1000] absolute h-full w-full pl-5 py-6 pr-8 flex flex-col justify-between featureCardBox"
                >
                  <div>
                    <h3
                      class="font-mullish font-extrabold text-white leading-[1.2] text-[1.375rem]"
                    >
                      Current Account
                    </h3>
                    <p class="font-mullish text-grayText mt-6">
                      Current accounts for fast-growing businesses, supported by
                      the best-in-class technology
                    </p>
                  </div>
                  <div class="flex items-center cursor-pointer place-items-end">
                    <a
                      href="#"
                      class="font-mullish font-bold text-lightBlue500 transition-all duration-200"
                      >Know More</a
                    >
                    <i
                      data-feather="chevron-right"
                      class="w-5 h-5 text-lightBlue500 transition-all duration-200"
                    ></i>
                  </div>
                </div>
              </div>
            </div>

            <!--demo-box-->
            <div
              class="w-full items-center justify-evenly border border-slate-700 mb-24 gap-y-6 relative rounded-md p-8 hidden md:flex md:flex-col lg:flex-row lg:flex"
            >
              <p class="font-mullish text-white text-xl">
                Check out the live demo to learn how Instantpay works.
                <span class="font-bold"> No sign-up required!</span>
              </p>

              <button
                class="relative bg-lightBlue flex items-center justify-start text-white py-[14px] px-[18px] md:pr-[90px] rounded-md font-mullish font-bold hover:bg-lightBlue500 transition-all duration-200"
              >
                Check out the demo
                <div
                  class="w-12 h-[60px] bg-greenLight absolute right-6 skew-x-[20deg] flex justify-center items-center"
                >
                  <!--arrow-->
                  <svg
                    viewBox="0 0 24 24"
                    focusable="false"
                    class="w-[20px] h-[20px] -skew-x-[20deg]"
                  >
                    <path
                      fill="currentColor"
                      d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"
                    ></path>
                  </svg>
                </div>
              </button>
            </div>
          </div>
        </div>
      </section>

      <!--new feeatures -->
      <section class="bg-white relative">
        <div class="relative w-11/12 max-w-[1080px] mx-auto pt-4">
          <img
            src="./images/feature-section1-dottedrows.png"
            alt=""
            class="absolute w-[233px] left-[300px] -top-[6rem] z-10"
          />
          <img
            src="./images/feature-section1-dottedrows.png"
            alt=""
            class="absolute w-[233px] -right-[3.5rem] -top-[6rem] z-10"
          />

          <div
            class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-10 gap-x-4 relative z-[100]"
          >
            <!--item 1-->
            <div class="relative flex items-center z-0">
              <h2
                class="text-deepBlueHead font-mullish font-extrabold text-4xl leading-[3.375rem]"
              >
                New in the <span class="text-lightBlue500"> Instantpay </span>
                <br />
                Product Suite
              </h2>
            </div>
            <!--card 1-->
            <div
              class="p-10 bg-[url(images/instant-settlement-bg.svg)] w-full max-h-[300px] cursor-pointer bg-no-repeat hover:scale-105 transition-all duration-200 hover:bg-[url(images/instant-settlement-bghover.svg)] bg-white"
            >
              <img src="./images/razorpayXicon.svg" alt="" class="w-10 h-10" />
              <h3 class="font-mullish text-lg font-bold pt-4">
                Corporate Cards
              </h3>
              <p class="font-mullish py-3 text-grayText leading-normal">
                Simplify your recurring, international and team expenses with
                savings on every spend. Save upto 10 lacs every month.
              </p>
              <div class="flex flex-row items-center cursor-pointer group">
                <a
                  href=""
                  class="font-mullish font-bold text-lightBlue500 group-hover:text-lightBlue transition-all duration-200"
                  >Know More</a
                >
                <i
                  data-feather="chevron-right"
                  class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                ></i>
              </div>
            </div>
            <!--card 2-->
            <div
              class="p-10 bg-[url(images/instant-settlement-bg.svg)] w-full max-h-[300px] cursor-pointer bg-no-repeat hover:scale-105 transition-all duration-200 hover:bg-[url(images/instant-settlement-bghover.svg)] bg-white"
            >
              <img src="./images/razorpayXicon.svg" alt="" class="w-10 h-10" />
              <h3 class="font-mullish text-lg font-bold pt-4">
                Corporate Cards
              </h3>
              <p class="font-mullish py-3 text-grayText leading-normal">
                Simplify your recurring, international and team expenses with
                savings on every spend. Save upto 10 lacs every month.
              </p>
              <div class="flex flex-row items-center cursor-pointer group">
                <a
                  href=""
                  class="font-mullish font-bold text-lightBlue500 group-hover:text-lightBlue transition-all duration-200"
                  >Know More</a
                >
                <i
                  data-feather="chevron-right"
                  class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                ></i>
              </div>
            </div>
            <!--card 3-->
            <div
              class="p-10 bg-[url(images/instant-settlement-bg.svg)] w-full max-h-[300px] cursor-pointer bg-no-repeat hover:scale-105 transition-all duration-200 hover:bg-[url(images/instant-settlement-bghover.svg)] bg-white"
            >
              <img src="./images/razorpayXicon.svg" alt="" class="w-10 h-10" />
              <h3 class="font-mullish text-lg font-bold pt-4">
                Corporate Cards
              </h3>
              <p class="font-mullish py-3 text-grayText leading-normal">
                Simplify your recurring, international and team expenses with
                savings on every spend. Save upto 10 lacs every month.
              </p>
              <div class="flex flex-row items-center cursor-pointer group">
                <a
                  href=""
                  class="font-mullish font-bold text-lightBlue500 group-hover:text-lightBlue transition-all duration-200"
                  >Know More</a
                >
                <i
                  data-feather="chevron-right"
                  class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                ></i>
              </div>
            </div>
            <!--card 4-->
            <div
              class="p-10 bg-[url(images/instant-settlement-bg.svg)] w-full max-h-[300px] cursor-pointer bg-no-repeat hover:scale-105 transition-all duration-200 hover:bg-[url(images/instant-settlement-bghover.svg)] bg-white"
            >
              <img src="./images/razorpayXicon.svg" alt="" class="w-10 h-10" />
              <h3 class="font-mullish text-lg font-bold pt-4">
                Corporate Cards
              </h3>
              <p class="font-mullish py-3 text-grayText leading-normal">
                Simplify your recurring, international and team expenses with
                savings on every spend. Save upto 10 lacs every month.
              </p>
              <div class="flex flex-row items-center cursor-pointer group">
                <a
                  href=""
                  class="font-mullish font-bold text-lightBlue500 group-hover:text-lightBlue transition-all duration-200"
                  >Know More</a
                >
                <i
                  data-feather="chevron-right"
                  class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                ></i>
              </div>
            </div>
            <!--card 5-->
            <div
              class="p-10 bg-[url(images/instant-settlement-bg.svg)] w-full max-h-[300px] cursor-pointer bg-no-repeat hover:scale-105 transition-all duration-200 hover:bg-[url(images/instant-settlement-bghover.svg)] bg-white"
            >
              <img src="./images/razorpayXicon.svg" alt="" class="w-10 h-10" />
              <h3 class="font-mullish text-lg font-bold pt-4">
                Corporate Cards
              </h3>
              <p class="font-mullish py-3 text-grayText leading-normal">
                Simplify your recurring, international and team expenses with
                savings on every spend. Save upto 10 lacs every month.
              </p>
              <div class="flex flex-row items-center cursor-pointer group">
                <a
                  href=""
                  class="font-mullish font-bold text-lightBlue500 group-hover:text-lightBlue transition-all duration-200"
                  >Know More</a
                >
                <i
                  data-feather="chevron-right"
                  class="w-5 h-5 text-lightBlue500 group-hover:text-grayBlue transition-all duration-200"
                ></i>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--core features-->
      <section
        class="w-full bg-[url(assetsLog/core-features-sectionBg.svg)] bg-no-repeat bg-cover bg-center mt-14 relative corefeaturesection"
      >
        <div class="relative w-11/12 max-w-[1080px] mx-auto pt-4">
          <h2 class="font-mullish font-bold text-2xl text-center text-white">
            Features
          </h2>
          <div class="w-6 h-1 bg-greenLight mx-auto mt-4 mb-6"></div>
          <p class="font-mullish text-center max-w-[450px] text-white mx-auto">
            Empower your business with all the right tools to accept online
            payments and provide the best customer experience
          </p>

          <!--grid -->
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[2rem] mt-8"
          >
            <!--card1-->
            <div>
              <img src="./images/instant-activation-icon.svg" alt="" />
              <h3 class="font-mullish text-white text-lg font-bold my-4">
                Instant Activation
              </h3>
              <p class="font-mullish text-white opacity-80">
                Get activated and transact within 2 minutes. Completely online
                onboarding with minimum documentation.
              </p>
            </div>
            <!--card2-->
            <div>
              <img src="./images/instant-activation-icon.svg" alt="" />
              <h3 class="font-mullish text-white text-lg font-bold my-4">
                Instant Activation
              </h3>
              <p class="font-mullish text-white opacity-80">
                Get activated and transact within 2 minutes. Completely online
                onboarding with minimum documentation.
              </p>
            </div>
            <!--card3-->
            <div>
              <img src="./images/instant-activation-icon.svg" alt="" />
              <h3 class="font-mullish text-white text-lg font-bold my-4">
                Instant Activation
              </h3>
              <p class="font-mullish text-white opacity-80">
                Get activated and transact within 2 minutes. Completely online
                onboarding with minimum documentation.
              </p>
            </div>
            <!--card4-->
            <div>
              <img src="./images/instant-activation-icon.svg" alt="" />
              <h3 class="font-mullish text-white text-lg font-bold my-4">
                Instant Activation
              </h3>
              <p class="font-mullish text-white opacity-80">
                Get activated and transact within 2 minutes. Completely online
                onboarding with minimum documentation.
              </p>
            </div>
            <!--card5-->
            <div>
              <img src="./images/instant-activation-icon.svg" alt="" />
              <h3 class="font-mullish text-white text-lg font-bold my-4">
                Instant Activation
              </h3>
              <p class="font-mullish text-white opacity-80">
                Get activated and transact within 2 minutes. Completely online
                onboarding with minimum documentation.
              </p>
            </div>
            <!--card6-->
            <div>
              <img src="./images/instant-activation-icon.svg" alt="" />
              <h3 class="font-mullish text-white text-lg font-bold my-4">
                Instant Activation
              </h3>
              <p class="font-mullish text-white opacity-80">
                Get activated and transact within 2 minutes. Completely online
                onboarding with minimum documentation.
              </p>
            </div>
            <!--card7-->
            <div>
              <img src="./images/instant-activation-icon.svg" alt="" />
              <h3 class="font-mullish text-white text-lg font-bold my-4">
                Instant Activation
              </h3>
              <p class="font-mullish text-white opacity-80">
                Get activated and transact within 2 minutes. Completely online
                onboarding with minimum documentation.
              </p>
            </div>
            <!--card8-->
            <div>
              <img src="./images/instant-activation-icon.svg" alt="" />
              <h3 class="font-mullish text-white text-lg font-bold my-4">
                Instant Activation
              </h3>
              <p class="font-mullish text-white opacity-80">
                Get activated and transact within 2 minutes. Completely online
                onboarding with minimum documentation.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!--join razorpay section-->

      <section class="bg-[#f5f8fe] relative pt-40 pb-12 -mt-[200px] -z-[100] top-6 ">
        <div
          class="w-11/12 max-w-[1080px] mx-auto relative flex flex-col md:flex-row"
        >
          <!--left part -->
          <div
            class="flex flex-col  justify-center w-full sm:my-16 mr-6"
          >
            <h2 class="font-mullish font-bold text-2xl text-deepBlueHead">
              Join the 50,00,000+ businesses using Instantpay
            </h2>
            <div class="w-6 h-1 bg-greenLight my-4 mb-10"></div>
            <p class="font-mullish opacity-80">
              We make it easier for you to focus on building great products
              while we work on simplifying your payments. Become one of us by
              joining thousands of our happy users and simplify the online
              payment experience for your customers.
            </p>
            <p class="font-mullish mt-6 opacity-80">
              Focus on your business while we handle the complexities of
              payments for you.
            </p>

            <!-- <button
              class="bg-lightBlue text-white py-[14px] px-[18px] rounded-md font-mullish font-bold hover:bg-lightBlue500 transition-all duration-200"
            >
              Sign Up Now
            </button> -->

            <button
            class="min-w-[32px] font-mullish text-sm font-bold text-white bg-lightBlue300 border flex rounded-sm items-center hover:text-lightBlue500 transition-all duration-200 py-3 px-4 place-self-start"
          >
            Get Started
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
          </div>

          <!--right part-->
          <div class="h-[35vh] w-[50vw] max-lg:w-[100vw] max-[1200px]:h-[50vh] my-9 relative overflow-y-hidden -m-7">
            <div
              style="background: linear-gradient(180deg, #f4f8ff, #fff0)"
              class="absolute w-full h-[150px] top-0 z-50"
            ></div>

            <img
              src="./images/comanies.png"
              alt=""
              class="absolute h-100 object-cover companiesList"
            />

            <div
              style="background: linear-gradient(0deg, #f4f8ff, #fff0)"
              class="absolute w-full h-[150px] bottom-0 z-50"
            ></div>
          </div>
        </div>
      </section>

      <!-- Testimonail Section -->
      <section class="relative">
        <div class="w-11/12 max-w-[1300px] mx-auto relative py-20">
          <div class="testimonial mySwiper">
            <div class="testi-content swiper-wrapper  data-swiper-autoplay:2000">
              <div class="slide swiper-slide">
                <img src="images/img1.jpg" alt="" class="image" />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                  saepe provident dolorem a quaerat quo error facere nihil deleniti
                  eligendi ipsum adipisci, fugit, architecto amet asperiores
                  doloremque deserunt eum nemo.
                </p>
    
                <i class="bx bxs-quote-alt-left quote-icon"></i>
    
                <div class="details">
                  <span class="name">Marnie Lotter</span>
                  <span class="job">Web Developer</span>
                </div>
              </div>
              <div class="slide swiper-slide">
                <img src="images/img2.jpg" alt="" class="image" />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                  saepe provident dolorem a quaerat quo error facere nihil deleniti
                  eligendi ipsum adipisci, fugit, architecto amet asperiores
                  doloremque deserunt eum nemo.
                </p>
    
                <i class="bx bxs-quote-alt-left quote-icon"></i>
    
                <div class="details">
                  <span class="name">Marnie Lotter</span>
                  <span class="job">Web Developer</span>
                </div>
              </div>
              <div class="slide swiper-slide">
                <img src="images/img3.jpg" alt="" class="image" />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                  saepe provident dolorem a quaerat quo error facere nihil deleniti
                  eligendi ipsum adipisci, fugit, architecto amet asperiores
                  doloremque deserunt eum nemo.
                </p>
    
                <i class="bx bxs-quote-alt-left quote-icon"></i>
    
                <div class="details">
                  <span class="name">Marnie Lotter</span>
                  <span class="job">Web Developer</span>
                </div>
              </div>
            </div>
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
          </div>
          <script src="js/swiper-bundle.min.js"></script>

          <!-- JavaScript -->
          <script src="js/script.js"></script>
          <!-- <div></div>
          <img
            src="./images/feature-section1-dottedrows.png"
            alt=""
            class="absolute w-[200px] top-[8rem] left-[2rem] -z-10"
          />

          <h2
            class="font-mullish font-extrabold text-2xl text-deepBlueHead text-center"
          >
            An Experience <br />People Love to Talk About
          </h2>
          <div class="w-6 h-1 bg-greenLight mx-auto my-4"></div> -->

          <!--left button -->
          <!-- <button
            class="w-[100px] h-[100px] bg-[#f4f8ff] rounded-full absolute left-0 top-1/2 flex justify-center items-center"
          >
            <div
              class="w-[65%] h-[65%] bg-[#f4f8ff] rounded-full flex justify-center items-center mix-blend-multiply"
            >
              <i
                data-feather="chevron-right"
                class="stroke-[5px] w-6 h-6 text-gray-400 rotate-180"
              ></i>
            </div>
          </button> -->

          <!--right button -->
          <!-- <button
            class="w-[100px] h-[100px] bg-[#f4f8ff] rounded-full absolute right-0 top-1/2 flex justify-center items-center"
          >
            <div
              class="w-[65%] h-[65%] bg-[#f4f8ff] rounded-full flex justify-center items-center mix-blend-multiply"
            >
              <i
                data-feather="chevron-right"
                class="stroke-[5px] w-6 h-6 text-gray-400"
              ></i>
            </div>
          </button> -->

          <!-- main content -->
          <!-- <div
            class="flex flex-col xl:flex-row max-w-[960px] items-center mx-auto my-20 space-x-[10rem]"
          > -->
            <!--left image -->
            <!-- <img
              src="./images/testimonial.jpg"
              alt=""
              height="320px"
              width="320px"
              class="rounded-xl"
            /> -->

            <!-- riught part-->
            <!-- <div class="max-w-[400px] flex flex-col">
              <img
                src="./images/quotes.svg"
                alt=""
                width="35px"
                height="40px"
                class="-mb-2 xl:order-1"
              />
              <p class="font-mullish text-3xl font-extralight xl:order-1">
                Readymade Closed Wallet Solution For Quick Refunds
              </p>
              <a href="#" class="text-grayText italic underline xl:order-1"
                >Learn More</a
              >
              <p
                class="font-mullish font-extrabold text-2xl -order-1 xl:order-1"
              >
                Lorem Ipsum
              </p>
              <p class="font-mullish font-medium xl:order-1">
                CEO, XYZ Engineering Company
              </p>
              <img
                src="./images/fake-company-logo.png"
                alt=""
                width="80px"
                height="40px"
                class="xl:order-1"
              />
            </div>
          </div> -->

          <!-- 6 dot wala div-->
          <!-- <div class="w-full flex flex-row mx-auto space-x-2 justify-center"> -->
            <!--dot 1-->
            <!-- <div class="h-[10px] w-[10px] bg-gray-300 rounded-full"></div>

            <div class="h-[10px] w-[10px] bg-lightBlue300 rounded-full"></div>

            <div class="h-[10px] w-[10px] bg-gray-300 rounded-full"></div>

            <div class="h-[10px] w-[10px] bg-gray-300 rounded-full"></div>

            <div class="h-[10px] w-[10px] bg-gray-300 rounded-full"></div>

            <div class="h-[10px] w-[10px] bg-gray-300 rounded-full"></div>
          </div> -->
        </div>
      </section>

      <!--CTA-->
      <section
        class="bg-[url(images/CTABg.svg)] w-full h-full bg-no-repeat bg-cover relative ctaSection min-h-[510px]"
      >
        <!--main content box-->
        <div
          class="w-11/12 max-w-[1080px] relative flex flex-row items-center mx-auto justify-between space-x-20 pt-16"
        >
          <!--left part-->
          <div class="flex flex-col gap-5 mt-12 max-w-[600px]">
            <h2 class="font-mullish font-bold text-2xl text-white">
              Supercharge your business with Instantpay
            </h2>
            <div class="w-6 h-1 bg-greenLight"></div>
            <p class="font-mullish text-white">
              Sign up now to experience the future of payments and offer <br />
              your customers the best checkout experience.
            </p>

            <ul class="flex flex-row flex-wrap gap-x-11 text-white gap-y-3">
              <li class="font-mullish text-white flex flex-row">
                <i data-feather="check" class="text-greenLight"></i>
                <span>Quick Onboarding </span>
              </li>
              <li class="font-mullish text-white flex flex-row">
                <i data-feather="check" class="text-greenLight"></i>
                <span>Access to entire product suite </span>
              </li>
              <li class="font-mullish text-white flex flex-row">
                <i data-feather="check" class="text-greenLight"></i>
                <span>API access </span>
              </li>
              <li class="font-mullish text-white flex flex-row">
                <i data-feather="check" class="text-greenLight"></i>
                <span>24x7 support </span>
              </li>
            </ul>

            <button
              class="min-w-[32px] font-mullish text-sm font-bold bg-white text-lightBlue300 border flex rounded-sm items-center hover:text-lightBlue500 transition-all duration-200 py-3 px-4 place-self-start"
            >
              Sign Up Now
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
          </div>

          <!--right side wali image-->
          <img
            src="./images/ctaImg.svg"
            alt=""
            width="240px"
            height="282px"
            class="mt-16 pt-3 hidden lg:block"
          />
        </div>
      </section>
    </div>

    <!-- --------------------------------Footer-------------------------------- -->
    <footer
      style="background: linear-gradient(to right, #eef9fe, #edf7ff)"
      class="-mt-[400px] md:-mt-[300px]"
    >
      <div
        class="w-10/12 pt-[400px] pb-10 md:pt-[350px] md:my-0 md:w-11/12 max-w-[1080px] mx-auto flex flex-col space-y-6 lg:space-y-0 lg:space-x-4 lg:flex-row justify-between"
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

    <!-- ----------------------Chatbot----------------------->
    <!-- <div class="absolute">
      <button class="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot absolute">
      <header>
        <h2>Chatbot</h2>
        <span class="close-btn material-symbols-outlined">close</span>
      </header>
      <ul class="chatbox">
        <li class="chat incoming">
          <span class="material-symbols-outlined">smart_toy</span>
          <p>Hi there 👋<br>How can I help you today?</p>
        </li>
      </ul>
      <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
      </div>
    </div>
  </div>
  <script>
    
  </script>

    


    <script>
      feather.replace();
    </script> -->
  </body>
</html>
