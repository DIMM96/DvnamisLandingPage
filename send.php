<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$body="From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";

$to = "contacto@dvnamis.com";
$subject="Info Dvnamis";
if(mail($to,$subject,$body) and (!empty($_POST["email"])))
    {
      $flag=1;
    } 
    else 
    {
      $flag=0;
    }
?>

 <?php if(($flag=1)) { ?>
  <html>
<body>
Mensaje Enviado.<br> <?php echo $_POST["name"]; ?>, pronto nos comunicaremos contigo al siguiente número, <?php echo $_POST["phone"]; ?>, o te escribiremos al siguiente email, <?php echo $_POST["email"]; ?>.
<br>Mensaje enviado: <?php echo $_POST["message"]; ?>.
<a href='index.html'><br>Click Aquí</a> para regresar a la página.
</body>
</html>
      <?php } else { ?>
        <html>
<body>
No se ha podido mandar el mensaje. Por favor, inténtalo más tarde.
<a href='index.html'><br>Click Aquí</a> para regresar a la página.
</body>
</html>

      <?php } ?>

