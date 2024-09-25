<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="index.js"></script>

    <link rel="stylesheet" href="./login.css">
    
    <link rel="stylesheet" href="style.css" />
</head>

<body>
   <div class="w-screen h-screen flex flex-col  items-center bg-[#00004d] gap-10">
    <nav class="w-[80vw] mx-[100px] flex justify-between mt-10 ">
       <a href="index.php"> <img src="assetsLog/footer_logo.svg" class="w-40"/></a>
        <a href="signup.php"><button class=" rounded-md w-[90px] h-10 bg: bg-white text-black hover:scale-110  hover:bg-black hover:text-white ease-in duration-300">Sign Up </button></a>
    </nav>
    <div class="w-[80vw] h-[500px] mx-[100px] flex flex-row justify-between bg-[#00004d] text-white ">
        
        <div class="flex flex-col justify-center w-[45%]  max-[885px]:w-[100%]">
            <div>
                <h1 class="text-[40px] font-bold">Welcome back!</h1>
                <p class="italic">"please login for get better experience"</p>
                <br>
                
            </div>

            <?php
// Start the session
session_start();

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
    $loginEmail = $_POST["email"];
    $loginPassword = $_POST["password"];

    // You should perform proper validation and sanitization here

    // Check user credentials against the database
    $sql = "SELECT * FROM signup WHERE emailid ='$loginEmail' AND password='$loginPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, login successful
        $user = $result->fetch_assoc()  ;
        
        // Set session variables
        // $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        // echo"$_SESSION[username]";
        
        
        // echo "
        // <script>
        
        //     alert('{$user['username']} login successfully');
            
        // </script>
        // ";
        
        header("location: index.php");
        exit();
    } else {
        // User not found or incorrect credentials
        echo "
        <script>
            alert('{$loginEmail} Invalid Password Try again');
        </script>
        ";
    }
}

// Close the database connection
$conn->close();
?>


            <form action="" method ="post"  class="flex flex-col justify-center text-lg" >
                <label class="">Enter Gmail</label> 
                <input type="email"name = "email" placeholder="abc@gmail.com" required
                class="w-[100%] h-10 border-2 border-black rounded-md text-black hover:scale-105 duration-200 ease-in transition-all" />
                <br>
                <label class="">Enter Password</label> 
                <input type="password" name = "password" placeholder="Enter Password" minlength="8" required
                class="w-[100%] h-10 border-2 border-black rounded-md text-black hover:scale-105 duration-200 ease-in transition-all "/>
                <p class="text-sm left-10 text-right">forgot Password</p>
                <br>
                <button class=" rounded-md w-[100%] h-12 bg-yellow-500 hover:scale-105  hover:text-black ease-in duration-300 text-black " >Sign In</button>
                <br>
                <button class=" rounded-md w-[100%] h-12  bg-black text-white  hover:scale-105  hover:bg-white hover:text-black ease-in duration-300 flex justify-center items-center gap-2 "><img src="assetsLog/google.png" class="w-5"/> Sign in with Google</button>
                <!-- <br>
                <button class="bg-yellow-600 relative z-10 before:bg-black before:absolute before:origin-left before:transition-all before:duration-1000 before:-z-10 before:scale-x-0 hover:before:scale-x-100  before:top-0 before:bottom-0 before:left-0 before:right-0 ">Hire me</button> -->
            </form>

        </div>
        <div class=" w-[45%] flex justify-center items-center p-0 max-[885px]:hidden">

            <!-- <div>
                <img src="assetsLog/frame.png" class="w-[30vw] relative top-4 left-4"/>
            </div>
         -->
            <img src="assetsLog/11.png" class="w-[30vw] absolute top-7 left-1 height: auto width: 100%" />
            
        </div>
    </div>
    
    
   </div>
</body>

</html>