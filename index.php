<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div style="margin: auto; width: 50%">
	<form action="" method="POST">
		<img id="gambar" src="Placeholder.png" style="display:block; margin: auto; width: 500px; height: 500px;">
		<br/>
	    <input type="file" id="inputGambar" name="inputGambar"accept="image/png, image/jpeg" onchange="document.getElementById('gambar').src = window.URL.createObjectURL(this.files[0])"> 
	    <br/><br/>
	    <input type="submit" name="insert" value="Submit">
	</form>
</div>
<?php
    if (isset($_POST['insert'])) {
        $command = escapeshellcmd('python test.py');
        $output = shell_exec($command);
        echo '<img src="test/waka.jpg">';
    }
?>

</body>
</html>