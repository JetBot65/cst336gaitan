

<!doctype html>


<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
    <title>Assignment 5: AJAX Quiz</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/demo.css" />
    <script src="js/vendor/modernizr.js"></script>
	<script src="js/vendor/custom-radio.js"></script>
  </head>
  <body>

	<section id="quiz-container">
	    <div class="row">
	      <div class="large-12 columns">
	        <h1>Test your Knowledge.</h1>
	      </div>
	    </div>
		
        <div class="row">
  		  <div class="medium-10 medium-centered small-12 columns">
				<form method="post" id="quiz" action="inc/quiz.php">
		    
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 1: What's the meaning of life?</h5>
				         <img src="images//meaning-of-life.jpg">

				        <div class="row questions">
		     				  <div class="small-12">
				            <label for="Q1A1" class="Q1 A1">
								<input type="radio" class="styled" id="Q1A1" value="Q1A1" name="Q1" <?php if (isset($Q1) && $Q1=="Q1A1") echo "checked";?> required>
								A) 42
							</label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q1A2" class="Q1 A2">
								<input type="radio" class="styled" id="Q1A2" value="Q1A2" name="Q1" <?php if (isset($Q1) && $Q1=="Q1A2") echo "checked";?> required>
								B) ?????????????
				           </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q1A3" class="Q1 A3">
								<input type="radio" class="styled" id="Q1A3" value="Q1A3" name="Q1" <?php if (isset($Q1) && $Q1=="Q1A3") echo "checked";?> required>
								C) What life?
							</label>
				          </div>
  
				        <div class="small-12">
				            <label for="Q1A4" class="Q1 A4">
								<input type="radio" class="styled" id="Q1A4" value="Q1A4" name="Q1" <?php if (isset($Q1) && $Q1=="Q1A4") echo "checked";?> required>
							D) Still ????????????????
				            </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q1A5" class="Q1 A5">
								<input type="radio" class="styled" id="Q1A5" value="Q1A5" name="Q1" <?php if (isset($Q1) && $Q1=="Q1A5") echo "checked";?> required>
								E) Sleep all day eat all night.
				           </label>
				          </div>
  
				        </div>
   
				      </div>     

				</div>
			
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 2: What's 2+2?</h5>
				         <img src="images//fish.jpg">

				        <div class="row questions">
		     				  <div class="small-12">
				            <label for="Q2A1" class="Q2 A1">
								<input type="radio" class="styled" id="Q2A1" value="Q2A1" name="Q2" <?php if (isset($Q2) && $Q2=="Q2A1") echo "checked";?> required>
								A) Fish
							</label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q2A2" class="Q2 A2">
								<input type="radio" class="styled" id="Q2A2" value="Q2A2" name="Q2" <?php if (isset($Q2) && $Q2=="Q2A2") echo "checked";?> required>
								B) 4
				           </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q2A3" class="Q2 A3">
								<input type="radio" class="styled" id="Q2A3" value="Q2A3" name="Q2" <?php if (isset($Q2) && $Q2=="Q2A3") echo "checked";?> required>
								C) 5
							</label>
				          </div>
  
				        <div class="small-12">
				            <label for="Q2A4" class="Q2 A4">
								<input type="radio" class="styled" id="Q2A4" value="Q2A4" name="Q2" <?php if (isset($Q2) && $Q2=="Q2A4") echo "checked";?> required>
							D) wat?
				            </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q2A5" class="Q2 A5">
								<input type="radio" class="styled" id="Q2A5" value="Q2A5" name="Q2" <?php if (isset($Q2) && $Q2=="Q2A5") echo "checked";?> required>
								E) None of the above
				           </label>
				          </div>
  
				        </div>
   
				      </div>     

				</div>
				
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 3: Goku or Superman?</h5>
				        <img src="images//Goku vs Superman.jpg">

				        <div class="row questions">
		     				  <div class="small-12">
				            <label for="Q3A1" class="Q3 A1">
								<input type="radio" class="styled" id="Q3A1" value="Q3A1" name="Q3" <?php if (isset($Q3) && $Q3=="Q3A1") echo "checked";?> required>
								A) Goku
							</label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q3A2" class="Q3 A2">
								<input type="radio" class="styled" id="Q3A2" value="Q3A2" name="Q3" <?php if (isset($Q3) && $Q3=="Q3A2") echo "checked";?> required>
								B) Superman
				           </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q3A3" class="Q3 A3">
								<input type="radio" class="styled" id="Q3A3" value="Q3A3" name="Q3" <?php if (isset($Q3) && $Q3=="Q3A3") echo "checked";?> required>
								C) Neither
							</label>
				          </div>
  
				        <div class="small-12">
				            <label for="Q3A4" class="Q3 A4">
								<input type="radio" class="styled" id="Q3A4" value="Q3A4" name="Q3" <?php if (isset($Q3) && $Q3=="Q3A4") echo "checked";?> required>
							D) Both
				            </label>
				          </div>
  
				           <div class="small-12">
				            <label for="Q3A5" class="Q3 A5">
								<input type="radio" class="styled" id="Q3A5" value="Q3A5" name="Q3" <?php if (isset($Q3) && $Q3=="Q3A5") echo "checked";?> required>
								E) Batman
				           </label>
				          </div>
  
				        </div>
   
				      </div>     

				</div>
			
		    	<div class="row">
			      <div class="large-12 columns">
			        <h2>Question 4: Is this the Krusty Krab?</h5>
			         <img src="images//patrick.jpg">

			        <div class="row questions">
	     				<div class="small-12">
			            <label for="Q4A1" class="Q4 A1">
							<input type="radio" class="styled" id="Q4A1" value="Q4A1" name="Q4" <?php if (isset($Q4) && $Q4=="Q4A1") echo "checked";?> required>
							A) Yes
						</label>
			          </div>
  
			           <div class="small-12">
			            <label for="Q4A2" class="Q4 A2">
							<input type="radio" class="styled" id="Q4A2" value="Q4A2" name="Q4" <?php if (isset($Q4) && $Q4=="Q4A2") echo "checked";?> required>
							B) No, its Patrick
			           </label>
			          </div>
  
			           <div class="small-12">
			            <label for="Q4A3" class="Q4 A3">
							<input type="radio" class="styled" id="Q4A3" value="Q4A3" name="Q4" <?php if (isset($Q4) && $Q4=="Q4A3") echo "checked";?> required>
							C) Maybe
						</label>
			          </div>
  
			        <div class="small-12">
			            <label for="Q4A4" class="Q4 A4">
							<input type="radio" class="styled" id="Q4A4" value="Q4A4" name="Q4" <?php if (isset($Q4) && $Q4=="Q4A4") echo "checked";?> required>
						D) IDK
			            </label>
			          </div>
  
			           <div class="small-12">
			            <label for="Q4A5" class="Q4 A5">
							<input type="radio" class="styled" id="Q4A5" value="Q4A5" name="Q4" <?php if (isset($Q4) && $Q4=="Q4A5") echo "checked";?> required>
							E) ????????????
			           </label>
				          </div>

				        </div>

				      </div>     

				</div>     
	
			    <div class="row">
				      <div class="large-12 columns">
				        <h2>Question 5: Who is the President of the U.S?</h5>
				         <img src="images//PresidentSeal.png">

				        <div class="row questions">
	      				  <div class="small-12">
				            <label for="Q5A1" class="Q5 A1">
								<input type="radio" class="styled" id="Q5A1" value="Q5A1" name="Q5" <?php if (isset($Q5) && $Q5=="Q5A1") echo "checked";?> required>
								A) Hillary Clinton
							</label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q5A2" class="Q5 A2">
								<input type="radio" class="styled" id="Q5A2" value="Q5A2" name="Q5" <?php if (isset($Q5) && $Q5=="Q5A2") echo "checked";?> required>
								B) Barack Obama
				           </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q5A3" class="Q5 A3">
								<input type="radio" class="styled" id="Q5A3" value="Q5A3" name="Q5" <?php if (isset($Q5) && $Q5=="Q5A3") echo "checked";?> required>
								C) Donald Trump
							</label>
				          </div>
	  
				        <div class="small-12">
				            <label for="Q5A4" class="Q5 A4">
								<input type="radio" class="styled" id="Q5A4" value="Q5A4" name="Q5" <?php if (isset($Q5) && $Q5=="Q5A4") echo "checked";?> required>
							D) George Washington
				            </label>
				          </div>
	  
				           <div class="small-12">
				            <label for="Q5A5" class="Q5 A5">
								<input type="radio" class="styled" id="Q5A5" value="Q5A5" name="Q5" <?php if (isset($Q5) && $Q5=="Q5A5") echo "checked";?> required>
								E) Me
				           </label>
				          </div>

				        </div>

				      </div>     

				</div>
				        </div>
    
				      </div>     

				</div>
			
				<div class="row">
				    <div class="large-12 columns centered-text">	
				        <input type="submit" class="button submit" value="SEE YOUR RESULT &#x25b6;">
					</div>
				</div>
			
				</form>
			</div>
		</div>
	</section>
	
	<section id="result-container">
		<div id="result"></div>
		<div id="error" class="hide">Oops! Please make sure you selected answers for all the questions!</div>
	</section>
    
	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/demo.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/foundation/foundation.abide.js"></script>	
	<script>
	  $(document).foundation();
	</script>
  </body>
