<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="carinfo.css">
   </head>
<body>
  <?php if(isset($_GET['error'])): ?>
      <p><?php echo $_GET['error'] ?></p>
  <?php endif ?>
  <div class="wrapper">
    <h2>Car information</h2>
    <form action="upload.php" method ="POST" enctype = "multipart/form-data">
       <div class="input-box">
        <input type="text" name = "name"placeholder="Brand name" required>
      </div>
     <div class="input-box">
        <input type="text" name="age" placeholder="Years old" required>
      </div>
      <div class="input-box">
        <input type="password" name="fuel" placeholder="Fuel type" required>
      </div>
      <div class="input-box">
        <input type="password" name="kms" placeholder="km driven" required>
      </div>
      <div class="input-box">
        <input type="password" name="no_of_owners" placeholder="Number of owners" required>
      </div>
      <div class="input-box">
        <input type="password" name="price" placeholder="Set a price" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I thereby conclude all values are true</h3>
      </div>
      <div class="input-box">
        <input type="file" id="myFile" name="my_image">
      </div>

      <div class="input-box button">
        <input type="submit" name = 'submit' value="submit">
      </div>

    </form>
  </div>
</body>
</html>