<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

   


$servername = "sushilmohad.in";
$username = "sushilmm_kirtan";
$password = "kIRTAN@123";
$dbname = "sushilmm_kirtan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);








$sql = "INSERT INTO `portfolio` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message');";

if ($conn->query($sql) === TRUE) {
  echo "<script>
alert('Message Send Successfully !!');
window.location.href='index.html';
</script>";	
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>