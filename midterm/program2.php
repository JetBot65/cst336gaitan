<?php

   include 'database.php'; 
   
           
       
       $dbConn = getDatabaseConnection(); 
 
        
       
echo "Question 1. List of all female students.";
echo "<br>";
echo"<br>";
$sql = "SELECT firstName, lastName FROM m_students WHERE gender != 'M' ORDER BY lastName ASC";

$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['firstName']  .  " - " .$record['lastName'] . "<br />";
	echo"<br>";
}

echo "Question 2. List of students that have assignments with a grade lower than 50.";
echo"<br>";
echo"<br>";
$sql = "SELECT m_students.firstName, m_students.lastName FROM m_students inner join m_gradebook  ON m_gradebook.studentID=m_students.studentID WHERE grade < 50 ORDER by grade ASC";

$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['firstName']  . " - " . $record['lastName'] ." - ". $record['grade'] . "<br />";
	echo"<br>";
}

/*echo "Question 3. List of assignments that have not been graded.(order by due date ascending) ";
echo"<br>" ;
$sql = "SELECT m_assignments.title, m_assignments.dueDate FROM m_assignments inner join m_gradebook ON m_assignments.assignmentID=m_gradebook.assignmentID WHERE m_gradebook.assignmentID = NULL ORDER BY dueDate";
echo"<br>";

$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['title']  . " - " . $record['dueDate'] ."<br />";
	echo"<br>";
}*/

/*echo "Question 4.Order by last name and title  ";
echo"<br>" ;
$sql = "SELECT title FROM  m_gradebook  WHERE dueDate IS NULL	ORDER by dueDate ASC";
echo"<br>";

$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['firstName']  . " - " . $record['lastName'] .  $record['title']  . " - " . $record['grade'] ."<br />";
	echo"<br>";
}	

/*echo "Question 5. List Average grade per student (average age 3 assignments) order by avergae from hhighest to lowest ";
echo"<br>" ;
$sql = "SELECT title FROM  m_gradebook  WHERE dueDate IS NULL	ORDER by dueDate ASC";
echo"<br>";

$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['firstName']  . " - " . $record['lastName'] .  $record['title']  . " - " . $record['grade'] ."<br />";
	echo"<br>";
}	*/

?>

 <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#006000">
      <td>1</td>
      <td>A report shows all female students ordered by lastname, from A to Z</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:#006000">
      <td>2</td>
      <td>A report shows atudents that have assignments with a grade lower than 50, ordered by grade, in ascending order</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:#006000">
      <td>3</td>
      <td>A report lists those assignments that have not been graded and their due date,ascending</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:#006000">
       <td>4</td>
       <td>A report shows the Gradebook, which includes first name, last name, assignment title and grade,. It should be orderd by last name and assignment title. </td>
       <td align="center">15</td>
     </tr>
     <tr style="background-color:#006000">
      <td>5</td>
      <td>A report lists each student along with his or her average grade, ordered by average grade, from highest to lowest.</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:#006000">
      <td>6</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>    



 
   