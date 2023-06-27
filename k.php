<?php
  include("database.php");
  $id
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="registrationForm2" method="post" action="addteam.php">
        <div class="form-group">
              <input type="text" class="form-control" id="ename" name="name" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="eemail" name="email" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <input type="password"  class="form-control" id="epassword" name="pass" placeholder="Enter a password" required>
              </div>
              <div class="form-group">
                <input type="password"  class="form-control" id="erpassword" placeholder="Re-enter password" required>
              </div>
              <div class="form-group">
                <input type="number"  class="form-control" name = "contact" id="enum" placeholder="Enter contact number" required>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="im" id="eimageUpload" accept="image/*" required>
                  <label class="custom-file-label" for="imageUpload">Choose file</label>
                </div>
              </div>
              <button type="submit" id="myButton1" name = "btn"  class="btn btn-primary custom-button">Register</button>
        </form>
</body>
</html>