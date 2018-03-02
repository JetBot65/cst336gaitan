<?php
session_start();
$firstname=$_GET['firstname']; 
$lastname=$_GET['lastname'];
$month=$_GET['month'];
$date=$_GET['date'];
$find=$_GET['finder'];
?>
<html>
<head>
<header>
<img src="img/Zodiac.jpg" /> <span class="title">HOROSCOPES</span>
<link href="css/styles.css" rel="stylesheet" type="text/css"/>
</header>
</head>
    <body>
        <?php
        if (isset($_GET['submit'])){
         
        if($month == "December" && $date >= 22 || $month == "January" && $date <= 19){
           
           echo $firstname . $lastname. " Your a capricorn sign of the goat";
           echo "</br> </br>";
           echo '<img src=img/capricorn.png>';
           echo "</br></br>";
           
       }else if($month == "January" && $date >= 20 || $month == "February" && $date <= 18){
        echo  $firstname .  $lastname. " You are a Aquarius. Sign of The Water Bearer";
        echo "</br> </br>";
        echo '<img src=img/aquarius.png>';
        echo "</br></br>";
    
       }else if($month == "February" && date >= 19 || $month == "March" && $date <= 20){
         echo $firstname . $lastname. " You are a Pisces. The Sign Of The Fish";
         echo "</br> </br>";
         echo  '<img src=img/pisces.png>';
         echo "</br></br>";
       
       } else if($month == "March" && $date >= 21 || $month == "April" && $date <= 19){
         echo $firstname . $lastname. " You are an Aries. The Sign of The Ram";
         echo "</br> </br>";
         echo '<img src=img/aries.png>';
         echo "</br></br>";
       
       } else if ($month == "April" && $date >= 20 || $month == "May" && $date <= 20){
        echo $firstname . $lastname. " You are a Taurus. The Sign Of The Bull";
        echo "</br> </br>";
        echo '<img src=img/taurus.png>';
        echo "</br></br>";
       
    } else if($month == "May" && $date >= 21 || $month == "June" && $date <= 20){
        echo $firstname . $lastname. " You are a Gemini. The Sign Of The Twins";
        echo "</br> </br>";
        echo'<img src=img/gemini.png>';
        echo "</br></br>";
       
    }  else if($month == "June" && $date >= 21 || $month == "July" && $date <= 22){
        echo $firstname . $lastname. " You are a Cancer. The Sign Of The Crab";
        echo "</br> </br>";
        echo '<img src=img/cancer.png>';
        echo "</br></br>";
       
    } else if($month == "July" && $date >= 23 || $month == "August" && $date <= 22){
        echo $firstname . $lastname. " You are a Leo. The Sign Of The Lion";
        echo "</br> </br>";
        echo '<img src=img/leo.png>';
        echo "</br></br>";
       
    } else if($month == "August" && $date >= 23 || $month == "September" && $date <= 22){
        echo $firstname . $lastname. " You are a Virgo. The Sign Of The Virgen";
        echo "</br> </br>";
        echo '<img src=img/virgo.png>';
        echo "</br></br>";
       
    } else if($month == "September" && $date >= 23 || $month == "October" && $date <= 22){
        echo $firstname . $lastname. " You are a Libra. The Sign of The Scales";
        echo "</br> </br>";
        echo '<img src=img/libra.png>';
         echo "</br></br>";
       
    } else if($month == "October" && $date >= 23 || $month == "November" && $date <= 21){
        echo $firstname . $lastname. " You are a Scorpio. The Sign Of The Scorpion";
        echo "</br></br>";
        echo '<img src=img/scorpio.png>';
        echo "</br></br>";
       
    } else if($month == "November" && $date >= 22 || $month == "December" && $date <= 21){
        echo $firstname . $lastname. " You are a Sagittarius. The Sign of The Archer";
        echo "</br></br>";
        echo '<img src=img/sagittarius.png>';
    }
    else if($find == "Television"){
        echo " and your a channel too!";
        
    }
     else if($find == "Google"){
        echo " and your a net surfer too!";
        
    }
     else if($find == "Newspaper"){
        echo "and your a bookworm too!";
        
    }
     else if($find == "Friend"){
        echo "and your a friendly person too!";
        
    }
     else if($find == "In Store"){
        echo "and you like to shop too!";
        
    }
       
            
 }
 
?>

</br></br>
<form action="index.php" method= "GET">
    <input class="button" type="submit" value="Refresh"/>
</form>
<footer>
<fieldset>
    <legend>
        About Us:
    </legend>
<p>Madame Cleo's Horoscopes</p>   
<p> 123 WhooDOO BLVD</p>
<p> Mugumbu, Jamaica, 898989</p>
</fieldset>
</footer>
</body>
</html>