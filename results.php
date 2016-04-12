<?php
    include("includes/database.php");

    $dbConnection = getDatabaseConnection("online_gamestop");
    $genreID = $_COOKIE['genreId'];
    $consoleID = $_COOKIE['platformId'];

   

function getQueryResult(){
    global $dbConnection;
    global $genreID;
    global $consoleID;
    
     if(isset($_GET['searchBar'])){
        $sql = " SELECT * FROM `game` WHERE title LIKE '%" . $_GET['searchBar'] . "%'";
    }
    else if(isset($_COOKIE['platformId']) && isset($_COOKIE['genreId'] )){
         $sql = "SELECT title, description, price, rating, starRating, releaseDate from game where
        game.platformId = '$consoleID'";
        //when we wwant to select all the games within the console, we want to grab everything we have
        if( $genreID != 0)
        {
           $sql .= " and game.genreId= '$genreID'";        
        }
    }
    
   
    echo $sql;
    $statement = $dbConnection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $records;   
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Game Stop Online Catelog</title>
         <link rel="stylesheet" href="resultsStyles.css" type="text/css" />
    </head>
    <body>
        <center><h1>Online GameStop!</h1>
    <table>
        <th> Title</th>
        <th> Description</th>
        <th> Price</th>
        <th> rating</th>
        <th> Star Rating</th>
        <th> release date</th>
        <th> purchase</th>
    <?php
     $results = getQueryResult();
     foreach ($results as $result) {
         echo "<tr>";
         echo "<td>" . $result['title'] . "</td>";
         echo "<td>" . $result['description'] . "</td>";
         echo "<td>" . $result['price'] . "</td>";
         echo "<td>" . $result['rating'] . "</td>";
         echo "<td>" . $result['starRating'] . "</td>";
         echo "<td>" . $result['releaseDate'] . "</td>";
         echo "<td><input type=checkbox name='buy' value='buy'></td>";
         echo"</tr>";
     }
    ?>
    </table>
    </center>
    </body>
</html>