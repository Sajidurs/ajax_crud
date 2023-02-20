<?php
// Database connection
$conn = mysqli_connect("localhost","root", "", "acrud");
if ($conn->connect_error) {
    die("Error connecting to the server");
} else{
    echo "Database connection established";
}


// if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile']) ){

// }