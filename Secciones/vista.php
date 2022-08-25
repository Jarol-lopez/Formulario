<?php 

$conexion=mysqli_connect('localhost','id19439236_ingresar','Wu88y/WhoevDKY(t','id19439236_root');


 ?>

<?php 

echo ('Registro de la Base de datos');


 ?>
</br>
</br>

<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
            <td>apellido</td>
            <td>DNI</td>
            <td>fecha_nacimiento</td>
			<td>correo</td>	
		</tr>

		<?php 
		$sql="SELECT * from registros_usuarios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
            <td><?php echo $mostrar['DNI'] ?></td>
            <td><?php echo $mostrar['fecha_nacimiento'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
   
  
</body>
</br>
</br>
<form action=".." method="post">
   <button type="submit" name="accion" value ="Borrar" class="btn btn-danger">VOLVER</button>
   </form>
   
</html>
