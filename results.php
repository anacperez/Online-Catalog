<?php

    session_start(); 
    
    $_SESSION['platformId'] = array();
    $_SESSION['gameId'] = array(); 
 

    
    include("includes/database.php");

    $dbConnection = getDatabaseConnection("online_gamestop");
    $genreID = $_COOKIE['genreId'];
    $consoleID = $_COOKIE['platformId'];

    $price = $_GET['price'];

    //putting data into session's array
  //  array_push($_SESSION['platformId'], 2, 1, 2, 3, 3);
//    array_push($_SESSION['gameId'], 3, 4, 2, 3, 1, 4);

   

function getQueryResult(){
    global $dbConnection;
    global $genreID;
    global $consoleID;
    global $price;
    
     if(isset($_GET['searchBar'])){
        $sql = " SELECT * FROM `game` WHERE title LIKE '%" . $_GET['searchBar'] . "%'";
    }
     else if(isset($_GET['price'])){
        if($price == 1){
            $sql = "SELECT title, description, price, rating, starRating, releaseDate FROM `game` WHERE 
            price > 55";
        }
        else if($price == 2){
            $sql = "SELECT title, description, price, rating, starRating, releaseDate FROM `game` WHERE 
            price > 25 AND price < 54";
        }
        else if($price == 3){
            $sql = "SELECT title, description, price, rating, starRating, releaseDate FROM `game` WHERE 
            price < 24";
        }
    }
    else if(isset($_COOKIE['platformId']) && isset($_COOKIE['genreId'] )){
         $sql = "SELECT  gameId, title, description, price, rating, starRating, releaseDate from `game` where
        game.platformId = '$consoleID'";
        //when we wwant to select all the games within the console, we want to grab everything we have
        if( $genreID != 0)
        {
           $sql .= " and game.genreId= '$genreID'";        
        }
    }
    
   
    
   
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
        <?php
        $results = getQueryResult();
        ?>
    <form action="shoppingCart.php">
        <input type="text" name=""/>
    <table>
        <th> Title</th>
        <th> Description</th>
        <th> Price</th>
        <th> rating</th>
        <th> Star Rating</th>
        <th> release date</th>
        <?php
            foreach($results as $result){
                if(isset($result[platformId]))
                    echo "<th> Platform </td>";
                break;
            }
        ?>
        <th> purchase</th>
    <?php
     
     foreach ($results as $result) {
         echo "<tr>";
         echo "<td>" . $result['title'] . "</td>";
         echo "<td>" . $result['description'] . "</td>";
         echo "<td>" . $result['price'] . "</td>";
         echo "<td>" . $result['rating'] . "</td>";
         echo "<td>" . $result['starRating'] . "</td>";
         echo "<td>" . $result['releaseDate'] . "</td>";
         
         if(isset($result['platformId'])){
             
           
             echo "<td>";
            
             switch ($result['platformId']) {
                 case '1':
                        echo " Xbox One"; 
                     break;
                 case '2': 
                     echo " PS4 "; 
                     break; 
                case '3': 
                    echo "PS3";
                    break;
                case '4': 
                    echo "Xbox 360"; 
                    break; 
                case '5': 
                    echo " PC "; 
                    break; 
                 default:
                     echo " unknown"; 
                     break;
             }
             echo "</td>";
         
         }
         echo "<td><input type=checkbox name='buy[]' value='".$result['gameId']."' id='$result'></td>";
         echo"</tr>";
     }
    ?>
    </table>
    <input type="submit" value="Submit"/>
    </form>
    </center>
    
    <button type="button" onclick="nextPage()" name="Proceed" >Shopping Cart</button>
    </body>
    
    <script>
        function nextPage(){
            document.location = "shoppingCart.php"
        }
    </script>
</html>