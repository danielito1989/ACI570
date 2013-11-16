<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
.Estilo30 {
	font-size: 12px;
	font-weight: bold;
	text-align: right;
	font-family: Verdana, Geneva, sans-serif;
}
</style>
</head>
<?php session_start();
 
       
	
      if (isset( $_POST['usuario'] )) {
		
		$id = mysql_connect("localhost","root", "");
		mysql_select_db("users", $id);
		$consulta = "SELECT * FROM users WHERE email = '{$_POST['usuario']}' AND password = '{$_POST['password']}'";
		$datos = mysql_query($consulta, $id);
		$numDatos = @mysql_num_rows($datos);
		
		if ($numDatos <= 0) {
		echo "<script>alert('usuario o contraseña incorrectos.')</script>";
	} else {
		$_SESSION['k_username'] = $_POST['usuario'];
	}
	} 

 
?>

<body>
<table width="100%" height="725" border="0">
  <tr>
    <td height="57"><p class="Estilo30">&nbsp;</p>
      <p class="Estilo30">

            <?php
			    $id = mysql_connect("localhost", "root", "");
				mysql_select_db("users", $id);
									if (isset($_SESSION['k_username'])) {
   
										echo '<b>Usuario: '.$_SESSION['k_username'].'</b>';
										
										
										echo '<br><p><a href="logout.php">Cerrar Sesion</a></p>';
										
  
									}else{
   
										echo '<form action="index.php" method="post">
											  <h3>Acceso a Usuario </h3>
												Usuario:<br> <input type="text" name="usuario" size="20" maxlength="50" >                                
												<br><br>
												Contraseña:<br> <input type="password" name="password" size="20" maxlength="10">
												<br>
												<input type="Submit" name="ingresar" value="Ingresar">
												<br>
												<br>
									
												</form>';
										
									}
  
				?>
    </p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>