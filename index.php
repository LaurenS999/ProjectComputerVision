<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white">Klasifikasi Daun</a></li>
        </ul>
      </div>
    </div>
  </header> 
  <div class="b-example-divider"></div>
  <br/>

  <div  style="margin: auto; width: 50%">
        <?php 
        if (isset($_SESSION["output"])) {
            echo '<img id="gambar" src="savedImage.jpg" style="display:block; margin: auto; width: 500px; height: 500px;">';  
            unset($_SESSION["output"]);
        } else {
            echo '<img id="gambar" src="Placeholder.png" style="display:block; margin: auto; width: 500px; height: 500px;">';
        }
        ?>
	<form action="serv.php" method="POST" enctype="multipart/form-data">
		<br/>
	    <input type="file" id="inputGambar" name="inputGambar" accept="image/png, image/jpeg" style="margin: auto; display: block;" onchange="document.getElementById('gambar').src = window.URL.createObjectURL(this.files[0])"> 
	    <br/><br/>
	    <input type="submit" name="insert" value="Submit" class="btn btn-primary" style="margin: auto; display: block;">
	</form>
</div>

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="text-muted"></span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>
</div>

</body>
</html>