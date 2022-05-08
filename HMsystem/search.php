<?php
$servername = "localhost";
$password = "root"
$dbname = "HMSystem";

// Search connection
$conn = mysqli_connect("localhost","root","","HMSystem");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to search table
$sql = "CREATE TABLE search staff (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
surname VARCHAR(30) NOT NULL,
address VARCHAR(30) NOT NULL,
email VARCHAR(50),
gender VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table Search staff created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
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
            <div class="header">Search Staff</div>  
        </div>
        </div>

        <table>
            <div class="search-box">
                <input class="search-text" type="text" name="" paceholder="Type of search">
                <a class ="search-btn" href="#"></a>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

            <tr>
              <th>S.No</th>
              <th>Name</th>
              <th>Date of Birth</th>
              <th>Date of Appointment</th>
              <th>Role</th>
              <th>Status</th>
              <th>Mobile</th>
          </tr>
   
            <tr>
              <td>1</td>
              <td>Joshep Shaffer</td>
              <td>22/08/1968</td>
              <td>25-Jun-2020</td>
              <td>Neurologists</td>
              <td>Active</td>
              <td>0768958795</td>
            </tr>
  

            <tr>
                <td>2</td>
                <td>Anjali Ramanadhan</td>
                <td>22/01/1980</td>
                <td>1-Apr-2020</td>
                <td>Nurse</td>
                <td>Active</td>
                <td>0745895635</td>
            </tr>

            
            <tr>
                <td>3</td>
                <td>Megha Mirashi</td>
                <td>16/10/1990</td>
                <td>1-Jan-2012</td>
                <td>Physician</td>
                <td>Active</td>
                <td>0745898887</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Subbhangi Ramboli</td>
                <td>04/10/1963</td>
                <td>6-Oct-2010</td>
                <td>Gynasecologyst</td>
                <td>Inactive</td> 
                <td>7062525321</td>
            </tr>

            <tr>
                <td>4</td>
                <td>Sonali Lambe</td>
                <td>01/08/1994</td>
                <td>18-Mar-2011</td>
                <td>Register</td>
                <td>Active</td> 
                <td>0764896354</td>
            </tr>

            <tr>
                <td>5</td>
                <td>Priyanka harma</td>
                <td>11/12/1981</td>
                <td>25-Jan-2016</td>
                <td>Register</td>
                <td>Inactive</td> 
                <td>0715484631</td>
            </tr>

            <tr>
                <td>6</td>
                <td>Priti Mali</td>
                <td>05/06/1966</td>
                <td>15-Mar-2013</td>
                <td>Driver</td>
                <td>Intive</td> 
                <td>07743214957</td>
            </tr>

            <tr>
                <td>7</td>
                <td>Kathryn Barlow</td>
                <td>10/09/1982</td>
                <td>1-Jan-2016</td>
                <td>Cardiology</td>
                <td>Active</td> 
                <td>0752144598</td>
            </tr>

            <tr>
                <td>8</td>
                <td>Jithendra Bhargaje</td>
                <td>24/01/1986</td>
                <td>16-Apr-2017</td>
                <td>Driver</td>
                <td>Active</td> 
                <td>0755989598</td>
            </tr>

            <tr>
                <td>9</td>
                <td>Disha Vyas</td>
                <td>25/06/1975</td>
                <td>8-Feb-2013</td>
                <td>Driver</td>
                <td>Active</td> 
                <td>0754218931</td>
            </tr>
      </table>
  
      </body>
      </html>