<?php

session_start();
include_once 'connect.php';
?>
<html>
  <head>
  <link rel="stylesheet" href="styles.css">
  </head>
    <body>
        
    <?php
    // Thank you screen
        if($connect)
        echo "<h1 style = 'text-align: center;'>" ."Congratualations!" ."</h1>"
         . "<br><br>"."<h1 style = 'text-align: center;'>". "We received your submission."."</h1>"." <br><br>";

        $surveyId = mt_rand();
        $mTurkID = $_SESSION["mTurkID"];
        $eurCountryPlace = $_SESSION["eur_sel_place"];
        $eurActivityList = $_SESSION["concatEurActivityList"];
        $eurCountryOrder = $_SESSION["eurCountryOrder"];
        $asiaCountryPlace= $_SESSION["asia_sel_place"];
        $asiaCountryOrder =$_SESSION["asiaCountryOrder"];

        // Concatenate user demographics
        $demographic = "Ethnicity is a " . $_SESSION["race"] . " " . $_SESSION["age"] . " " . $_SESSION["gender"] ." with " . $_SESSION["education"];
       
        echo "<h1 style = 'text-align: center;'>" 
        ."<span style = 'text-align: center;'>"."Please take note of your survey ID: ". "</span>" 
        ."<span style = 'text-align: center; color:green;'>" . $surveyId."</span>"
        ."</h1>"; 

        $ActivityList =$_POST["activity"];
        $asiaActivityList = implode(", ", $ActivityList);
    
        mysqli_query($connect,"insert into data2(id, eurCountryPlace, eurCountryOrder, eurActivityList, asiaCountryPlace, asiaCountryOrder, asiaActivityList, budget, mTurkID, demographic) values 
                                               ('$surveyId','$eurCountryPlace','$eurCountryOrder','$eurActivityList','$asiaCountryPlace','$asiaCountryOrder','$asiaActivityList','1000', '$mTurkID', '$demographic')");  

      ?>
    </body>
</html>