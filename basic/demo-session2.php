<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- tampilkan session dari halaman sebelumnya -->
<?php 
    echo "Favorite color is :" . $_SESSION['favcolor'] . "and favorit animal is " . $_SESSION['favanimal'] . "</br>";

    $_SESSION['favcolor'] = 'red';
 

    print_r($_SESSION);
?>
</body>
</html>