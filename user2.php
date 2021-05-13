<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Links</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel='stylesheet' href='stylesheet.css'>
</head>

<?php
    $hobby = $_GET['hobby-input'];
?>

<div class="result-container">
    <span class="small-title">Hobby: </span> 
    <label> <?php echo ($hobby) ?></label>
</div>
</html>