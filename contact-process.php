<?php
// Database connection variables
$host = 'localhost';
$user = 'root';  // Change this if your MySQL username is different
$pass = '';      // Add your MySQL password if needed
$db_name = 'contact_form_db';  // Use the name of the database you created

// Create connection
$conn = new mysqli($host, $user, $pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = isset($_POST['phone']) ? $conn->real_escape_string($_POST['phone']) : null;
    $company = isset($_POST['company']) ? $conn->real_escape_string($_POST['company']) : null;
    $sector = isset($_POST['sector']) ? $conn->real_escape_string($_POST['sector']) : null;
    $date = isset($_POST['date']) ? $conn->real_escape_string($_POST['date']) : null;
    $message = $conn->real_escape_string($_POST['message']);

    // SQL query to insert data into the contacts table
    $sql = "INSERT INTO contacts (name, email, phone, company, sector, consultation_date, message)
            VALUES ('$name', '$email', '$phone', '$company', '$sector', '$date', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
