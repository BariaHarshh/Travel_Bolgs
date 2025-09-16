<?php
// Database connection
$host = "localhost";  // change if using online host
$user = "root";       // default in XAMPP
$pass = "";           // default empty in XAMPP
$dbname = "travel_booking";

// Create connection
$conn = new mysqli('localhost','root','$travel_booking');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$destination = $_POST['destination'];
$travel_date = $_POST['date'];
$people = $_POST['people'];

// Insert into database
$sql = "INSERT INTO bookings (name, phone, email, destination, travel_booking, people)
        VALUES ('$name', '$phone', '$email', '$destination', '$travel_date', '$people')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Booking Successful!</h2>";
    echo "<p>Thank you, $name. Your booking for $destination on $travel_booking is confirmed.</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
