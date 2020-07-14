
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: lightblue;
}

.header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
.footer{
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
  margin: 50;
  color: black;
}

article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: lightblue;
  height: 522px;
}

</style>
</head>
<body>
 
<div class = "header">
  <h2>Welcome to tripBudget!</h2>
</div>
 
<section>
  <article>
    <h1>Intro</h1>
    <p>Hello and welcome to our study "TripBudget" where we make predictions concerning where common folks are most likely to travel and what activities they would do based on a given budget.</p>
    <p>We would like to sincerely thank you for taking the time to take this short 6 question survey. Please read the task description bellow and follow the question instructions carefully. <br></p>

    <h1>Task</h1>
    <p> 1.) First and formost, before starting this survey we would like for you to provide your Amazon Mechanical turk ID in order to compansate you for your assistance.</p>
    <p> 2.) Please provide a few demographic information to further develope our research.</p>
    <p> 3.) When you start the survey, you will be asked to ranked 5 countries from Europe and also select a desired place from each of those contries. As you hover over the countries, a dropdown of those places will automatically appear, you must select a place from each country before you are allowed to move forward.</p>
    <p> 4.) The second page of the survey will ask you to select form a pool of activities that best suits your budget. You must be considerate of how much you have to spend for every selection. You have the option of checking your remaining balance every so often as you desire. </p>
    <p> 5.) Step 3 and 4 will be repeated a second time for 5 countries from Asia. Please be sure to click on the submit button in order for your data to be stored.</p>
    <p> 6.) Please feel free to contact us if you have any questions. Thank you!</p>
  </article>


</section>

<div class = "footer">
  <br><br>
  <h2 style = "text-align: center; text-color: white;"> Short demographics</h2>

  <form action= "surveyOneV2_1.php" target = "_blank" method="post" >
  <ol>
    <li><strong> What is your gender</strong></li>
    <input type ="radio" id ="gender" value = "male" name = "gender" required>Male</input>
    <input type ="radio" id ="gender" value = "female"name = "gender" >Female</input>
    <input type ="radio" id ="gender" value = "other"name = "gender" >Other</input>
    <br><br>

    <li><strong> What is your age</strong></li>
    <input type ="radio" id ="age" value = "Under 12 year old" name = "age" required>Under 12 year old</input>
    <input type ="radio" id ="age" value = "12 - 17 years old" name = "age" >12 - 17 years old</input>
    <input type ="radio" id ="age" value = "18 - 24 years old" name = "age" >18 - 24 years old</input>
    <input type ="radio" id ="age" value = "25 - 34 years old" name = "age" >25 - 34 years old</input>
    <input type ="radio" id ="age" value = "35 - 44 years old" name = "age" >35 - 44 years old</input>
    <input type ="radio" id ="age" value = "45 - 54 years old" name = "age" >45 - 54 years old</input>
    <input type ="radio" id ="age" value = "55 years or older" name = "age" >55 years or older</input>
    <br><br>

    <li><strong> What is your highest education level</strong></li>
    <input type ="radio" id ="education" value = "No Schooling completed" name = "education" required>No Schooling completed</input>
    <input type ="radio" id ="education" value = "Some high school, no diploma" name = "education" required>Some high school, no diploma</input>
    <input type ="radio" id ="education" value = "High School graduate, diploma or GED" name = "education" required>High School graduate, diploma or GED</input>
    <input type ="radio" id ="education" value = "Associate degree" name = "education" required>Associate degree</input>
    <input type ="radio" id ="education" value = "Bachelor’s degree" name = "education" required>Bachelor’s degree</input>
    <input type ="radio" id ="education" value = "Master’s degree" name = "education" required>Master’s degree</input>
    <input type ="radio" id ="education" value = "Professional degree" name = "education" required>Professional degree</input>
    <input type ="radio" id ="education" value = "Doctorate degree" name = "education" required>Doctorate degree</input>
    <br><br>

    <li><strong> What is your ethnicity?</strong></li>
    <input type ="radio" id ="race" value = "Black" name = "race" required>Black</input>
    <input type ="radio" id ="race" value = "Hispanic or Latino" name = "race" required>Hispanic or Latino</input>
    <input type ="radio" id ="race" value = "White" name = "race" required>White</input>
    <input type ="radio" id ="race" value = "Native American" name = "race" required>Native American</input>
    <input type ="radio" id ="race" value = "Asian/ Pacific Islander" name = "race" required>Asian/Pacific Islander </input>
    <input type ="radio" id ="race" value = "other" name = "race" required>other</input>
    <br><br>

    <p><strong>Please insert your Amazon mechanical turk ID</strong></p>
    <input type="text" id="mTurkID" name="mTurkID" required><br><br>
    <input type ="submit" value = "Take Survey">
    
  </ol>
  </form>
</div>

</body>
</html>
