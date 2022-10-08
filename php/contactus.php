<?php

$conn = mysqli_connect("localhost", "root", "", "bookopedia");
$insert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];


        $sql = "INSERT INTO `contact` (`name`, `email` , `subject`, `message`) VALUES ('$name','$email','$subject', '$message');";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $insert = true;
        } else {
            echo "record does not insert" . mysqli_error($conn);
        }
    }
}
