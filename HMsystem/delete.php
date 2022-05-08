<?php
$servername = "localhost";
$password = "root"
$dbname = "HMSystem";

// Create connection
$conn = mysqli_connect($surename, $address, $dateofbirth, $, $phonenumber, $gender, $language, $emailid);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM staff details WHERE s.no=3";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
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
    <div class="main_content">
    <div class="hero"></div>
     <div class="wrapper">
         <div class="sidebar">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-bed"></i>Patient</a></li>
                    <li><a href="#"><i class="fa-solid fa-house-chimney-medical"></i>OPD</a></li>
                    <li><a href="#"><i class="fa-solid fa-calendar-check"></i>Appointment</a></li>
                    <li><a href="#"><i class="fa-solid fa-stethoscope"></i>Doctors</a></li>
                    <li><a href="#"><i class="fa-solid fa-capsules"></i>Medicine</a></li>
                    <li><a href="#"><i class="fa-solid fa-credit-card"></i>Payment</a></li>
                    <li><a href="#"><i class="fa-solid fa-clipboard-user"></i>Staffs</a></li>
                    <li><a href="#"><i class="fa-solid fa-person-military-rifle"></i>Security</a></li>
                    <li><a href="#"><i class="fa-solid fa-gears"></i>Settings</a></li>
                </ul> 
      </div>

      <div class="main_content">     

        <div class="row">
            <div class="input-group">
                <input type="text" id="name" required>
                <label for="name">Name / Surname</label>  
            </div>
    
            <div class="input-group">
                <input type="text" id="address" required>
                <label for="address">Address</label>  
            </div>    
        </div>

            <div class="input-group">
                <input type="text" id="image" required>
                <label for="image">Staff Image</label>  
            </div>
    
    
            <div class="input-group">
                <input type="date" id="dateofbirth" required>
                <label for="dateofbirth">Birthday</label>  
            </div>
    
    
            <div class="input-group">
                <input type="text" id="number" required>
                <label for="text">Phone Number</label>  
            </div>
    
            <div class="input-group">
                <input type="text" id="language" required>
                <label for="language">Language</label>  
            </div>
         </div>

        <div class="input-group">
            <input type="text" id="gender" required>
            <label for="gender">Gender</label>  
        </div>

        <div class="input-group">
            <input type="text" id="email" required>
            <label for="email">Email Address</label>  
        </div>
      <div>
</div>
</div>

</div>
             
 </body>
  </html>