<!DOCTYPE html>
<html lang="en-US">

<?php
  $reports = file('reports.txt', FILE_IGNORE_NEW_LINES);
?>
  
<head>
  <meta charset=“UTF-8”>
  <meta name=“viewport” content=“width=device-width, initial-scale=1.0”>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>View Reports</title>
</head>

<body>
  <header>
    <div class="flex-container" style="justify-content:space-between;">
       <h3>CYPRESS</h3>
       <h3>City of Toronto</h3>
    </div>
    <hr>
  </header>
  
  <div class="center">
    <h4>All Currently Unresolved Reports</h4>
    
    <!--- Code to retrieve and display reports --->
    <?php
      for ($x = 0; $x < count($reports); $x++)
      {
        echo "<div class='flex-container' style='justify-content:center'>";
        echo "<p>". $reports[$x] ."</p>";
        echo "<button type='button'><a href='edit_report.php'>Edit</a></button>";
        echo "<button type='button'> <a href='delete.php'>Delete</a> </button>";
        echo "</div>";
      }
    ?>
    
    <div class="flex-container" style="justify-content: center;">
      <button type="button"> <a href="portal.html">Return to portal</a> </button>
    </div>
    
  </div>
</body>

</html>
