<?php
include ("conect/conect.php");



if($page == "professor"){
    $consulta = "SELECT professor.id,professor.nome,sala.nomeSala,sala.idSala FROM Professor INNER JOIN sala on professor.turmaProfessor = sala.idSala";

}elseif ($page == "aluno"){
    $consulta = "SELECT aluno.id,aluno.nome,sala.nomeSala, sala.idSala FROM aluno INNER JOIN sala on aluno.turmaAluno = sala.idSala";
}elseif($page == "sala"){
    $consulta = "SELECT * FROM sala";
}
$read = $conn->query($consulta) or die ($mysqli->error);
