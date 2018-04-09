<?php
// starts connection
session_start();

function loginProcess() {
    
    //checks for login process
    if (isset($_POST['loginform'])){
        
        include 'database.php';
        $conn =getDatabaseConnection();
        
            $username = 'admin';
            $password = sha1($_POST['password']);
            
            
            $sql = "SELECT * 
                    FROM Admin
                    WHERE username = :username
                    AND password   = :password";
                    
            $namedParameters = array();
            $namedParameters [':username'] = $ussername;
            $namedParameters [':password'] = $password;
            
            $stmt = $conn->prepare($sql);
            $stmt->execute($namedParameters);
            $record = $stmt->fetch();
            
            if (empty($record)){
                
                echo "Wrong Username or Password";
            } else {
                
                $_SESSION['username'] =$record['username'];
                
                //redirect to admin.php
                header("Location: admin.php");
            }           
            
            
        
    }
    
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login </title>
        <link href="css/styles.css "rel="stylesheet" type="text/css"/>
        <header><img src="img/server.jpg" alt="picture of server" class="center"></header>
        </head>
    <body>
        <h1> Admin Login</h1>
        <div class = "main">
            
            <form method ="POST">
                
                Username: <input type="text"name="username" /> <br /> 
                Password: <input type="text"name="password" /> <br /> 
                
                <input type="submit" name="LoginForm" value="Login!"/>
                </form>
                
                <br />
                <?=loginProcess()?>
                </div>
    </body>
</html>