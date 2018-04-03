<?php

   include 'database.php';
   
   
   function displayDeviceList() {
       
       $sql = "SELECT * from device WHERE 1"; 
       $named_parameters = array(); 
      
       if (isset($_GET['submit'])) {
           if (!empty($_GET['device-name'])) {
               // construct our SQL query accordingly.
               $sql .=  " AND deviceName LIKE :deviceName"; 
               $named_parameters[":deviceName"] = "%" . $_GET['device-name'] . "%"; 
           }
           
           if (!empty($_GET['device-type'])) {
               // construct our SQL query accordingly.
               $sql .=   " AND deviceType = '". $_GET['device-type'] . "'"; 
           }
           
           if (isset($_GET['available'])) {
               // construct our SQL query accordingly.
               $sql .=   " AND status = 'available'"; 
           }
           
           if (isset($_GET['order-by'])) {
               // construct our SQL query accordingly.
               $sql .=   " ORDER BY ". $_GET['order-by']; 
           }
           
         
       }
       $dbConn = getDatabaseConnection(); 
   
       
       $statement = $dbConn->prepare($sql);
       $statement->execute($named_parameters);
        
       $records = $statement->fetchAll();
       
       echo "<div align='center'>";
       echo "<table cellpadding= '5' width= '90%'>";
       foreach ($records as $record) {
            echo $record["deviceName"]." ".$record["deviceType"]." ".$record["price"]." ".$record["status"]."<br>"; 
       }
      echo "</table>";
     echo "</div>";
   }
   
   function getDeviceTypes() {
        $dbConn = getDatabaseConnection(); 
        $sql = 'SELECT DISTINCT(deviceType)  FROM device;'; 
        $statement = $dbConn->prepare($sql);
        $statement->execute();
        
        $records = $statement->fetchAll(); 
        
        foreach ($records as $record) {
            echo "<option value='". $record['deviceType']. "'>". $record['deviceType']. "</option>"; 
        }
   }
  
  ?>
  
  
  <html>
      <head>
       	<link href="css/styles.css" rel="stylesheet" type="text/css"/>  
       	<header><img src="img/server.jpg" alt="picture of server" class="center"></header>
       	 <style>

* {
    box-sizing: border-box;
    
}

#shadow-image {
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 10px;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
</style>
      </head>
      <body>
          <form>
               Device Name: <input type="text" name="device-name">
               
               
               Device Type: 
               <select name="device-type">
                     <option value=""></option>
                     <?=getDeviceTypes()?>
               </select>
               
               <input type="checkbox" name="available"> Available 
               
               <br>
               <input type="radio" name="order-by" value="price"> Price 
               <input type="radio" name="order-by" value="deviceName"> Name
               <br>
               <input type="submit" value="Search" name="submit">
          </form>
          
          <?=displayDeviceList()?>
     
  
  
   <footer>
                 <fieldset>
			<legend><strong>About Us:</strong></legend>
			<p> Tech Devices </p>
			<p>CST 336 </p>
			<p>Spring 2018 Website Inventory Project</p>
			<strong> Disclaimer:</strong>The information in this webpage is 
			fictitious. <br />
			It is used for academic purposes only.
            
        

    </body>
</html>
		
		
        
	