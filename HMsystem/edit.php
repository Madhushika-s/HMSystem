<?php
$servername = "localhost";
$password = "root"
$dbname = "HMSystem";

// Create connection
$conn = new mysqli($S.No, $doctorname, $department, $emailid, $mobilenumber, $status, $view);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT s.no, DoctorName, department, emailid, mobilenumber, status, view FROM Staff";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>S.NO</th><th>Doctor Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["S.No"]."</td><td>".$row["surname"]." <td><tr>".$row["department"]."</td></tr>". ;
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
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
            <div class="header">Edit Staff Title</div>  
        </div>
        </div>
        <div class="hero">
    <table>
          <tr>
            <th>S.No</th>
            <th>Doctor Name</th>
            <th>Department</th>
            <th>Email ID</th>
            <th>Mobile No</th>
            <th>Status</th>
            <th>View</th>
        </tr>
 
          <tr>
            <td>1</td>
            <td>Robert Anderson</td>
            <td>Sergery</td>
            <td>Robert12@gmail.com</td>
            <td>0774595221</td>
            <td>Active</td>
            <td>
                <button><i class="fa-solid fa-pen-to-square"></i></button>
                <button><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>


        
          <tr>
            <td>2</td>
            <td>Kathryn Barlow</td>
            <td>Cardiology</td>
            <td>Kathryn1@gmail.com</td>
            <td>0782535297</td>
            <td>Active</td>
            <td>
                <button><i class="fa-solid fa-pen-to-square"></i></button>
                <button><i class="fa-solid fa-trash"></i></button>
            </td>
          
          <tr>
            <td>3</td>
            <td>Julie Cronk</td>
            <td>Anaesthetics</td>
            <td>Julie5@gmail.com</td>
            <td>0714598735</td>
            <td>Inactive</td>
            <td>
                <button><i class="fa-solid fa-pen-to-square"></i></button>
                <button><i class="fa-solid fa-trash"></i></button>
            </td>
            </tr>
            
             <tr>
            <td>4</td>
            <td>Noel Hauge</td>
            <td>Cardiology</td>
            <td>Noel9@gmail.com</td>
            <td>0752144698</td>
            <td>Active</td>
            <td>
                <button><i class="fa-solid fa-pen-to-square"></i></button>
                <button><i class="fa-solid fa-trash"></i></button>
            </td>
            </tr>
            
             <tr>
            <td>5</td>
            <td>Joshep Shaffer</td>
            <td>Neurologists</td>
            <td>Joshep88@gmail.com</td>
            <td>0768958795</td>
            <td>Inactive</td>
            <td>
                <button><i class="fa-solid fa-pen-to-square"></i></button>
                <button><i class="fa-solid fa-trash"></i></button>
            </td>
            </tr>
            
             <tr>
            <td>6</td>
            <td>Tanya Dev</td>
            <td>Psychiatrists</td>
            <td>Tanya@gmail.com</td>
            <td>0765988254</td>
            <td>Active</td>
            <td>
                <button><i class="fa-solid fa-pen-to-square"></i></button>
                <button><i class="fa-solid fa-trash"></i></button>
            </td>
            </tr>
    </table>

    <div class="row4">

        <div class="button4">
            <button2><a href="create account" class="btn4">Create Account<a></button2>
        </div>

        <div class="button5">
            <button1><a href="save" class="btn5">Save<a></button1>   
        </div>

    </body>
</html>