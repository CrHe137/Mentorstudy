<?php
// Conecta a la base de datos
$servername = "sql9.freesqldatabase.com";
$username = "sql9600548";
$password = "vRsFe9CJCt";
$dbname = "sql9600548";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Obtén los datos del formulario
$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];
$EMAIL = $_POST["email"];
$TIPOUSUARIO = $_POST["tipousuario"];

// Inserta los datos en la tabla
$sql = "INSERT INTO usuarios (usuario, password, email, tipousuario)
        VALUES ('$USUARIO', '$PASSWORD', '$EMAIL', '$TIPOUSUARIO')";
if ($conn->query($sql) === TRUE) {
  echo "Usuario creado con exito!!!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>