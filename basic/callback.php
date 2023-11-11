<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback</title>
</head>
<body>
<?php 
function mycb($item) {
    return strlen($item);
}

$random_array = ['kucing','macan','singa','kuda'];
$lengths = array_map("mycb", $random_array);
print_r($lengths);

?>


</body>
</html>