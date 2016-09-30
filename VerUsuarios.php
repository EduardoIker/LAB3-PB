<?php

$link = mysqli_connect("mysql.hostinger.es", "u923585965_root", "Informatica", "u923585965_quiz");
if(!$link){
	echo 'Fallo al concectar a MySQL:' . $link->connect_error; 
        mysqli_close($link);
}
$usuarios = mysqli_query($link, "select NOMBRE_APELLIDOS, CORREO, PASSWORD, TELEFONO, ESPECIALIDAD, INTERESES from usuario" );
echo '<table border=1> <tr> <th> NOMBRE </th> <th> CORREO </th>  <th> CONTRASENA </th>  <th> TELEFONO </th>  <th> ESPECIALIDAD </th>  <th> INTERESES </th> 
</tr>';
while ($row = mysqli_fetch_array( $usuarios )) {
    echo '<tr><td>' . $row['NOMBRE_APELLIDOS'] . '</td> <td>' . $row['CORREO'] . '</td> <td>' . $row['PASSWORD'] . '</td> <td>' . $row['TELEFONO'] . '</td> <td>' . $row['ESPECIALIDAD'] . '</td> <td>' . $row['INTERESES'] .'</td> </tr>';
}
echo '</table>';
$usuarios->close();
mysqli_close($link);

?>
					