<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Links</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel='stylesheet' href='stylesheet.css'>
</head>

<?php
    $data1 = 'user.php?'.http_build_query(
        array(
        'name-input' => $_GET['name-input'],
        'surname-input' => $_GET['surname-input'],
        'phone-input' => $_GET['phone-input'],
        'email-input' => $_GET['email-input']
        )
    );

    $data2 = 'user1.php?'.http_build_query(
        array(
        'univer-input' => $_GET['univer-input'],
        'fac-input' => $_GET['fac-input'],
        'course-input' => $_GET['course-input']
        )
    );

    
    $data3 = 'user2.php?'.http_build_query(
        array(
        'hobby-input' => $_GET['hobby-input']
        )
    );
?>

<h5><a href=<?php echo ($data1) ?>>Contact information</a></h5>
<h5><a href=<?php echo ($data2) ?>>Info about university</a></h5>
<h5><a href=<?php echo ($data3) ?>>Your hobby</a></h5>

</html>