<?php
// Start the session
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
  text-align: center;
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

  /* width: 120px;  */
  /* background-color: #44c756;  */
  /* background-color: darkblue;  */
  font-family: Verdana;
  float: center; 
  margin: 3px; 
  text-align: center; 
  /* border: medium solid #999;
  color:#eee; 
  box-shadow:5px 5px 5px #444;  */
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
  <!-- <script src="script.js" defer></script> -->


  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.3/themes/hot-sneaks/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  </head>

  <script>
        $(document).ready(function() {
   $('#sortableContainer').sortable();
   $('<br><br><div id=buttonDiv><button>Submit Ls</button></div>');
   $('button').button().click(function() {
   var itemOrder = $('#sortableContainer').sortable("toArray");
     var str="";
   for (var i = 0; i < itemOrder.length; i++) {
     //alert("Position: " + i + " ID: " + itemOrder[i]);
     str+=itemOrder[i] + ", ";
                }

            })

        });
    </script>

<body >


<!--   Establish header -->
  <div class="header">
    <h1> TripBudget</h1>
    <p>With a budget of $1000 customize your perfect trip based on your budget!</p>
  </div>

  <div class = "content">
    <h1 style ="text-color: white; text-align: center;">Here you have 5 Asian countries.</h1>
  <article> <h1 style ="text-align: center;"> 4. Please order from left to right and select a place you are most likely to visit within each specific country.
    </h1></article>
  </div>

<?php
$eurActivityList =$_POST["activity"];
$concatEurActivityList = implode(", ", $eurActivityList);
$_SESSION["concatEurActivityList"] = $concatEurActivityList;
?>


<form action= "activityTwo.php" onSubmit = "return getCountryListConcat()" target = "_blank" method="post">

<div >
  <ul class ="europe">
      
    <div id= "sortableContainer">
        <div id="China" class = "dropdown">
        <!--     Establish dropdown for China -->
            <li >
                <a style ="background-color: #9c9409;" href="javascript:void(0)" class="dropbtn">China</a>
                
                <div class="dropdown-content">
                
                    <ul style ="background-color:white;">

                    <div class="container">
                      <img src="wall.jfif" alt="Great Wall" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p1" value = "China: Great Wall">Great Wall</input></div>
                      </div>
                    </div><br>

                    <div class="container">
                      <img src="li.jfif" alt="Li River" class="image" style="width:100%">
                      <div class="middle">
                      <div class="text"><input type = "radio" name ="p1" value = "China: The Li River">Li River</input></div>
                    </div>

                      <br>
                    </ul>
                </div>
            </li>
        </div>

        <!--     Establish dropdown for Thailand -->
        <div id="Thailand" class="dropdown">
            <li >
                <a style ="background-color: #a142eb;" href="javascript:void(0)" class="dropbtn">Thailand</a>
                
                <div class="dropdown-content">
                
                    <ul style ="background-color:white;">

                    <div class="container">
                      <img src="railay.jfif" alt="Railay Beach" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p2" value = "Thailand: Railay Beach">Railay Beach</input></div>
                      </div>
                    </div><br>

                    <div class="container">
                      <img src="temple.jfif" alt="Monkey Temple" class="image" style="width:100%">
                      <div class="middle">
                      <div class="text"><input type = "radio" name ="p2" value = "Thailand: Monkey Temple, lopburi">Monkey Temple, lopburi</input></div>
                    </div>

                      <br>
                    </ul>
                </div>
            </li>
        </div>

        <!--     Establish dropdown for Japan -->

        <div id="Japan" class="dropdown">
            <li >
                <a style ="background-color: #540101;" href="javascript:void(0)" class="dropbtn">Japan</a>
                
                <div class="dropdown-content">
                    <!-- Establish places -->
                    <ul style ="background-color:white;">
                    <div class="container">
                    <img src="mount.jfif" alt="Mount Fuji" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p3" value = "Japan: Mount Fuji">Mount Fuji</input></div>
                      </div>
                    </div><br>

                    <div class="container">
                      <img src="castle.jfif" alt="Osaka Castle" class="image" style="width:100%">
                      <div class="middle">
                      <div class="text"><input type = "radio" name ="p3" value = "Japan: Osaka Castle">Osaka Castle</input></div>
                    </div>

                      <br>
                    </ul>
                </div>
            </li>
        </div>

        <!--     Establish dropdown for Hong Kong -->

        <div id="Hong Kong" class="dropdown">
              <li >
                <a style ="background-color: #6b6767;" href="javascript:void(0)" class="dropbtn">Hong Kong</a>
                
                <div class="dropdown-content">
                    <!-- Establish places -->
                    <ul style ="background-color:white;">
                    <div class="container">
                      <img src="peak.jfif" alt="Victoria" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p4" value = "Hong Kong: Victoria Peak">Victoria Peak</input></div>
                      </div>
                    </div><br>

                    <div class="container">
                    <img src="disney.jpg" alt="Disneyland" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p4" value = "Hong Kong: DisneyLand">DisneyLand</input></div>
                    </div>

                      <br>
                    </ul>
                </div>
            </li>
        </div>
      
        <!--     Establish dropdown for Malaysia -->

        <div id="Malaysia" class="dropdown">
        <li >
                <a style ="background-color: #f2bf33;" href="javascript:void(0)" class="dropbtn">Malaysia</a>
                
                <div class="dropdown-content">
                    <!-- Establish places -->
                    <ul style ="background-color:white;">
                    <div class="container">
                      <img src="twin.jfif" alt="Petronas Twin Towers" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p5" value = "Malaysia: Petronas Twin Towers">Petronas Twin Towers</input></div>
                      </div>
                    </div><br>

                    <div class="container">
                    <img src="menara.jfif" alt="Menara Kaula Lumpur" class="image" style="width:100%">
                      <div class="middle"><div class="text"><input type = "radio" name ="p5" value = "Malaysia: Menara Kaula Lumpur">Menara Kaula Lumpur</input></div>
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
  <a href='activityTwo.php'><input type ="button" value = "Previous Question"></input></a>
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