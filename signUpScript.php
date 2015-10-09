<!DOCTYPE html>
<html>
<head>
    </head>
<body>
        <!-- Header Server include to be used across all pages -->
            <?php $page_title="Atila- Sign Up";
            include("atilaheader.php"); ?>

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

$conn = new mysqli($servername, $username, $password, "Schedy");

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
$utype = $_POST["usertype"];
}
else 
echo "<br> Submit failed!<br>";
if ($utype=='student'){
  $sql = "INSERT INTO Student (firstname, lastname, email, phone, password, usertype)
  VALUES ('$fname', '$lname', '$email2', '$phone2', '$password2', '$utype')";

  if ($conn->query($sql) === TRUE) {
      echo "New Student created successfully<br>";
  } 
  else {
      $fail1=1;
      echo "Error: " . $sql . "<br>" . $conn->error;
      
  }

    }
    else if ($utype=='staff'){
  $sql = "INSERT INTO Staff (firstname, lastname, email, phone, password, usertype)
  VALUES ('$fname', '$lname', '$email2', '$phone2', '$password2', '$utype')";

  if ($conn->query($sql) === TRUE) {
      echo "New Staff Member created successfully<br>";
  } 
  else {
      $fail1=1;
      echo "Error: " . $sql . "<br>" . $conn->error;
      
  }

    }

?>
   <div id="content">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-5">
                <a href="schedy.html"> <button id="signup" type="button" class="btn btn-primary"> Sign In</button> </a>
                </div>
            </div>
     </div>

                </div>
  </body>

</html>

