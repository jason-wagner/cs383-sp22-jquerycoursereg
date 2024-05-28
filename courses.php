<?php

// $conn created in this file is a PDO object
require_once 'mysql.php';

$query = $conn->query("SELECT DISTINCT sub FROM master_schedule ORDER BY sub");

?>
<!doctype html>
<html>
    <head>
        <title>Courses</title>
    </head>
    <body>

    <select id="sub">
    <option></option>
    <?php while($subOption = $query->fetch()): ?>
    <option value="<?= $subOption['sub'] ?>"><?= $subOption['sub'] ?></option>
    <?php endwhile; ?>
    </select>

    <select id="num" disabled>
    </select>

    <select id="sec" disabled>
    </select>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="courses.js"></script>
    </body>
</html>
