<!-- $con = mysqli_connect('localhost', 'root', '', 'root'); -->


<?php
$servername = "localhost";
$username = "chatbot";
$password = "chatbot123";
$dbname = "chatbotter";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected to chattbotter db.";
?>