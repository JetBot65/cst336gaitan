<?php 
 require_once('database.php');
 $conn = getConnection('localhost','final','jetblack65','');
 $res = $conn->query("SELECT `firstName`,`lastName`,`image` FROM `superhero` ORDER BY RAND() LIMIT 1");
 foreach($res as $item){
  $randomImage = $item['image'];
  $randomName = $item['firstName'].$item['lastName'];
 }
?>
<html>
    
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <img src="img/superheroes/<?php echo($randomImage); ?>.png" >
        <input type="hidden" name="randomName" id="randomName" value="<?php echo($randomName); ?>" >
        
        <h1>What Is The Real Name Of This SuperHero?</h1>

        <form onsubmit="return checkQuiz(document.forms['quiz'])" id="quiz">
            <select  id="selectHero">
             <option value="">Select a Superhero</option>
             <?php 
              $res = $conn->query("SELECT DISTINCT `firstName`,`lastName` FROM `superhero`  ORDER BY `firstName`,`lastName` ASC");
              foreach($res as $item){
                echo "<option value='".$item['firstName'].$item['lastName']."'>".$item['firstName']." ".$item['lastName']."</option>";
              }
             ?>
             </select>
            <input type="submit" value="Check Answer" id="checkAnswerButton">
        </form>
        
        <div id="summary"></div>
        
    </body>
    <script>
        var answer = "";
        
        document.getElementById('checkAnswerButton').onclick = function(e){
         e.preventDefault();
          var theSelect =document.getElementById("selectHero");
          if(theSelect.options[theSelect.selectedIndex].value == ""){
            alert("Please select a superhero.");
          }else{
            if(document.getElementById('randomName').value != theSelect.options[theSelect.selectedIndex].value){
             document.getElementById('summary').innerHTML=("<p style='color:red;'>Wrong answer</p>");
            }else{
             document.getElementById('summary').innerHTML=("<p style='color:green;'>Right answer</p>");
            }
          }
        }
        
        function checkQuiz(mform) {
            var ans1 = mform['answer'].value;
            var score = 0;
            
             if (ans1== answer) {
                 score++;
                 $("#feedback1").text("Correct").css("color", "green");
            }
            else{
                $("#feedback1").text("Incorrect");
            }
        
            
       
            $.ajax({
               method: "POST",
               url: "grades.php",
               data:{
                  
                   score:score
               },
               dataType: "json",
               success:function(data) {
                   $("#summary").text("Previous score: " + data['lastScore'] + " Total attempts: " + data['attempts'] + " Current score: " + score);
                   
               }
            });
            return false;
        }
    </script>
               
  <table border="1" width="600" cellpadding="10px">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
     <tr style="background-color:">
      <td>1</td>
      <td>A random image of a superhero is displayed when refreshing the page <br></td>
      <td width="20" align="center">10</td>
     </tr>     
     <tr style="background-color:">
      <td>2</td>
      <td><p>The "real names" of the superheroes in the dropdown menu come from the database (without duplicates and in alphabetical order) <br>
        </p></td>
      <td width="20" align="center">10</td>
    </tr>     
     <tr style="background-color:">
      <td>3</td>
      <td>An error message is displayed if the user clicks on the "Check Answer" button without selecting anything. <br></td>
      <td width="20" align="center">5</td>
    </tr>     
     <tr style="background-color:">
      <td>4</td>
      <td>The right color-coded feedback (correct or incorrect) is displayed upon clicking on the "Check Answer" button <br></td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:">
      <td>5</td>
      <td>The number of times the real name for the specific superhero has been answered correctly and incorrectly is stored in the database, via AJAX (you'll need to create a new table, you decide the structure)<br></td>
      <td width="20" align="center">15</td>
    </tr>     

     <tr style="background-color:">
      <td>6</td>
      <td>The updated number of times for total of correct and incorrect answers (for the specific superhero) is displayed, via AJAX <br></td>
      <td width="20" align="center">10</td>
    </tr>
     
     <tr style="background-color:">
      <td>7</td>
      <td>The spinning images (indicating that data is being loaded) are displayed and replaced when the data is retrieved, via AJAX</td>
      <td width="20" align="center">5</td>
    </tr> 

     <tr style="background-color:">
      <td>8</td>
      <td>This rubric is properly included AND UPDATED</td>
      <td width="20" align="center">2</td>
    </tr>
        
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center">&nbsp;</td>
    </tr> 
  </tbody></table>
</html>