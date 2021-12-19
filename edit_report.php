<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset=“UTF-8”>
  <meta name=“viewport” content=“width=device-width, initial-scale=1.0”>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>CYPRESS - Edit Report</title>
</head>

<?php
  $address = "2190 Yonge St."
?>
  
<body>
  <header>
    <div class="flex-container" style="justify-content:space-between;">
       <h3>CYPRESS</h3>
       <h3>City of Toronto</h3>
    </div>
    <hr>
  </header>

  <div class="center">
    <form action="/action_page.php" >
      
      <?php
        echo '<label for="fname" style="font-weight: bold; font-size:20;">Address:</label><br>';
        echo '<input type="text" id="address" name="address" value="' . $address . '"><br>';
      ?>
      
      <p style="font-weight: bold; font-size:20;">PROBLEMS AT THE SITE:</p>
      <input type="radio" id="utility" name="problem" ng-model="chosen" value="utility">
      <label for="utility">Utility failures</label><br>
      <input type="radio" id="pothole" name="problem" ng-model="chosen" value="pothole">
      <label for="pothole">Potholes</label><br>
      <input type="radio" id="vandalism" name="problem" ng-model="chosen" value="vandalism">
      <label for="vandalism">City property vandalism</label><br>
      <input type="radio" id="erosion" name="problem" ng-model="chosen" value="erosion">
      <label for="erosion">Eroded streets</label><br>
      <input type="radio" id="tree" name="problem" ng-model="chosen" value="tree">
      <label for="tree">Tree collapse</label><br>
      <input type="radio" id="flood" name="problem" ng-model="chosen" value="flood">
      <label for="flood">Flooded streets</label><br>
      <input type="radio" id="growth" name="problem" ng-model="chosen" value="growth">
      <label for="growth">Mould and spore growth</label><br>
      <input type="radio" id="roadblock" name="problem" ng-model="chosen" value="roadblock">
      <label for="roadblock">Garbage or any other road-blocking objects</label><br>
    </form>
  
    <div class="flex-container" style="justify-content:center">
      <button type="button"> <a href="allReports.php">Submit Edit</a> </button>
      <button type="button"> <a href="allReports.php">Cancel</a> </button>
    </div>
  <div class="center">
<br>
<button type="button" class="faq"> <a href="FAQ.html">FAQ</a> </button>
</body>

</html>
