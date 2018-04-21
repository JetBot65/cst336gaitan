<?php
session_start();   //starts or resumes a session

function loginProcess() {

    if (isset($_POST['loginForm'])) {  //checks if form has been submitted
    
        include 'database.php';
        $conn = getDatabaseConnection();
      
            $username = "admin";
            $password = sha1($_POST['password']);
            
            $sql = "SELECT *
                    FROM Admin
                    WHERE username = :username 
                    AND   password = :password ";
            
            $namedParameters = array();
            $namedParameters[':username'] = $username;
            $namedParameters[':password'] = $password;

            $stmt = $conn->prepare($sql);
            $stmt->execute($namedParameters);
            $record = $stmt->fetch();
            
            if (empty($record)) {
                
                echo "Wrong Username or password";
                
            } else {
                
               $_SESSION['username'] = $record['username'];
              // $_SESSION['adminName'] = $record['firstName'] . "  " . $record['lastName'];
               //echo $record['firstName'];
               header("Location: admin.php"); //redirecting to admin.php
                
            }
           // print_r($record);
    }
}

?>

<!DOCTYPE html>:
<html>
    <head>
        <title> Admin Login  </title>
        
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>  
       	<header><img src="img/server.jpg" alt="picture of server" class="center"></header>
    </head>
    <body>
            <h1> Admin Login </h1>
            <div class ="main">
                
                <form method ="Post">
                    
                Username: <input type="text" name="username" /> <br />
                Password: <input type="password" name="password" /> <br />
                
                <input type="submit" name="loginForm" value="Login!"/>
                
            </form>
           
            <br />
            
            <?=loginProcess()?>
             </div>
    </body>
</html>