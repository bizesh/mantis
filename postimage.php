<?php
include("conn.php");

if(isset($_POST['but_upload'])){
 
 $name = $_FILES['file']['name'];
 $target_dir = "images/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);

 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
  // Insert record
  $query = "insert into images(imagename) values('".$name."')";
  mysqli_query($con,$query);
  
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  echo '<script language="javascript">';
  echo 'alert("Your Progress Submitted")';
  echo '</script>';

 }
 
 

 
 
}
header('Location: updateproject.php');
?>
