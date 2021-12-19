<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
  $address = "2190 Yonge St.";
  $problem = "City property vandalism";
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
  
    <p><em>You are about to delete the following report:</em></p>

    <p>Address:</p>
    <?php echo "<p>" . $address . "</p> <br>"; ?>
  
    <p>Problem at site:</p>
    <?php echo "<p>" . $problem . "</p> <br>"; ?>
  
    <p><em>Are you sure you want to delete this?<em></p>
  
    <div class="flex-container" style="justify-content: center;">
      <button type="button"> <a href="allReports.php">Yes </a> </button>
      <button type="button"> <a href="allReports.php">No </a> </button>
    </div>
  </div>

<button type="button" class="faq"> <a href="FAQ.html">FAQ</a> </button>
</body>

</html>
