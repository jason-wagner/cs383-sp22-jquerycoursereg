<?php

// $conn created in this file is a PDO object
require_once 'mysql.php';

$query = $conn->prepare("SELECT DISTINCT sec FROM master_schedule WHERE sub = :sub AND num = :num ORDER BY sec");
$query->execute(['sub' => $_POST['sub'], 'num' => $_POST['num']]);

$sections = array_column($query->fetchAll(), 'sec');

echo json_encode($sections);
