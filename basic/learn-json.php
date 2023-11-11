<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn JSON</title>
</head>
<body>
<?php 

// Encode JSON
$age = array("peter" => 35, "ben" => 37, "joe" => 43);

$convertJSON = json_encode($age);
// echo $convertJSON;
// echo json_decode($convertJSON);

// echo "</br></br>";
// Decode JSON
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));
echo "</br>";
var_dump(json_decode($jsonobj, true));

echo "</br>";
//  access PHP Object the decoded value
$obj = json_decode($jsonobj);
echo $obj->Peter;
echo $obj->Ben;

echo "</br>";
// access PHP Associative Array
$arr = json_decode($jsonobj, true);
echo $arr["Ben"];

// Loop PHP object
$decode = json_decode($jsonobj);
foreach($decode as $key => $value) {
    echo $key . " => " . $value . "</br>";
    
}

?>
</body>
</html>