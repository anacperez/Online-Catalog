<?php
    include("includes/database.php");
    $temp = getDatabaseConnection("otter_express")
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Game Stop Online Catalog </title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <head>
            
        </head>
        <main>
            <h1>Welcome to Game Center!</h3>
            <hr>
            <h2 > Energy to the Players. By the players, for the players!</h2>
            
            <!-- <h2>Clickable Dropdown</h2> -->
            
            <p>(Click on the button to open the dropdown menu.)</p>
            
             <input type="text" style="width:400px" placeholder="Find games"  name="Search Game" id='searchBar'/>
            <hr>
            
            <nav>
                
                <div class="dropdown">
                    <button onclick="myFunction(1)" class="dropbtn">Xbox 360</button>
                      <div id="XBox360" class="dropdown-content">
                        <a href="results.php?genre=0?console=4">All</a>
                        <a href="results.php?genre=1?console=4">Action</a>
                        <a href="results.php?genre=2?console=4">Shooter</a>
                        <a href="results.php?genre=3?console=4">Horror</a>
                        <a href="results.php?genre=4?console=4">MMO-RPG</a>
                        <a href="results.php?genre=5?console=4">Strategy</a>
                        <a href="results.php?genre=6?console=4">Simulation</a>
                        <a href="results.php?genre=7?console=4">MOBA</a>
                        <a href="results.php?genre=8?console=4">Arcade</a>
                      </div>
                </div>
 
                <div class="dropdown">
                    <button onclick="myFunction(2)" class="dropbtn">Xbox One</button>
                    <div id="XboxOne" class="dropdown-content">

                        <a href="results.php?genre=0?console=1">All</a>
                        <a href="results.php?genre=1?console=1">Action</a>
                        <a href="results.php?genre=2?console=1">Shooter</a>
                        <a href="results.php?genre=3?console=1">Horror</a>
                        <a href="results.php?genre=4?console=1">MMO-RPG</a>
                        <a href="results.php?genre=5?console=1">Strategy</a>
                        <a href="results.php?genre=6?console=1">Simulation</a>
                        <a href="results.php?genre=7?console=1">MOBA</a>
                        <a href="results.php?genre=8?console=1">Arcade</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button onclick="myFunction(3)" class="dropbtn">PS3</button>
                        <div id="PS3" class="dropdown-content">

                        <a href="results.php?genre=0?console=3">All</a>
                        <a href="results.php?genre=1?console=3">Action</a>
                        <a href="results.php?genre=2?console=3">Shooter</a>
                        <a href="results.php?genre=3?console=3">Horror</a>
                        <a href="results.php?genre=4?console=3">MMO-RPG</a>
                        <a href="results.php?genre=5?console=3">Strategy</a>
                        <a href="results.php?genre=6?console=3">Simulation</a>
                        <a href="results.php?genre=7?console=3">MOBA</a>
                        <a href="results.php?genre=8?console=3">Arcade</a>
                        </div>
                </div>
                <div class="dropdown">
                    <button onclick="myFunction(4)" class="dropbtn">PS4</button>
                    <div id="PS4" class="dropdown-content">

                        <a href="results.php?genre=0?console=2">All</a>
                        <a href="results.php?genre=1?console=2">Action</a>
                        <a href="results.php?genre=2?console=2">Shooter</a>
                        <a href="results.php?genre=3?console=2">Horror</a>
                        <a href="results.php?genre=4?console=2">MMO-RPG</a>
                        <a href="results.php?genre=5?console=2">Strategy</a>
                        <a href="results.php?genre=6?console=2">Simulation</a>
                        <a href="results.php?genre=7?console=2">MOBA</a>
                        <a href="results.php?genre=8?console=2">Arcade</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button onclick="myFunction(5)" class="dropbtn">PC</button>
                    <div id="PC" class="dropdown-content">

                        <a href="results.php?genre=0?console=5">All</a>
                        <a href="results.php?genre=1?console=5">Action</a>
                        <a href="results.php?genre=2?console=5">Shooter</a>
                        <a href="results.php?genre=3?console=5">Horror</a>
                        <a href="results.php?genre=4?console=5">MMO-RPG</a>
                        <a href="results.php?genre=5?console=5">Strategy</a>
                        <a href="results.php?genre=6?console=5">Simulation</a>
                        <a href="results.php?genre=7?console=5">MOBA</a>
                        <a href="results.php?genre=8?console=5">Arcade</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button onclick="myFunction(6)" class="dropbtn">Price Range</button>
                    <div id="priceRange" class="dropdown-content">

                        <a href="">Above 55</a>
                        <a href="">between 25 and 54</a>
                        <a href="">Below 24</a>
                        
                    </div>
                </div>
                
             
            </nav>
            <hr>
            <table border=1>
            <tr>
            <td>
         <input type = "image" src = "img/shoppingCart.png" width=120 value ="submit form" alt="go to shopping cart" />
         <p>go to shopping cart</p>
         </td>
         </tr>
         </table>
            
            <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction(value) {
                if(value === 1){
                    document.getElementById("XBox360").classList.toggle("show");
                    //document.getElementById("PS4").classList.toggle("show");
                }
                else if(value === 2){
                    document.getElementById("XboxOne").classList.toggle("show");
                    //document.getElementById("XBoxOne").classList.toggle("show");
                }
                else if(value === 3){
                    document.getElementById("PS3").classList.toggle("show");
                }
                else if(value === 4){
                    document.getElementById("PS4").classList.toggle("show");
                }
                else if(value === 5){
                    document.getElementById("PC").classList.toggle("show");
                }
                else if(value == 6){
                    document.getElementById("priceRange").classList.toggle("show");
                }
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
            
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            </script>
        </main>
        
         
    </body>
</html>