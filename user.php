<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Links</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel='stylesheet' href='stylesheet.css'>
</head>

<?php
    $name = $_GET['name-input'];
    $surname = $_GET['surname-input'];
    $phone = $_GET['phone-input'];
    $email = $_GET['email-input'];
?>

<div class="result-container">
    <label><span class="small-title">Name: </span>  <?php echo ($name) ?></label>
    <label><span class="small-title">Surname: </span>  <?php echo ($surname) ?></label>
    <label><span class="small-title">Phone: </span>  <?php echo ($phone) ?></label>
    <label><span class="small-title">Email: </span>  <?php echo ($email) ?></label>
</div>
</html>