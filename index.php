<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "temp_23";
$conn = mysqli_connect($server,$username,$password,$database);
$loginname = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// $loginname = $_POST('name');
$insert = "INSERT INTO `temp_23`.`logindetails`(`Serial No.`, `Username`, `Email`, `Password`) VALUES (' ','$loginname','$email','$password')";
//  echo $insert;
if($conn -> query($insert == true)) {
    echo "Data Successfully Inserted.";
    $insert = true;
}
else {
    echo "ERROR!.$insert <br> $conn->error";
}
$conn -> close();
?>