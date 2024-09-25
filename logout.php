<?php
session_start();

// Perform logout logic...

// Unset session variables and destroy the session upon logout
// echo "$_SESSION[username]";

session_unset();
// echo "$_SESSION[username]";
session_destroy();

// Redirect to index.html
header("location: index.php");
exit();
?>
