<?php

 include 'dbConn.php';

 $sql = "SELECT * FROM up_files WHERE fileId = :fileId"; 
 $stmt = $dbConn->prepare($sql);
 $stmt->execute( array(":fileId"=> $_GET['fileId']));

 $stmt->bindColumn('fileData', $data, PDO::PARAM_LOB);
 $record = $stmt->fetch(PDO::FETCH_BOUND);
 
 if (!empty($record)){
    header('Content-Type:' . $record['fileType']);   //specifies the mime type
    header('Content-Disposition: inline;');
    echo $data; 
  } 

 if ($_FILES["fileName"]["error"] > 0) {
          echo "Error: " . $_FILES["fileName"]["error"] . "<br>";
        }
        
 else {
          echo "Upload: " . $_FILES["fileName"]["name"] . "<br>";
          echo "Type: " . $_FILES["fileName"]["type"] . "<br>";
          echo "Size: " . ($_FILES["fileName"]["size"] / 1024) . " KB<br>";
          echo "Stored in: " . $_FILES["fileName"]["tmp_name"];
          //comment out the code to upload the file to the database

           move_uploaded_file($_FILES["fileName"]["tmp_name"], $_FILES["fileName"]["name"]);
          // "uploadedFiles/" . $_FILES["fileName"]["name"]); 
           mkdir $username;
           move_uploaded_file($_FILES["fileName"]["tmp_name"], 
           $username . "/" . $_FILES["fileName"]["name"]); 


  function createThumbnail(){
    $sourcefile = imagecreatefromstring(file_get_contents($_FILES["fileName"]["tmp_name"]));
    $newx = 150; $newy = 150;  //new size
    $thumb = imagecreatetruecolor($newx,$newy);
    imagecopyresampled($thumb, $sourcefile, 0,0, 0,0, $newx, $newy,     
     imagesx($sourcefile), imagesy($sourcefile)); 
    imagejpeg($thumb,"thumb.jpg"); //creates jpg image file called "thumb.jpg"
    echo "<img src='thumb.jpg'/>";
    
         
   $newx = 150; $newy = 150; //new size
    if (imagesx($sourcefile) > imagesy($sourcefile)) {   // landscape orientation
            $newy = round($newx/imagesx($sourcefile) * imagesy($sourcefile));
      }
     else {   // portrait orientation 
            $newx = round($newy/imagesy($sourcefile) * imagesx($sourcefile));
      }

}


 }
 