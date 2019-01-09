<!-- * Login php mysql para web: * Php mysql login, * Copyright 2015 bloguero-ec. * Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com) *-->
 
<?php
include("conexion.php");
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="estilo.css">
<title>GM Digital - Registrar cliente</title>
</head>
 
<body>
<form name="registrar" action="" id="form1" method="post" onsubmit="return validar()" />

 
    <div>
    <?php
$consulta_mysql='select * from datos'; 
$resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion); 
  
while($registro=mysql_fetch_array($resultado_consulta_mysql)){ 
   
  $v0 = "GD0"; // Codigo de usuario antes del ultimo registro. 
  $v1 = $registro['registros']; 
  $v2 = $v1+1;
  $v3 = "$v0$v2";



// CONTRASEÑA MD5
 $logitud = 6;
$psswd = substr( md5(microtime()), 1, $logitud);

}  
        



if(isset($_POST['registro']))//Validamos que el formulario fue enviado
{





    /*Validamos que todos los campos esten llenos correctamente*/
    if(($_POST['nick'] != '') && ($_POST['mail'] != '') && ($_POST['pass'] != ''))
    {
        if($_POST['pass'] != $_POST['pass'])
        {
            echo '<h5>Las contraseñas no coinciden</h5>';
        }
        else
        {
           
            $nick= limpiar($_POST['nick']);
            $mail= limpiar($_POST['mail']);
            $pass= limpiar($_POST['pass']);
            $celular = $_POST['telefono'];
            $nombre = $_POST['nombre'];
    
             
            $b_user= mysql_query("SELECT nick FROM usuarios WHERE nick='$nick'");
            if($user=@mysql_fetch_array($b_user))
            {
                echo '<h5>El nombre de usuario o el email ya esta registrado.</h5>';
                mysql_free_result($b_user); //liberamos la memoria del query a la db
            }
            else
            {
                if(validar_email($_POST['mail']))
                {
                    mysql_query("INSERT INTO usuarios (nick,mail,pass,nombre,celular) values ('$nick','$mail','$pass','$nombre','$celular')");
                    
                     mysql_query("UPDATE datos SET registros='$v2' WHERE id=1 ",$conexion);

                    header('Location: subir.php?nick='.$nick);
                   // echo "<META HTTP-EQUIV='REFRESH' CONTENT='1;URL=subir.php?nick=$nick'> ";

                }
                else
                {
                    echo '<h5>El email no es valido.</h5>';
                }
            }
        }
    }
    else
    {
        echo '<h5>Deberas llenar todos los campos.</h5>';
    }
}
?>
 


 </div>
 
        <div>
        <label for="login_username">Nombre de cliente:</label> 
        <input type="text" name="nombre" id="nombre"  class="field required" placeholder="Juan Perez" title="Ingrese un nombre y apellido del cliente." />

  </div>
     </div>
 
        <div>
        <label for="login_username">El usuario va ser:</label> 
        <input type="text" name="nick" id="nick" readonly=”readonly” class="field required" value="<?php echo $v3; ?>" title="Ingrese un nombre de usuario" />

  </div>
     
 
    <div>
        <label for="login_pass">Contraseña:</label> 
        <input type="text" value="<?php echo $psswd;?>" name="pass" id="pass" class="field required" title="Ingrese su contraseña" />
    </div>
     
   <div>
        <label for="login_mail">Correo:</label> 
        <input type="email" name="mail" id="mail" class="field required" placeholder="example@correo.com" title="Ingrese su correo" />
    </div>            
     

   <div>
        <label for="login_mail">Telefono:</label> 
        <input type="tel" name="telefono" id="telefono" class="field required" placeholder="223626462" title="Ingrese su celular" />
    </div>      
         <br>
         <span><input name="registro" type="submit" value="Registrar"  class="enviar"/>
    </span>
    </form>
 
</body>
</html>