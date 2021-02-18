<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - upfile.php</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>AAJ KA DARSHAN</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">Upload Image</button>
        </form>
		<form action="index.php" method="post" enctype="multipart/form-data" >
		  <h3>EVENT IMAGE</h3>
          <input type="file" name="myfile"> <br>
          <button class="btn" type="submit" name="save">Upload Image</button>
        </form>
		<form action="index.php" method="post" enctype="multipart/form-data" >
		  <h3>EXPENSESES</h3>
          <input type="file" name="myfile"> <br>
          <button class="btn" type="submit" name="save">Upload File</button>
        </form>
      </div>
    </div>
  </body>
</html>
<!-- partial -->
  
</body>
</html>
