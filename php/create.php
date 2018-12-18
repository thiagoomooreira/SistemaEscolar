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


    $sala = ($conn->query("SELECT * FROM sala WHERE idSala = '$turma'")->fetch_array());
    $capacidade = $sala["capacidadeAtual"] ;
    $capacidade ++;
    $update = $conn->query("UPDATE sala SET capacidadeAtual = '$capacidade' WHERE idSala = '$turma'")or die($mysqli->error);


}elseif($page == "sala"){
    $nome = $_POST['nome'];
    $capacidadeAtual = $_POST['capacidadeAtual'];
    $capacidadeTotal = $_POST['capacidadeTotal'];
    $query = "INSERT INTO sala (nomeSala,capacidadeAtual,capacidadeTotal)   VALUES ('$nome','$capacidadeAtual','$capacidadeTotal')";
}

$create = $conn->query($query) or die($mysqli->error);






