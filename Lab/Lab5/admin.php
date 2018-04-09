<?php
session_start();

if (isset($_SESSION['username'])){
    header("location: index.php");
}
function userlist(){
    include 'database.php';
    $conn =getDatabaseConnection();
    
    $sql = "SELECT *
            FROM User ORDER By firstName";
            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchALL(PDO::FETCH_ASSOC);
    
    //print records
    
    return $records;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Main Paghe </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>  
       	<header><img src="img/server.jpg" alt="picture of server" class="center"></header>
       	
       	<script>
       	     function confirmDelete() {
       	         
       	         return confirm("Are You Sure You Want To Delete this user?");
       	     }
       	</script>
    </head>
    <body>
        
        <h1>Admin Main</h1>
        <div class= "main">
            <h2> Welcome <?=$_SESSION['adminName']?></h2>
            
            <form action="addUser.php">
                
                <input type="submit" value= "Add new User"/>
                
            </form>
            
             <form action="logout.php">
                
                <input type="submit" value="Logout!" />
                
            </form>
            
            
            
            <br />
            <?php
            
            $users = userList();
            
            foreach($users as $user){
                echo $user['id'] . "  " . $user['firstName'] . " "  . $user['lastName'];   
                
                echo "[<a href='updateUser.php?iserId=".$user['id']."'> Update </a>]";
                echo "["
            }
            
        </div>

    </body>
</html>