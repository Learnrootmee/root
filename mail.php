<?php 
$name = $_POST['name']
$emai = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']



$mailheader = "From:". $name. "<". $email.">\r\n";

$recipient = "learnflyonsky@gmail.com" ;

mail($recipient, $subject, $message, $mailheader)
or die("Error");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Mail</title>
</head>
<body>
  
<h1>Contact Me</h1>
<p>Thanks For Contact us your maill seccessfuly sent</p>

</body>
</html>

';


?>
