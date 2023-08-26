<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    $user_id = $_POST['user_id'];

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $person = mysqli_real_escape_string($conn, $_POST['person']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $insertQuery = "INSERT INTO reservations (user_id, name, phone, person, date, time, message) 
                    VALUES ('$user_id', '$name', '$phone', '$person', '$date', '$time', '$message')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "Reservation added successfully!";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

$conn->close();
?>