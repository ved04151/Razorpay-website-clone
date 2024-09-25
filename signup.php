<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="google-signin-client_id" content="1069852715119-rfkijut3bo69g4j1sv1fk3256i0k1gce.apps.googleusercontent.com">
        <meta http-equiv="Cross-Origin-Opener-Policy" content="same-origin" />

        <title>SignIn</title>
    
        <link rel="stylesheet" href="signup.css">
        <script src="https://cdn.tailwindcss.com"></script>
    
      

    </head>

    <body>

        <!-- <script src="https://apis.google.com/js/platform.js" async defer></script> -->

        <div class="w-screen h-screen flex flex-col  items-center bg-white gap-10">
         <nav class="w-[80vw] mx-[100px] flex justify-between mt-10 ">
            <a href="index.php"> <img src="assetsLog/png-IP-logo.png" class="w-40"/></a>
             <!-- <button  clas s=" rounded-md w-[90px] h-10 bg: bg-white text-black hover:scale-110  hover:bg-black hover:text-white ease-in duration-300">Sign Up </button> -->
         </nav>
         <div class="w-[80vw] h-[570px] mx-[100px] flex flex-row justify-between bg-white text-black ">
            
             <div class="flex flex-col justify-center w-[45%]  max-[885px]:w-[100%]">
                 <div>
                     <h1 class="text-[30px] font-bold">Create an account</h1>
                     <!-- <p class="italic">"please login for get better experience"</p> -->
                     
                     
                 </div>
                 
                 <?php
                // Database connection parameters
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "instantpay";

                // Create a connection
                $conn = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Check if the form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve user inputs
                    $username = $_POST["username"];
                    $emailid = $_POST["email"];
                    $password = $_POST["password"];

                    // You should perform proper validation and sanitization here

                    // Insert data into the database
                    $sql = "INSERT INTO signup (username, emailid, password) VALUES ('$username', '$emailid', '$password')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<div class='bg-green-200 text-green-800 p-4 mb-4 rounded-md'> Registration successful for $username </div>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }

                // Close the database connection
                $conn->close();
                ?>

                 <!-- <form action="C:\xampp\htdocs\signup.php" class="flex flex-col justify-center text-lg" method="post">
                    <label class="">Enter User Name</label> 
                     <input type="text" placeholder="User Name" required
                     class="w-[100%]  h-10 border-2 border-black rounded-md text-black hover:scale-105 duration-200 ease-in transition-all" />
                     <br>
                     <label class="">Enter Gmail</label> 
                     <input type="email" placeholder="abc@gmail.com" required
                     class="w-[100%] h-10 border-2 border-black rounded-md text-black hover:scale-105 duration-200 ease-in transition-all" />
                     <br>
                     <label class="">Create Password</label> 
                     <input type="password" placeholder="Create Password" minlength="8" required
                     class="w-[100%] h-10 border-2 border-black rounded-md text-black hover:scale-105 duration-200 ease-in transition-all "/>
                     <! <p class="text-sm left-10 text-right">forgot Password</p> -->
                     <!-- <br>
                     <button type="submit" class=" rounded-md w-[100%] h-12 bg-yellow-500 hover:scale-105  hover:text-black ease-in duration-300 text-black ">Sign Up</button> -->
                    <!-- <input type="submit" value="submit">signup -->
                     <!-- <br> -->

                     <!-- <br>
                     <button class="bg-yellow-600 relative z-10 before:bg-black before:absolute before:origin-left before:transition-all before:duration-1000 before:-z-10 before:scale-x-0 hover:before:scale-x-100  before:top-0 before:bottom-0 before:left-0 before:right-0 ">Hire me</button> -->
                 <!-- </form> --> 

                 <form action="" method="post" class="flex flex-col justify-center text-lg">
                    <label for="username">Enter User Name</label>
                    <input type="text" id="username" name="username" placeholder="User Name" required
                        class="w-[100%]  h-10 border-2 border-black rounded-md text-black hover:scale-105 duration-200 ease-in transition-all" />
                    <br>
                    <label for="email">Enter Gmail</label>
                    <input type="email" id="email" name="email" placeholder="abc@gmail.com" required
                        class="w-[100%] h-10 border-2 border-black rounded-md text-black hover:scale-105 duration-200 ease-in transition-all" />
                    <br>
                    <label for="password">Create Password</label>
                    <input type="password" id="password" name="password" placeholder="Create Password" minlength="8" required
                        class="w-[100%] h-10 border-2 border-black rounded-md text-black hover:scale-105 duration-200 ease-in transition-all " />
                    <br>
                    <button type="submit" class="rounded-md w-[100%] h-12 bg-yellow-500 hover:scale-105  hover:text-black ease-in duration-300 text-black">Sign Up</button>
                    <br>
                </form>

                  <button data-onsuccess="onSignIn"  class=" g-signin2 rounded-md w-[100%] h-12  bg-black text-white  hover:scale-105  hover:bg-white hover:text-black ease-in duration-300  hover:border-2 border-black flex justify-center items-center gap-2 "><img src="assetsLog/google.png" class="w-5"/> Sign Up with Google</button>
                
                 <p class="self-center">Already have an account? <a href="login.php">Login</a></p><br>
                 <p class="text-center justify-center">Unable to Login? We are here- <br> <span class="">instantPay@gmail.com</span></p>
     
             </div>
             <div class=" w-[45%] flex justify-center items-center p-0 max-[885px]:hidden">
     
                 <div>
                     <img src="assetsLog/frame.png" class="w-[30vw] relative top-4 left-4"/>
                 </div>
             
                 <img src="assetsLog/signup.png" class="w-[30vw] absolute"/>
     
             </div>
         </div>
         
         
        </div>

        <script>
        function onSignIn(googleUser) {
         var profile = googleUser.getBasicProfile();
         console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
         console.log('Name: ' + profile.getName());
         console.log('Image URL: ' + profile.getImageUrl());
         console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        }
        </script>

        
        
        

     </body>
     

</html>