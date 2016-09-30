<?php
	$link = mysqli_connect("mysql.hostinger.es", "u923585965_root", "Informatica", "u923585965_quiz");
	if(!$link){
		echo "Fallo al conectar a MySQL:" . $link->connect_error;
		mysqli_close($link);
	}
	
	$laespecialidad= $_POST[Especialidad];
	if(strnatcasecmp($laespecialidad,"Otra...")==0){
		$laespecialidad= $_POST[otraEspec];
	}
	
	$sql="INSERT INTO usuario VALUES ('$_POST[nombreyapellidos]','$_POST[correo]','$_POST[password]','$_POST[numtelefono]','$laespecialidad','$_POST[intereses]',NULL,NULL)";
	if (!mysqli_query($link ,$sql)){
		die('Error al insertar tupla: ' . mysqli_error($link));
	}
	echo "El registro se ha completado con éxito";
	
	echo "<p> <a href='VerUsuarios.php'> Ver registros </a>";
	mysqli_close($link);
?>