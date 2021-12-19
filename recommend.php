<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYPRESS - Recommend</title>
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
             <h1 class="mainHeads">CYPRESS Recommend</h1>
        </div>
    </div>
    
    <div class="container">
        <h6>
            You are currently at the Cypress recommend page. To recommend CYPRESS to a friend, please enter their email address and a personal message.
        </h6>
    </div>
    
    <div class="container">
        <div class="col-xs">
        <form action="" method="post" name="login_form">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="inputEmail" required>
            </div>
            
            <div class="form-group">
                <label for="text">Personal Message:</label>
                <input type="text" class="form-control" id="personalMessage">
                <small id="messageHelp" class="form-text text-muted">A message is not required.</small>
            </div>
  
            <div class="flex-container" style="justify-content:center">
                <button type="submit" class="btn btn-danger"> <a href="portal.html">Submit</a> </button>
                <button type="submit" class="btn btn-danger"> <a href="portal.html">Cancel</a> </button>
            </div>
            
        </form> 
        </div>
    </div>

</body>
</html>
