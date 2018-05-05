<?php
    include 'database.php';
    $conn = getDatabaseConnection();


function validateUploadedFile() {
    $allowedTypes = array("image/jpg","image/png");
    $allowedExtensions = array("jpg", "png");
    $allowedSize = 1024;
    $filterError = false;
    if (!in_array($_FILES["file"]["type"],  $allowedTypes ) ) {
        $filterError = "Invalid file type. <br>";
    }
    
    $fileName = $_FILES["file"]["name"];
    if (!in_array(substr($fileName,strrpos($fileName,".")+1), $allowedExtensions) ) {
        $filterError = "Invalid file extension. <br>"; 
    }
    
    if ($_FILES["file"]["size"]  > $allowedSize  ) {
        $filterError .= "File size is too big. <br>";
    }
    return $filterError;
}

if (isset($_POST['upload'])) {
    if ($_FILES["file"]["error"] > 0){
        echo "ERROR: " . $_FILES["file"]["error"]. "<br>";
    } else {
        $errors = validateUploadedFile();
        if($errors == false){
            move_uploaded_file($_FILES['file']['file_name'],'gallery/'.$_FILES["file"]["name"]);
            $sql = "INSERT INTO images (name) VALUES (:fileName) ";
          $stm=$dbConn->prepare($sql);
          $stm->execute(array (":fileName"=>$_FILES["file"]["name"]));   
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h1>Terry's Gallery</h1>
        <div class="upload-wrap">
            <form method="POST" enctype="multipart/form-data">
                <label for="file">Select a file:</label>
                <input type="file" name="file"/>
                <input type="submit" name="upload" value="upload"/>
            </form>
        </div>
        <div>
                <?php 
                  
                  $sql = "SELECT * FROM images";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                  $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  $i = 0;
                  foreach ($records as $record) {
                      echo '<img class="image-item" src="images/'.$record['name'].'">';
                      if($i % 3 ==0){
                          echo '<br>';
                      }
                      $i++;
                  }
                ?>
        </div>
    </body>
</html>