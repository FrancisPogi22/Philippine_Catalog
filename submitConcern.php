<?php

if (isset($_POST['submit'])) {
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = "INSERT INTO concern (name, email, phone, message) VALUES ('$fullname', '$email', '$phone', '$message')";

    if (mysqli_query($con, $query)) {
        echo "<script>toastr.success('Submitted successfully.')</script>";
    } else {
        echo "<script>toastr.success('Unsuccessful Submission.')</script>";
    }
}
