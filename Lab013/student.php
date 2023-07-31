<?php

// Connect to the database
$db = new mysqli("localhost", "root", "", "university");

// Check if the connection was successful
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// Get the data from the form
$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

// Insert the data into the database
$sql = "INSERT INTO students (id, name, email, password) VALUES ('$id', '$name', '$email', '$password')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $db->error;
}

// Close the connection to the database
$db->close();
?>
