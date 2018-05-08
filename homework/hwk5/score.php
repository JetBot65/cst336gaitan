<?php
include 'database.php';


$score = $_POST['score'];


$sql = "SELECT lastScore,attempts FROM quiz_attemps WHERE score = :score;
        INSERT INTO quiz_attemps(email, lastScore) VALUES(:score) ON DUPLICATE KEY
        UPDATE lastScore = :score;";

$stmt = $conn -> prepare($sql);
$stmt ->execute(['email' => $email, 'score' => $score]);
$record = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($record)) {
    $record['attempts'] = $record['attempts'] + 1;
}
else {
    $record = [
        'lastScore' => null,
        'attempts' => 1,        
    ];
}


echo json_encode($record);

?>