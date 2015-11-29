// Values received via ajax
<?php
$title = $_GET['title'];
$start = $_GET['start'];
$end = $_GET['end'];
$url = $_GET['url'];
// connection to the database
try {
$bdd = new PDO('mysql:host=localhost;dbname=Schedy',
     $user, $password);
} catch(Exception $e) {
exit('Unable to connect to database.');
}

// insert the records
$sql = "INSERT INTO events (title, start, end, url) VALUES (:title, :start, 
:end, :url)";
$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':start'=>$start, ':end'=>$end,  
':url'=>$url));
?>