</html>



quiz.php

<?php 
include "../../includes/database.php";
$dbConn=mysql_connect("localhost","root","root") or die("Unable to Connect");
mysql_select_db("Assignment5") or die("Could not open the db");

// Assign Question Variables
$Q1 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q1']))));
$Q2 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q2']))));
$Q3 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q3']))));
$Q4 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q4']))));
$Q5 = htmlspecialchars(trim(stripslashes(strip_tags($_POST['Q5']))));
$query = "SELECT result FROM quiz_key WHERE question IN ('$Q1','$Q2','$Q3','$Q4','$Q5')";
$result = mysql_query($query);

$cat_a = $cat_b = $cat_c = $cat_d = $cat_e = 0;
while($row = mysql_fetch_array($result)) {
	$cat = $row['category'];
	if ($cat == "A") {
		$cat_a += 1;
	} elseif ($cat == "B") {
		$cat_b += 1;
	} elseif ($cat == "C") {
		$cat_c += 1;
	} elseif ($cat == "D") {
		$cat_d += 1;
	} elseif ($cat == "E") {
		$cat_e += 1;
	}
}

$array = array('A' => $cat_a, 'B' => $cat_b, 'C' => $cat_c, 'D' => $cat_d, 'E' => $cat_e);
$str = "";

foreach ($array as $i => $value) {
	if ($value >= 6) {		
		$str = $i;
		break;
    } elseif ($value >= 2) {		
		$str .= $i;
    }
}

$var = sort($str);

$query = "SELECT result FROM quiz_map WHERE category_result = '$str' LIMIT 1";
$result = mysql_query($query);
$row = mysql_fetch_row($result);
echo json_encode($row);
?>




