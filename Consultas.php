<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "pruebadeconexion";
$conn = new mysqli($servername, $username, $password, $dbname);


// Obtener datos del formulario

$nombre = $_POST ["nombre"];

//Consulta para Obstener todos los registros
$sql= "SELECT * FROM conexion ORDER BY nombre ";

$resul = $conn-> query($sql);


if ($resul->num_rows > 0){
    while ($row = $resul->fetch_assoc()){
        echo "id:" . $row["id"] . "<br>";
        echo "nombre:" . $row["nombre"] . "<br>";
        echo "email:" . $row["email"] . "<br>";
        echo "telefono:" . $row["telefono"] . "<br>";

        echo "<br>";


    }
} else {
	echo "No se encontraron registros " . $sql . "<br>" . $conn->error;
}
?>

