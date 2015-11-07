<?php
echo 1;
require '../vendor/autoload.php';
 echo 2;
$app = new \Slim\Slim(array(
    'templates.path' => '../templates'
));
$name = "Tomiwa";
echo 3;
$app->get('', function () use ($app) {
    // Fetch and display events as JSON
    // Get the start and end timestamps from request query parameters
    $startTimestamp = $app->request->get('start');
    $endTimestamp = $app->request->get('end');

    try {
        // Open database connection
        $conn = new mysqli('localhost', 'user1', '', 'Schedy');

        // Query database for events in range
        $stmt = $conn->prepare('SELECT * FROM events WHERE start >= FROM_UNIXTIME(:start) AND end < FROM_UNIXTIME(:end) ORDER BY start ASC');
        $stmt->bindParam(':start', $startTimestamp, \PDO::PARAM_INT);
        $stmt->bindParam(':end', $endTimestamp, \PDO::PARAM_INT);
        $stmt->execute();

        // Fetch query results 
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        // Return query results as JSON
        echo json_encode($results);
    } catch (\PDOException $e) {
        $app->halt(500, $e->getMessage());
   }
}); 

$app->get('/', function () use ($app) {
    $app->render('calendar.html');
});

$app->run();

echo "Hello, ". $name;