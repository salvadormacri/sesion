<html>
 <body>
     Bienvenido<br>
     <?php
         $usuario = $_POST["usuario"];
       $contrasena = $_POST ["contrasena"];

        if (($usuario == "SEPTIMO") & ($contrasena == "Murialdo12"))
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
