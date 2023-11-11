<?php 
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = test_input($_POST['name']);
        // cek apakah name hanya mengandung huruf dan spasi
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        $email = test_input($_POST['email']);
        // cek apakah format email yang dimasukka sudah benar
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Invalid Format Email';
        }
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
        // cek apakah format url sudah benar
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = 'Invalid URL';
        }
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
    <title>Learn PHP</title>
</head>
<body>
    <?php echo "<h1>Hari ini tanggal " . date("d-m-y") . "</h1>"; ?>
    <?php echo "<h2> Jam". date("h:i:sa") ."</h2>"; ?>
    <div><?php include 'menu.php'; ?></div>
    <h1>My Favorite Car is <?php include 'vars.php'; echo $car . ' and the color is ' . $color ?></h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Nama: <input type="text" name="name" value="<?php echo $name;?>"> <br>
        <span class="error">* <?php echo $nameErr;?></span>
        <br> <br> 
        Email: <input type="text" name="email" value="<?php echo $email;?>"> <br>
        <span class="error">* <?php echo $emailErr; ?></span>
        <br> <br> 
        Website: <input type="text" name="website" value="<?php echo $website;?>"> <br>
        <span class="error">* <?php echo $websiteErr; ?></span>
        <br> <br> 
        Comment: <textarea name="comment" cols="30" rows="10" <?php echo $comment;?>></textarea> <br>
        <span class="error">* <?php echo $commentErr; ?></span>
        <br> <br>
        Gender: 
        <input type="radio" name="gender" value="female" <?php if(isset($gender) && $gender === 'female') echo "checked";?>>Female
        <input type="radio" name="gender" value="male" <?php if(isset($gender) && $gender === 'male') echo 'checked';?>>Male
        <input type="radio" name="gender" value="other" <?php if(isset($gender) && $gender === 'other') echo 'checked';?>>Other <b></b>
        <span class="error">* <?php echo $genderErr; ?></span>
        <br> <br>
        <input type="submit">
    </form>

<h3>ini teks dari fungsi read file PHP</h3>
<?php 
$myfile = fopen("testfile.txt", "a") or die("Unable to open the file!");
$txt = "Akmal \n";
fwrite($myfile, $txt);
$txt = "Ganteng";
fwrite($myfile, $txt);
fclose($myfile);

?>
    
<?php include('footer.php') ?>
</body>
</html>