<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Links</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel='stylesheet' href='stylesheet.css'>
</head>

<?php
    $univer = $_GET['univer-input'];
    $fac = $_GET['fac-input'];
    $course = $_GET['course-input'];
?>

<div class="result-container">
    <label><span class="small-title">University: </span>  <?php echo ($univer) ?></label>
    <label><span class="small-title">Faculty: </span>  <?php echo ($fac) ?></label>
    <label><span class="small-title">Course number:</span>  <?php echo ($course) ?></label>
</div>
</html>