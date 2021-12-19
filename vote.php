<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYPRESS - Vote</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
  $reports = file('reports.txt', FILE_IGNORE_NEW_LINES);
?>
	
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
             <h1 class="mainHeads">CYPRESS Vote</h1>
        </div>
    </div>
    
    <div class="container">
        <h6>
            You are currently at the Cypress voting page. Please select all of the problems you are experiencing below.
        </h6>
    </div>
    
    <div class="container">
        <div class="col-xs">
        <form action="" method="post" name="login_form">
		<?php
      		for ($x = 0; $x < count($reports); $x++)
      		{
       			echo '<input type="checkbox"id="customCheck'.$x.'" name="customCheck'.$x.'" value="'.$x.'">';
                	echo '<label class="custom-control-label" for="customCheck'.$x.'">'. $reports[$x] .'</label> <br>';
    		}
   		?>
		
            
	    	<div class="flex-container" style="justify-content: center;">
			<button type="submit" class="btn btn-danger"> <a href="vote_confirmation.php">Submit</a> </button>
      			<button type="button" class="btn btn-danger"> <a href="portal.html">Return to portal</a> </button>
    	    	</div>
        </form> 
        </div>
    </div>
</body>
</html>
