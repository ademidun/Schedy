<!--We will use the code to connect to a MySql database
with PHP and generate a json string for Fullcalendar.-->

<?php
// List of events
 $json = array();

 // Query that retrieves events
 $request = "SELECT * FROM events ORDER BY id DESC";

 // connection to the database
 try {
    $servername = "localhost";
    $user = "user1";
    $password = ""; 
    $dbname = "Schedy";
    // $conn = new mysqli($servername, $user, $password, $dbname);
    $bdd = new PDO('mysql:host=localhost;dbname=Schedy',
     $user, $password);
 } 
 catch(PDOException $e) {
  echo $e->getMessage();
 }
 // Execute the query
 $result = $bdd->query($request); 
echo "json:<br>";
var_dump($json);
echo "request:<br>";
var_dump($request);
echo "bdd:<br>";
var_dump($bdd);
echo "result:<br>";
var_dump($result);
    

 // sending the encoded result to success page
 echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));
?>