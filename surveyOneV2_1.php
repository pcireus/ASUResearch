<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
  .footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

  .header{
  text-align: center;
  background-color: #666;
  padding: 20px;
  font-size: 35px;
  color: white;
  }
ul.europe {
  list-style-type: none;
  margin: 100px;
  padding: 0;
  overflow: hidden;
  display:inline-block; 
  background-color: #333;
  
}


body{
  background-color: lightblue;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 70px;
  text-decoration: none;
  font-family: Verdana;
  float: center; 
  margin: 3px; 
  text-align: center; 
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: black;
}

div.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
  
.container {
  position: relative;
  width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}


.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}
.text {
  background-color: lightblue;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
 
</style>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.3/themes/hot-sneaks/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  </head>

  <script>
    // Implemented script code that enables the sorting of countries
        $(document).ready(function() {
   $('#sortableContainer').sortable();
   $('<br><br><div id=buttonDiv><button>Submit Ls</button></div>');
   $('button').button().click(function() {
   var itemOrder = $('#sortableContainer').sortable("toArray");
     var str="";
   for (var i = 0; i < itemOrder.length; i++) {
     str+=itemOrder[i] + ", ";
                }

            })

        });

    </script>

<body >


  <?php
  // store demographics data inside of session
  $_SESSION["age"] = $_POST["age"];
  $_SESSION["gender"] = $_POST["age"];
  $_SESSION["education"] = $_POST["education"];
  $_SESSION["race"] = $_POST["race"];
  $_SESSION["mTurkID"] = $_POST["mTurkID"];
?>
<!--   Establish header -->
  <div class="header">
    <h1> TripBudget</h1>
    <p>With a budget of $1000 customize your perfect trip based on your budget!</p>
  </div>

  <div class = "content">
    <h1 style ="text-color: white; text-align: center;">Here you have 5 European countries.</h1>
  <article> <h1 style ="text-align: center;"> 1. Please order from left to right and select a place you are most likely to visit within each specific country.
    </h1></article>
  </div>

<form action= "activityOne.php" onSubmit = "return getCountryListConcat()" target = "_blank" method="post">
<div >
  <ul class ="europe">
      
    <div id= "sortableContainer">
        <div id="France" class = "dropdown">
        <!--     Establish dropdown for France -->
            <li >
                <a style ="background-color: #aaace3;" href="javascript:void(0)" class="dropbtn">France</a>
                
                <div class="dropdown-content">
                
                    <ul style ="background-color:white;">

                    <div class="container">
                      <img src="Eiffel.jpg" alt="Eiffel Twower" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p1" value = "France: Eiffel Tower">Eiffel Tower</input></div>
                      </div>
                    </div><br>

                    <div class="container">
                      <img src="riviera.jpg" alt="French Riviera" class="image" style="width:100%">
                      <div class="middle">
                      <div class="text"><input type = "radio" name ="p1" value = "French: French Riviera">French Riviera</input></div>
                    </div>

                      <br>
                    </ul>
                </div>
            </li>
        </div>

        <!--     Establish dropdown for Spain -->
        <div id="Spain" class="dropdown">
            <li >
                <a style ="background-color: #fc8662;" href="javascript:void(0)" class="dropbtn">Spain</a>
                
                <div class="dropdown-content">
                
                    <ul style ="background-color:white;">

                    <div class="container">
                      <img src="sagrada.jpg" alt="Sagrada-Familia" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p2" value = "Spain: Sagrada-Familia">Sagrada-Familia, Barcelona</input></div>
                      </div>
                    </div><br>

                    <div class="container">
                      <img src="alhambra.jfif" alt="Alhambra" class="image" style="width:100%">
                      <div class="middle">
                      <div class="text"><input type = "radio" name ="p2" value = "Spain: Alahmbra Granada">Alahmbra, Granada</input></div>
                    </div>

                      <br>
                    </ul>
                </div>
            </li>
        </div>

        <!--     Establish dropdown for Italy -->

        <div id="Italy" class="dropdown">
            <li >
                <a style ="background-color: #7afa8b;" href="javascript:void(0)" class="dropbtn">Italy</a>
                
                <div class="dropdown-content">
                    <!-- Establish places -->
                    <ul style ="background-color:white;">
                    <div class="container">
                      <img src="colosseum.jpg" alt="Colosseum" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p3" value = "Italy: Colosseum Rome">Colosseum, Rome</input></div>
                      </div>
                    </div><br>

                    <div class="container">
                      <img src="lake.jpg" alt="Lake Garda" class="image" style="width:100%">
                      <div class="middle">
                      <div class="text"><input type = "radio" name ="p3" value = "Italy: Lake Garda, Verona">Lake Garda, Verona</input></div>
                    </div>

                      <br>
                    </ul>
                </div>
            </li>
        </div>

        <!--     Establish dropdown for United Kingdom -->

        <div id="United Kingdom" class="dropdown">
              <li >
                <a style ="background-color: #0a5cff;" href="javascript:void(0)" class="dropbtn">United Kingdom</a>
                
                <div class="dropdown-content">
                    <!-- Establish places -->
                    <ul style ="background-color:white;">
                    <div class="container">
                      <img src="london.jfif" alt="Tower of London" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p4" value = "United Kingdom: Tower of London">Tower Of London</input></div>
                      </div>
                    </div><br>

                    <div class="container">
                    <img src="stone.jpg" alt="StoneHenge" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p4" value = "United Kingdom: StoneHenge, Wiltshire">StoneHenge, Wiltshire</input></div>
                    </div>

                      <br>
                    </ul>
                </div>
            </li>
        </div>
      
        <!--     Establish dropdown for Turkey -->

        <div id="Turkey" class="dropdown">
        <li >
                <a style ="background-color: #960002;" href="javascript:void(0)" class="dropbtn">Turkey</a>
                
                <div class="dropdown-content">
                    <!-- Establish places -->
                    <ul style ="background-color:white;">
                    <div class="container">
                      <img src="hagia.jfif" alt="Hagia Sophia Museum" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p5" value = "Turkey: Hagia Sophia Museum">Hagia Sophia Museum</input></div>
                      </div>
                    </div><br>

                    <div class="container">
                    <img src="pamu.jpg" alt="Pamukkale" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p5" value = "Turkey: Pamukkale, Denizli">Pamukkale, Denizli</input></div>
                    </div>

                      <br>
                    </ul>
                </div>
            </li>
        </div>
    </div>
    </ul>
</div>


<input type="hidden" id="countryList" name="countryList"><br><br>

  <br><br><br><br>
  <div class = "footer">
    <input type ="submit" value = "Next Question">
  </div>

</form>

<div class = "footer"> 
  <a href='welcomePageV2.php'><input type ="button" value = "Previous Question"></input></a>
</div>
<script language = javascript>
      

      // This function concatinate all of the sorted countries
      function getCountryListConcat() {

          $(document).ready(function() {
   $('#sortableContainer').sortable();

   var itemOrder = $('#sortableContainer').sortable("toArray");
     var str="";
   for (var i = 0; i < itemOrder.length; i++) {
     str+=itemOrder[i] + ", ";

                }
      document.getElementById("countryList").value= str;       
        
        });
            }

    
    </script>
    
    
  </body>
  </html>