<?php

/* Values received via ajax */
$id = $_GET['id'];
$title = $_GET['title'];
$start = $_GET['start'];
$end = $_GET['end'];

// connection to the database
try {
$bdd= new PDO('mysql:host=localhost;dbname=Schedy',
     $user, $password);
 } catch(Exception $e) {
exit('Unable to connect to database.');
}
 // update the records
$sql = "UPDATE events SET title=?, start=?, end=? WHERE id=?";
$q = $bdd->prepare($sql);
$q->execute(array($title,$start,$end,$id));
?>