<?php
session_start();
$firstname=$_GET['firstname']; 
$lastname=$_GET['lastname'];
$month=$_GET['month'];
$date=$_GET['date'];
$find=$_GET['finder']
?>
<!DOCTYPE html>
<html>
<head>
<header>
<img src="img/Zodiac.jpg" /> <span class="title">HOROSCOPES</span>
<link href="css/styles.css" rel="stylesheet" type="text/css"/>
</header>
</head>
</br></br>
<body>

<div class="site">

<form name="index.php" action= "displaychanges.php" method="GET" >

<fieldset>
<legend><b>Your Details</b></legend>
<p>First Name:<font color=red>*</font></p><input type="text" name="firstname"/></br>


<p>Last  Name:<font color=red>*</font></p><input type="text" name="lastname"/></br>

</br>
<label for="birth-Month">
     Choose Birth Month<br/>
</label></br>
<select name="month">
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
</select>

</br>
</br>
<label for="birth-Date">
    Choose Birth Date<br/>
</label></br>
<select name="date">
    <option value=1>1</option>
    <option value=2>2</option>
    <option value=3>3</option>
    <option value=4>4</option>
    <option value=5>5</option>
    <option value=6>6</option>
    <option value=7>7</option>
    <option value=8>8</option>
    <option value=9>9</option>
    <option value=10>10</option>
    <option value=11>11</option>
    <option value=12>12</option>
    <option value=13>13</option>
    <option value=14>14</option>
    <option value=15>15</option>
    <option value=16>16</option>
    <option value=17>17</option>
    <option value=18>18</option>
    <option value=19>19</option>
    <option value=20>20</option>
    <option value=21>21</option>
    <option value=22>22</option>
    <option value=23>23</option>
    <option value=24>24</option>
    <option value=25>25</option>
    <option value=26>26</option>
    <option value=27>27</option>
    <option value=28>28</option>
    <option value=29>29</option>
    <option value=30>30</option>
    <option value=31>31</option>
</select></br></br>

</fieldset>
<br>
</br></br>
<input type="submit" value="Submit" name="submit"/>
<blockquote>"Astrology reveals the will of the Gods."</blockquote>
</fieldset>
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