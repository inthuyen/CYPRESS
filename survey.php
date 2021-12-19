<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYPRESS - Survey</title>
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
             <h1 class="mainHeads">CYPRESS Survey</h1>
        </div>
    </div>
    
    <div class="container">
        <h6>
            You are currently at the Cypress survey page. Please rate your experience and leave feedback below.
        </h6>
    </div>
    
    <div class="container">
        <div class="col-xs">
        <form action="" method="post" name="login_form">
            <label for="customRange2">Were you satisfied with the service? Use the slider to leave your rating.</label>
            <input type="range" class="custom-range" min="0" max="5" id="customRange2">
            
            <div class="form-group">
                <label for="text">Feedback:</label>
                <input type="text" class="form-control" id="Feedback">
                <small id="messageHelp" class="form-text text-muted">Feedback is not required.</small>
            </div>
  
            <button type="submit" class="btn btn-danger"> <a href="logout.html">Submit</a> </button>
        </form> 
        </div>
    </div>
</body>
</html>
