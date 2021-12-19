<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYPRESS - Registration </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script>
    function validate(form) {
            if (!validateName(form.f_name.value) || !validateName(l_name.value)){
                alert("Illegal characters in first or last name.")
                return false;
            }

            if((form.new_user.value).length < 5){
                 alert("Username must be at least 5 characters long.");
                return false;
            }
            
            if((form.new_pwd_conf.value).length < 5){
                 alert("Password must be at least 5 characters long.");
                return false;
            }
            
            if (form.new_pwd_conf.value.localeCompare(form.new_pwd.value) != 0) {
                alert("Passwords do not match.");
                return false;
            }

            return true;
        }

        function validateName(name){
            var filter = /^[A-Za-z]+$/
            if (filter.test(name)){
                return true;
            }
            else{
                return false;
            }
        }
</script>

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
             <h1 class="mainHeads">CYPRESS Registration</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-xs">
        <form action="" method="post" name="register_form" onsubmit="return validate(register_form)">
            <div class="form-group">
                <label for="new_user">Username:</label>
                <input type="text" class="form-control" id="new_user" name="new_user" required>
            </div>
            <div class="form-group">
                <label for="f_name">First Name:</label>
                <input type="text" class="form-control" id="f_name" name="f_name" required>
            </div>
            <div class="form-group">
                <label for="l_name">Last Name:</label>
                <input type="text" class="form-control" id="l_name" name="l_name" required>
            </div>
            <div class="form-group">
                <label for="new_pwd">Password:</label>
                <input type="password" class="form-control" id="new_pwd" name="new_pwd" required>
            </div>
            <div class="form-group">
                <label for="new_pwd_conf">Confirm Password:</label>
                <input type="password" class="form-control" id="new_pwd_conf" name="new_pwd_conf" required>
            </div>
            <button type="submit" class="btn btn-danger" name="register">Register</button>
            <?php include("functions/create_account.php"); ?>
        </form> 
        </div>
    </div>
</body>
</html>
