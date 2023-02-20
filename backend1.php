<?php
// Database connection
$conn = mysqli_connect("localhost","root", "", "acrud");
// if ($conn->connect_error) {
//     die("Error connecting to the server");
// }

extract($_POST);




if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile']) ){
    $query = " INSERT INTO `crudtable` (`firstname`, `lastname`, `email`, `mobile`) VALUES ( '$firstname', '$lastname', '$email', '$mobile' ) ";
    mysqli_query($conn, $query);
}