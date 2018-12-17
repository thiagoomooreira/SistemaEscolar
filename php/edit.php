<?php

include("conect/conect.php");

$id = $_GET['id'];
if($page == "professor"){
    $queryRead= $conn->query("SELECT professor.id,professor.nome,sala.nomeSala,sala.idSala FROM Professor INNER JOIN sala on professor.turmaProfessor = sala.idSala WHERE professor.id='$id'")or die($mysqli->error);
}elseif ($page == "aluno"){
    $queryRead= $conn->query("SELECT aluno.id,aluno.nome,sala.nomeSala, sala.idSala FROM aluno INNER JOIN sala on aluno.turmaAluno = sala.idSala WHERE aluno.id='$id' ")or die($mysqli->error);
}
$dado = $queryRead->fetch_array();

$queryValida = false;
if($_POST){
    if($page == "professor"){
        $nome = $_POST['nome'];
        $turma = $_POST['turma'];
        $query = "UPDATE Professor SET nome='$nome', turmaProfessor='$turma' WHERE id='$id'";
    }elseif ($page == "aluno"){
        $nome = $_POST['nome'];
        $turma = $_POST['turma'];
        $query = "UPDATE aluno SET nome='$nome', turmaAluno='$turma' WHERE id='$id'";
    }

    $queryUpdate = $conn->query($query);
    if($queryUpdate){
        $queryValida=true;
    }
}