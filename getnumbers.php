<?php

// $conn created in this file is a PDO object
require_once 'mysql.php';

$query = $conn->prepare("SELECT DISTINCT num FROM master_schedule WHERE sub = :sub ORDER BY num");
$query->execute(['sub' => $_POST['sub']]);

$numbers = array_column($query->fetchAll(), 'num');

echo json_encode($numbers);
