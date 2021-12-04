<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
    <!-- <input type="file" id="inputGambar" name="inputGambar"accept="image/png, image/jpeg"> -->
    
    <input type="submit" name="insert" value="Submit">
</form>
<?php
    if (isset($_POST['insert'])) {
        $command = escapeshellcmd('python test.py');
        $output = shell_exec($command);
        echo '<img src="test/waka.jpg">';
    }
?>

</body>
</html>