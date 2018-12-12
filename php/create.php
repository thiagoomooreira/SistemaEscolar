<?php
include ("conect/conect.php");

$nome = $_POST["nome"];
$serie = $_POST["serie"];

$query = "INSERT INTO aluno(nome,serie) VALUES ('$nome','$serie')";
$create = $conn->query($query) or die($mysqli->error);






