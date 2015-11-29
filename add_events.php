// Values received via ajax
<?php
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$url = $_POST['url'];
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