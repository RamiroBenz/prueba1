<?php 

//Insertar todos los valores de la factura y guardarlos en la base de datos..
include 'cn.php';

$numFact = $_POST[''];
$fecha = $_POST[''];
$cliente = $_POST[''];
$codigo = $_POST[''];
$descripcion = $_POST[''];
$cant = $_POST[''];
$precio = $_POST[''];
$bon = $_POST[''];
$impBon = $_POST[''];
$subtotal = $_POST[''];
$iva = $_POST[''];
$impIva = $_POST[''];
$subtotalIva = $_POST[''];
$total = $_POST[''];

$sql = "INSERT INTO factura (,,,,,,,,,,,,,)VALUES ('$', '$','$','$','$','$','$','$','$','$','$','$','$')";

 ?>