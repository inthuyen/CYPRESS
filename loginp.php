<!DOCTYPE html>

<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYPRESS - Login </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <header>
    <div class="flex-container" style="justify-content:space-between;">
       <h3>CYPRESS</h3>
       <h3>City of Toronto</h3>
    </div>
    <hr>
  </header>
    
    <div class="row">
        <div class="col-12 text-center">
             <h1 class="mainHeads">CYPRESS Login</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-xs">
            <form action="" method="post" name="login_form">
                <div class="form-group">
                    <label for="text">Username:</label>
                    <input type="text" class="form-control" id="user" name="user" value="<?php if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; } ?>" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" value="<?php if(isset($_COOKIE["pwd"])) { echo $_COOKIE["pwd"]; } ?>" required>
                </div>
                <div class="form-group">
                    <label for="remember">Remember me</label>
                    <input type="checkbox" class="form-control" id="remember" name="remember">
                </div>
                <button type="submit" class="btn btn-danger" name="login">Login</button>
                <?php include("functions/login.php"); ?>
            </form> 
        </div>
    </div>
</body>
</html>
