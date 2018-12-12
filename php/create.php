<?php
include ("conect/conect.php");

if($page == "professor"){
    $nome = $_POST["nome"];
    $turma = $_POST["turma"];
    $query = "INSERT INTO Professor(nome,turma) VALUES ('$nome','$turma')";
}elseif ($page == "aluno"){
    $nome = $_POST["nome"];
    $serie = $_POST["serie"];
    $query = "INSERT INTO aluno(nome,serie) VALUES ('$nome','$serie')";
}

$create = $conn->query($query) or die($mysqli->error);






