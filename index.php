<!-- * Login php mysql para web: * Php mysql login, * Copyright 2015 bloguero-ec. * Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com) *-->
<?php include('conexion.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="estilo.css">
<title>GML Digital - Ingreso</title>
</head>

 <style type="text/css">
	body{background-color:#bd5d38;   font-family: 'Muli', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; }


</style>

<body>
   <form name="login_user" id="form1" method="POST" action=""> 
   <div>
   <?php
 
if(isset($_POST['login']))
{
	/*Validamos que todos los campos esten llenos correctamente*/
	if(($_POST['nick'] != '') && ($_POST['pass'] != '') )
	{
 
	$nick= $_POST['nick'];
	$pass= $_POST['pass'];
	$b_user=mysql_query("SELECT * FROM usuarios WHERE nick='$nick'");   
	$ses = @mysql_fetch_assoc($b_user) ;
	if(@mysql_num_rows($b_user))
	{
		if($ses['pass'] == $pass)
		{   
			$_SESSION['id']=        $ses["id"];
		   $_SESSION['celular']= $ses["celular"];
			$_SESSION['nick']=  $ses["nick"];
			$_SESSION['mail']=  $ses["mail"];
			$_SESSION['nombre']=  $ses["nombre"];
		}
		else
		{
			echo '<h5>Contraseña incorrecta.</h5>';
		}
	}
	else
	{
		echo '<h5>Nombre de Usuario incorrecto.</h5>';
	}
	}
	else
	 
	echo '<h5>Deberas llenar todos los campos.</h5>';
	 
	}
	 
if(isset($_GET['modo']) == 'desconectar')
{
	session_destroy();
	echo '<meta http-equiv="Refresh" content="2;url=index.php"> ';
	exit ("Espere un momento...");
}
	 
if(isset($_SESSION['id']))
{
	echo '<meta http-equiv="Refresh" content="2;url=nube.php"> ';
	exit ('Espere un momento...');
 
}
else
{
?>
	</div>
	<div>
		<center><img src="img/login.png" width="150px" height="150px"></center><br>
		<input type="text" style="text-align: center;" name="nick" id="login_username" class="field required" placeholder="Usuario" title="Ingrese su nombre de usuario" />
	</div>            
 
	<div>
		<input type="password" style="text-align: center;" name="pass" id="login_password" class="field required" placeholder="**********" title="Clave requerida" />


	</div>            
	 
	<div style="text" class="submit"><br><br>
		<input type="submit" name="login"  tabindex="6" value="Identificarse" />
  
		 
	</div>
	 

   
</form>   
<?php
}
?>
</body>
</html>