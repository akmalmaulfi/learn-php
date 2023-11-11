<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
</head>
<body>

<?php 
$str = "<h1>Hello World</h1>";
// sanitize string
$filter = filter_var($str, FILTER_SANITIZE_STRING);
echo $filter;

// validate an integer
$int = 2;
if (!filter_var($int, FILTER_VALIDATE_INT) ===  false || filter_var($int, FILTER_VALIDATE_INT) === 0) {
    echo "Integer is valid";
} else {
    echo "integer is invalid";
}

echo "</br>";

// validate an ip address
$ip  = "127.0.0.1";
if(!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo "$ip is a valid IP Address";
} else {
    echo "$IP is not a valid IP Address";
}

echo "</br>";
// validate email address 
$email = "akmalmaulfi@gmail.com";

// remove all illegal character from email
$sanitizeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

// validate email
if (!filter_var($sanitizeEmail, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email");
} else {
    echo("$email is not a valid email address");
}
echo "</br>";
// validate an integer within a range
$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max-range" => $max ))) === false) {
    echo ("variable is no within the legal range");
} else {
    echo "variable is within the legal range";
}

?>

</body>
</html>