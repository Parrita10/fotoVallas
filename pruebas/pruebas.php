<?php

include 'simpletest-1.2.0/autorun.php';
include 'unitTest.class.php';
require '../modelo/db.php'; // Conexión con la base de datos

class pruebasUnitariasPhp extends UnitTestCase
{

    function testClientes()
    {
        $verificar = new unitTest();
        $this->assertTrue($verificar->registrarUsuario());
    }

    function testCotizacion()
    {
        $verificar = new unitTest();
        $this->assertTrue($verificar->registrarCotizacion());
    }
    
    function testInicioSesion()
    {
        $verificar = new unitTest();
        $this->assertTrue($verificar->inicioSesion());
    }

}
