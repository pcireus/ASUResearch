<?php
session_start();
?>
<html>
<head>
    <style>
 div.sortIt { width: 120px; background-color: #44c756; font-family: Verdana;
            float: center; margin: 4px; text-align: center; border: medium solid #999;
        padding: 4px; color:#eee; box-shadow:5px 5px 5px #444;}
      
      
    .checkboxes {
    columns: 4 8em;
}
.header{
  text-align: center;
  background-color: #666;
padding: 20px;
text-align: center;
font-size: 35px;
color: white;
}
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}
.question{
  text-align:center;
}
    </style>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  
  </head>
  
  <body>
      <!--   Establish header -->
  <div class="header">
    <h1> TripBudget</h1>
    <p>With a budget of $1000 customize your perfect trip based on your budget!</p>
  </div>

<?php
// add all the data to sessions
$_SESSION["asiaCountryOrder"] = $_POST["countryList"];
// concatinate asia places
$p1 = $_POST["p1"];
$p2 = $_POST["p2"];
$p3 = $_POST["p3"];
$p4 = $_POST["p4"];
$p5 = $_POST["p5"];

$actPlaceList = $p1."\r\n".$p2."\r\n".$p3."\r\n".$p4."\r\n".$p5;
$_SESSION["asia_sel_place"] = $actPlaceList;

?>
 
    <!--   Establish establish form -->
     <form id= "surveyForm"  action="handle2.php"  method="post">

        
       <p class = "question"><label for="totalTravelers">5. What is the amount of people going on this trip? (Including yourself): 
        <input type="number" id="totalTravelers" value = 1 name="totalTravelers" required min="1" max="5"></label></p><br><br>
       
        <input type="hidden" id="countryList" name="countryList"><br><br>
       
        
        <p class = "question">6. What are the activities you would consider doing, taking your budget into consideration?</p><br><br>
      
       <!--   Listing of each activity and their price tags -->
       
       <ul class="checkboxes">

      <li><label><input type="checkbox" name="activity[]" value = "Biking"  id = 13 > $13 Biking</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Swimming" id = 20 > $20 Swimming</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Sky-diving" id=200> $200 Sky-diving</label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Picnic"   id = 20> $20 Picnic</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Mountain climbing" id =62> $62 Mountain climbing</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Camping" id =100> $100 Camping</label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Music festival"  id = 15> $15 Music festival</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Musium visit"  id =27> $27 Musium visit</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Liberal Drinking" id =33> $33 Liberal Drinking</label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Historical Tour"   id =28> $28 Historical Tour</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Horse back Riding"   id = 51> $51 Horse back Riding</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Cruises"  id =300>  $300 Cruises</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Hunting" id =120> $120 Hunting</label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Universal Studios"  id =123 > $123 Universal Studios</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Night Club"  id =60> $60 Night Club</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Fishing" id =70> $70 Fishing</label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Zoo visit"   id =8 > $8 Zoo visit</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Water tour"  id =20> $12 Water tour</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Scuba-diving" id =130> $130 Scuba-diving</label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Sking"   id =75> $75 Sking</label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Jet ski" id =115> $115 Jet ski<br></label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Cultural Dance" id =47> $47 Cultural Dance<br></label></li>     
      <li><label><input type="checkbox" name="activity[]" value = "Traditional Food" id =112> $112 Traditional Food<br></label></li>       
      
      
      <li><label><input type="checkbox" name="activity[]" value = "Soccer Game"  id =14>  $14 Soccer Game</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Football Game" id =258> $258 Football Game</label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Tenis Game"  id =53 > $53 Tenis Game</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Baseball Game"  id =35> $35 Baseball Game</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Basketball Game" id =89> $89 Basketball Game</label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Professional Photos"   id =73 > $73 Professional Photos</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Paint Ball"  id =40> $40 Paint Ball</label></li>       
      <li><label><input type="checkbox" name="activity[]" value = "Bowling" id =5> $5 Bowling</label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Golf Game"   id =35> $35 Golf Game</label></li>
      <li><label><input type="checkbox" name="activity[]" value = "Roller Skating" id =36> $36 Roller Skating<br></label></li>
    </ul>
        <br><input type = "button" name="button1"  value="Check Balance" onclick ="Budget()">
        <p id = "answer"> </p><br><br>
    
     </form>
     <div class = "footer">
    
    <a href='surveyOneV2_2.php'><button>Previous Question</button></a>
          <input type = "button" name="button2"  value="Submit" onclick ="Submit()"><br>
      </div>
 
    <h1 id = "finish"></h1>
   
    <script language = javascript>
      
      //Initialize BudgetBalance for survey taker
      var budgetBalance = 1000.0;
      // sums and returns the prices of all checked items
      function checked_Item_PriceSum(){

        var actPriceSum = 0.0;
         
         var chks = document.getElementsByName('activity[]');
     for(var i=0; i<chks.length; i++){
        
        if(chks[i].checked == true)
        {
        actPriceSum+=parseFloat(chks[i].id);
        }
        
        }
     return actPriceSum;
      }
      // This function sums all of checked activity prices and subtract from the budgetBalance
      function Budget(){
        
        // Go through all of the checked boxes
        var actPriceSum = checked_Item_PriceSum();
         
        //calculate totalBalance
        var totalBalance = budgetBalance - actPriceSum;
        if(totalBalance == 0 || totalBalance > 0){
          actPriceSum = 0;
          document.getElementById("answer").innerHTML="Available balance is $"+parseFloat(totalBalance);

        }
        
        else
          alert("Negative balance of $"+totalBalance + ", please reconsider your budget of $"+budgetBalance);
          
      }

      
      // This function submits the survey to server
      function Submit(){
       
        var actPriceSum = checked_Item_PriceSum();
        
        //calculate totalBalance
        var totalBalance = budgetBalance - actPriceSum;
 
        if((totalBalance == 0 && totalBalance != budgetBalance) || (totalBalance > 0 && totalBalance != budgetBalance)){
          actPriceSum = 0;
          
          //confirm survey submission
           if(confirm("Submit budget?")){
             // check if information entered in required field
                   document.getElementById("finish").innerHTML="Thanks for taking the survey!";
                   document.getElementById("surveyForm").submit();
           }
        }
        else if(totalBalance == budgetBalance){
          alert("Please select from the list of activities based on your budget of $"+budgetBalance);
        }
        else{
          // force user to reconsider their activities selection
          alert("Negative balance of $"+totalBalance + ", please reconsider your budget of $"+budgetBalance);
          
        }
          
      
    }
    
    </script>
    
    
  </body>