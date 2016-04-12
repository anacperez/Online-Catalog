<?php
    session_start(); 
    
    $platform_array = $_SESSION['platformId'];
    $games_array = $_SESSION['gameId'];
    print_r($platform_array);
    
    for($i = 0; $i < count($platform_array); $i++){
        echo "Platform ID: " . $platform_array[$i] . " Game Id: " . $games_array[$i];
        echo "<br />";
    }
    

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>