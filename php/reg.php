<?php

$conn = mysqli_connect("localhost", "root", "", "bookopedia");
$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username'])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];


        $sql = "INSERT INTO `signup` (`username`, `email` ,`password`) VALUES ('$username', '$email','$password');";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $insert = true;
        } else {
            echo "record does not insert" . mysqli_error($conn);
        }
    }
}
