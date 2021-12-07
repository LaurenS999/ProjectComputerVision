<?php
session_start();
    if (isset($_POST['insert'])) {
        
        $lampiran = basename("upload.jpg");

        move_uploaded_file($_FILES['inputGambar']['tmp_name'], $lampiran);

        $command = escapeshellcmd('python Detect.py');
        $output = shell_exec($command);

        $_SESSION["output"] = "ada";

        header("Location:index.php");
        //"document.getElementById('gambar').src = window.URL.createObjectURL(this.files[0])"

        //echo '<img src="savedImage.jpg" style="display:block; margin: auto; width: 500px; height: 500px;">';
    }
?>