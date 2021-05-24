<html>
 <body>
     Bienvenido<br>
     <?php
         $usuario = $_POST["usuario"];
       $contraseña = $_POST ["contraseña"];

        if (($usuario == "SEPTIMO") & ($contraseña == "Murialdo12"))
       {
        echo "Has ingresado al sistema"; 
        }

        else
        {
           echo "inicio de sesion incorrecto";
        }

     ?>
     
   </body>
</html>