<!DOCTYPE html>
<html>
<head>
    <title> Atila Inc.</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link rel ="stylesheet" type ="text/css" href="Atila Style.css">
    </head>

<body>
        <div id="header">
            <h1> Atila Inc.</h1>
            <p id="date"></p> <!-- This is for the home page -->
            <ul class="nav nav-pills nav-justified">
              <li><a href="index.html">Home</a></li>
              <li class="dropdown" ><a class="dropdown-toggle" 
              data-toggle="dropdown" href="Atila Tech 1.html">Technology <span class ="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="TechHome.html">Web Design</a></li>
                    <li><a href="atila tech 1.html">App Dev</a></li>
                    <li><a href="#">Investments</a></li> 
                    </ul>
              </li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Finance</a></li>
              <li><a href="atila contact us.html">Contact Us</a></li>
            </ul>
    </div>

      <?php
$servername = "localhost";
$username = "user1";
$password = "";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Create database
// $sql = "CREATE DATABASE AtilaDB";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// }
//  else {
//     echo "Error creating database: " . $conn->error;
// }

$conn = new mysqli($servername, $username, $password, "AtilaDB");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


// //Create Table
// $sql = "CREATE TABLE UserInfo
// (
// id INT AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// phonenumber VARCHAR(30) NOT NULL,
// password VARCHAR(30) NOT NULL,
// -- reg_date date_time_set(); find code to record account creation date
// mod_date TIMESTAMP
// )";
// mysql_query($sql);

// if($conn->query($sql)==TRUE){
//   echo "Table created succesfully.";
// }
// else{
//   echo "Error creating table" . $conn->error;
// }

// //Insert info VALUES ($_POST[firstname1], $_POST[lastname1], $_POST[email1],$_POST[phonenumber1], $_POST[password1])"
if (isset($_POST)) {
echo "<br> Submit worked!<br> ";
$fname = $_POST['firstname'];
$lname = $_POST["lastname1"];
$email2 = $_POST["email1"];
$phone2 = $_POST["phone1"];
$password2 = $_POST["password1"];
}
else 
echo "<br> Submit failed!<br>";
$sql = "INSERT INTO UserInfo (firstname, lastname, email, phonenumber, password)
VALUES ('$fname', '$lname', '$email2', '$phone2', '$password2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
  </body>

</html>

