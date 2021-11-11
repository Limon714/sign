<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Age Calculator</title>
 <link rel="stylesheet" href="date.css">
</head>
<body>
<form action="" method="post">

choose your Birthday :
<input type="date" name='d'><br>
<input type="submit" value="Calculate" name="s">

</form>

<?php
 if(isset($_POST['s']))
  {
    $bith = $_POST['d'];
    $today = date("m-d-y");
    $diff = date_diff(date_create($bith), date_create($today));
    echo "You are " . $diff->format('%Y') . " years old.";
  }

?>
</body>
</html>