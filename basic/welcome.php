<?php 
//  bikin variabel dan men set nya menjadi null
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = test_input($_POST['name']);
    }
    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        $email = test_input($_POST['email']);
    }
    if(empty($_POST['gender'])) {
        $genderErr = 'Gender is required';
    } else {
        $gender = test_input($_POST['gender']);
    }
    if(empty($_POST['comment'])) {
        $commentErr = 'comment is required';
    } else {
        $comment = test_input($_POST['comment']);
    }
    if(empty($_POST['website'])) {
        $websiteErr = 'Website is required';
    } else {
        $website = test_input($_POST['website']);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing</title>
</head>
<body>
    Name : <?php $_POST['name'] ?>
</body>
</html>