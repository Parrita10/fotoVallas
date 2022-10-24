<!-- Conexión a la base de datos -->

<?php  
    
            $server = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'fotovallas';       
            try {
                $db = mysqli_connect($server, $username, $password, $dbname);
                $db->set_charset("utf8");
            } catch (\Throwable $th) {
                echo 'No se pudo establecer conexión con la base de datos';
            }

?>