<?php
include ("conect/conect.php");

if($page == "professor"){
    $nome = $_POST["nome"];
    $turma = $_POST["turma"];
    $query = "INSERT INTO Professor(nome,turmaProfessor) VALUES ('$nome','$turma')";
}elseif ($page == "aluno"){
    $nome = $_POST["nome"];
    $turma = $_POST["turma"];
    $query = "INSERT INTO aluno(nome,turmaAluno) VALUES ('$nome','$turma')";
}

$create = $conn->query($query) or die($mysqli->error);






