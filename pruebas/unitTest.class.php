<?php
class unitTest
{
    function registrarUsuario()
    {
        require '../modelo/db.php'; // Conexión con la base de datos
        $sql = "INSERT INTO clientes (nombre,email,password) VALUES ('Prueba','Prueba','Prueba')"; // Consulta SQL
        $result = mysqli_query($db, $sql); // Se envía la consulta a la base de datos
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    function registrarCotizacion()
    {
        require '../modelo/db.php'; // Conexión con la base de datos
        $sql = "INSERT INTO cotizacion (fecha,empresa,email_contacto,telefono,material,tamano,url_imagen,precio,estado,tipo) VALUES ('Prueba','Prueba','Prueba','Prueba','Prueba','Prueba','Prueba',1,'Prueba','Prueba')"; // Consulta SQL
        $result = mysqli_query($db, $sql); // Se envía la consulta a la base de datos
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    function inicioSesion()
    {
        require '../modelo/db.php'; // Conexión con la base de datos
        $sql = "SELECT * FROM clientes WHERE email='julian@hotmail.com' AND password='1202cb962ac59075b964b07152d234b70'"; // Consulta SQL
        $result = mysqli_query($db, $sql); // Se envía la consulta a la base de datos
        $verificar = mysqli_fetch_assoc($result); // Se asigna el retorno de la base de datos a una variable
        if ($verificar) {
            return true;
        } else {
            return false;
        }
    }

}
