<?php
include ("conect/conect.php");

$consulta = "SELECT * FROM Aluno";
$read = $conn->query($consulta) or die ($mysqli->error);