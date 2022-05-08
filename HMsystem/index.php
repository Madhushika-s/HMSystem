<?php
session_start();
?>
<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=brave">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Management System</title>
    <script src="https://kit.fontawesome.com/52f4327441.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
    
<body>
<?php
$servername = "localhost";
$password = "root"
$dbname = "HMSystem";

// Create connection
$conn = new mysqli($surename, $address, $dateofbirth, $, $phonenumber, $gender, $language, $emailid);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Create staff (surename, address, dateofbirth, phonenumber, gender, language, emailid)
VALUES ('Anjali Ramanadhan', 'No 25, Main Street, New velly Road', '1994010.25', '9845235987615', 'English', 'Female', 'AnjaliRamanadhan23@gmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>

<!-- end of html -->