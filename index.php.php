<!DOCTYPE html>
<html>
<head>
    <title> Formulario "soporte tecnico online" </title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
 
<form method="post">
    <h1>CONTACTENOS</h1>
    <input type="text" placeholder="Nombre" name="nombre" required="">
    <input type="text" placeholder="Empresa" name="empresa" required="">
    <input type="text" placeholder="Pais" name="pais" required="">
    <input type="text" placeholder="Celular" name="celular" required="">
    <input type="email" placeholder="Email" name="email" required="">
    <textarea placeholder="Escriba su consulta" name="msg"></textarea>
    <input type="submit" name="enviar">
</form>
<?php
include("direccioncorreo.php")
?>
</body>
</html>

