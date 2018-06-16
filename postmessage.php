<?php
         if(isset($_POST["submit"])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "budget";

            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $message=$_POST['message'];

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO `procomplains`(`id`, `name`,  `phone`, `complain`) VALUES (null,'$name','$phone','$message')";
            if (mysqli_query($conn, $sql)) {
               echo "Message Sent successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>