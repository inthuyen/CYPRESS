<!DOCTYPE html>

<?php
session_start();
//include("functions/header.php");
// if not logged in, ask for it
if(!isset($_COOKIE["user"])){
    echo "<script> alert('Not logged in. Redirecting...') </script>";
	header("location: loginp.php");
}
?>

<html lang="en">
<head>
  <title>CYPRESS - Edit Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<script>
// check if input values are good and legal
    function validate(formName) {
        alert(formName.first_name.value)
        if(!/^[a-zA-Z]+$/.test(formName.first_name.value)) {
            alert("Invalid first name");
            return false;
        }
        if(!/^[a-zA-Z]+$/.test(formName.last_name.value)) {
            alert("Invalid last name");
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

<?php
$username = $_COOKIE["user"];
$usernames = file("functions/usernames.txt", FILE_IGNORE_NEW_LINES);
$fnames = file("functions/fnames.txt", FILE_IGNORE_NEW_LINES);
$lnames = file("functions/lnames.txt", FILE_IGNORE_NEW_LINES);
$found = false;
// finding the index number, to be used for all info
for ($userindx = 0; $userindx < count($usernames); $userindx++) {
    if ($usernames[$userindx] == $username) {
        $found = true;
        break;
    }
}
// fill pre existing info in editable fields
if ($found) {
    printf("  
    <div class='container-fluid'>
        <h2 class='mainHeads'>$_COOKIE[user]</h2>
        <h2>Edit Information</h2>
        <form action='functions/update.php' method='post' name='update' onsubmit='return validate(update)'>
            <div class='form-group'>
                <label for='first_name'>First Name:</label>
                <input type='text' class='form-control' id='first_name' value='%s' name='first_name' required>
            </div>
            <div class='form-group'>
                <label for='last_name'>Last Name:</label>
                <input type='text' class='form-control' id='last_name' value='%s' name='last_name' required>
            </div>
            <button type='submit' class='btn btn-info' name='update'>Update</button>
        </form>
    </div>
    ",$fnames[$userindx], $lnames[$userindx]);
 }
?>

</body>
</html>
