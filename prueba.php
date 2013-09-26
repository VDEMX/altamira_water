<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>..:: Soporte en L&iacute;nea ::..</title>
<?php 
session_start(); 
$cadena=mysql_connect("localhost","root","vde38ex0");
		mysql_select_db("Edifici");

if ($_SESSION['error_login']=="")
{
$_SESSION['error_login'] = "Login";
}

if ($_POST['login']=="si")
	{
	
		$usuario=$_POST['user'];
		$cuenta=$_POST['pass'];
	
		if (($usuario=="") || ($cuenta==""))
		{
			
			$_SESSION['error_login']="¡Datos en blanco!";
			$url_relativa = "prueba.php";
			header ("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']). "/" .$url_relativa);
		
		}
		else
		{
		
		$sql = mysql_query("SELECT UsuariCliente, claveCliente FROM usuaricliente WHERE UsuariCliente = '$usuario' ");
		$row = mysql_fetch_array($sql);
		
		if($row>0)
		{
			if($row[1] == $cuenta)
			{
		
			session_start();
			session_register('nombreusuario');
			$_SESSION['nombreusuario'] = $usuario;
			session_register('id_usuario');
			$_SESSION['id_usuario'] = $row[0];
			$url_relativa = "chat.php";
			header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/" .$url_relativa);
			}else{
			$_SESSION['error_login']="¡Contraseña incorrecta!";
			$url_relativa="prueba.php";
			header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) .  "/" .$url_relativa);
			}
			
			}
			else
			{
			
			$_SESSION['error_login']="¡Usuario incorrecto!";
			$url_relativa="prueba.php";
			header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/" . $url_relativa);
			
			}
			
		mysql_free_result($sql);
	}
mysql_close();
	}else{
	
session_destroy();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
<!--
body {
	background-color: #6796C2;
}
.Estilo1 {
	color: #FFFFFF;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style><head>
	<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
</head>
<body text="#000000" style="font-family:'Trebuchet MS'; font-size:12px;">
<div id="LoginUsuario" style="background-color:#FFFFFF; border:solid; border-width:0px; border-color:#000000; height:46px; width:250px; margin-left:auto; margin-right:auto;">
	<form method="post" name="form">
      <div align="center"></div>
      <table width="250" height="199" border="0" cellspacing="0" bordercolor="#6796C2">
        <tr>
          <td height="195" bgcolor="#6796C2"><div align="center"><span class="Estilo1">Usuarios Registrados</span><br />
            </div>
            <table width="100%"  border="1" cellspacing="0" bordercolor="#000000">
            <tr>
              <th scope="row"><table width="240" height="132" border="0" cellpadding="1" bordercolor="#000000">
                  <tr>
                    <td width="140" height="46" rowspan="2"><p align="center"><img src="CHAT%20PAGINA/logo2.gif" alt="" width="59" height="43" /><br/>
                    <span style="color:#FF0000;"><?php echo ($_SESSION['error_login']); ?></span></p></td>
                    <td width="45" height="42"><div align="right" class="Estilo2">Usuario:</div></td>
                    <td width="88"><input name="user" type="text" size="13" maxlength="10" align="right" style="font:'Trebuchet MS'; font-size:10px;" />
                    </td>
                  </tr>
                  <tr>
                    <td height="49"><div align="right" class="Estilo2">Constrase&ntilde;a:</div></td>
                    <td><input name="pass" type="password" size="13" maxlength="10" align="right" style="font:'Trebuchet MS'; font-size:10px;" />
                    </td>
                  </tr>
                  <tr>
                    <td height="20">&nbsp;</td>
                    <td height="20" colspan="2"><div align="left">
                        <input type="submit" name="Submit" value="Entrar" style="font:'Trebuchet MS'; font-size:9px;border-width:1px;border-style:solid;border-color:#003366; width:64px;"/>
                        <input name="login" type="hidden" value="si" />
                    </div></td>
                  </tr>
                </table></th>
            </tr>
          </table></td>
        </tr>
      </table>
	</form>
  <div align="center" class="Estilo2">Necesitas estar registrado para acceder a este servicio.<br />
    <span class="gegris18">Para obtener tu acceso, haz click<a href="VDE/contacto.html"> aqui.</a> </span></div>
</div>
</body>
</html>

</head>

<body>

</body>
</html>
