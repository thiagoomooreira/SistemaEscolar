<?php

include("conect/conect.php");

$id = $_GET['id'];

//PARA METHODS GETS
if($page == "professor"){
    $queryRead= $conn->query("SELECT professor.id,professor.nome,sala.nomeSala,sala.idSala FROM Professor INNER JOIN sala on professor.turmaProfessor = sala.idSala WHERE professor.id='$id'")or die($mysqli->error);
}elseif ($page == "aluno"){
    $queryRead= $conn->query("SELECT aluno.id,aluno.nome,sala.nomeSala, sala.idSala FROM aluno INNER JOIN sala on aluno.turmaAluno = sala.idSala WHERE aluno.id='$id' ")or die($mysqli->error);
}elseif($page == "sala"){
    $queryRead= $conn->query("SELECT * FROM sala WHERE idSala = '$id'");
}

$dado = $queryRead->fetch_array();

$queryValida = false;

//PARA METHODS POST
if($_POST){
    if($page == "professor"){
        $nome = $_POST['nome'];
        $turma = $_POST['turma'];
        $query = "UPDATE Professor SET nome='$nome', turmaProfessor='$turma' WHERE id='$id'";

    }elseif ($page == "aluno"){

        $nome = $_POST['nome'];
        $turma = $_POST['turma'];
        $aluno = ($conn->query("SELECT aluno.turmaAluno,sala.capacidadeAtual,sala.idSala FROM aluno INNER JOIN sala on aluno.turmaAluno = sala.idSala WHERE id = '$id'")->fetch_array());

        //VERIFICAR SE A SALA FOI ALTERADA
        if($aluno['turmaAluno']!= $turma){

            //DIMINUIR QUANTIDADE NA SALA ANTERIOR

            $diminuirCapacidade = $aluno['capacidadeAtual'];
            $diminuirCapacidade --;
            $update = $conn->query("UPDATE sala SET capacidadeAtual = '$diminuirCapacidade' WHERE idSala = '$aluno[idSala]'")or die($mysqli->error);

            //ALMENTAR QUANTIDADE NA SALA ALTERADA

            $alunoAlterado = $conn->query("SELECT * FROM `sala` WHERE idSala = '$turma'")->fetch_array();
            $aumentarCapacidade = $alunoAlterado['capacidadeAtual'];
            $aumentarCapacidade ++;
            $update = $conn->query("UPDATE sala SET capacidadeAtual = '$aumentarCapacidade' WHERE idSala = '$turma'")or die($mysqli->error);
        }

        //ALTERAÇÃO DO ALUNO
        $query = "UPDATE aluno SET nome='$nome', turmaAluno='$turma' WHERE id='$id'";
    }elseif ($page == "sala"){
        $nome = $_POST['nome'];
        $capacidadeAtual = $_POST['capacidadeAtual'];
        $capacidadeTotal = $_POST['capacidadeTotal'];
        $query = "UPDATE sala SET nomeSala='$nome', capacidadeAtual='$capacidadeAtual' , capacidadeTotal ='$capacidadeTotal' WHERE idSala='$id'";
    }

    $queryUpdate = $conn->query($query);
    if($queryUpdate){
        $queryValida=true;
    }
}