<?php
$targetDir = "uploaded/";
$targetFile = $targetDir.basename($_FILES["file"]["name"]);
if(move_uploaded_file($_FILES["file"]["tmp-name"], $targetFile)){
    echo "The File ".basename($_FILES["file"]["name"])." has been uploaded.";
}else{
    echo "File not uploaded";
}

