<?php 

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <form action="drawtwo.php" method="get"> Draw 2 cards 
       <input type="submit" value="Draw">
   </form>

    
</body>
</html>