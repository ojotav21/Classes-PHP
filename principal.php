<?php
    include './Aluno.class.php';

    $joao = new Aluno();

    //passar os valores
    $joao->setNome("João");
    $joao->setMatricula(123456);
    $joao->setNota1(5);
    $joao->setNota2(8);
    $joao->setNotaTrab(7);

    //teste para ver se consegue acessar os valores
    //dos atributos
    echo "Nome: <b>".$joao->getNome()."</b> <br>";
    echo "Numero da Matricula: <b>".$joao->getMatricula()."</b> <br>";
    echo "Nota 1: <b>".$joao->getNota1()."</b> <br>";
    echo "Nota 2: <b>".$joao->getNota2()."</b> <br>";
    echo "Nota do Trabalho: <b>".$joao->getNotaTrab()."</b> <br> <br>";

    //chamando a função para ver se o aluno foi aprovado
    echo ($joao->notaFinal($joao->getNota1(),$joao->getNota2(), $joao->getNotaTrab())). "<br> <br>";

    echo"------------------------------------------------------------------- <br> <br>";

    $gusta = new Aluno();

    //passar os valores
    $gusta->setNome("Gustao");
    $gusta->setMatricula(234567);
    $gusta->setNota1(8);
    $gusta->setNota2(9);
    $gusta->setNotaTrab(8);

    //teste para ver se consegue acessar os valores
    //dos atributos
    echo "Nome: <b>".$gusta->getNome()."</b> <br>";
    echo "Numero da Matricula: <b>".$gusta->getMatricula()."</b> <br>";
    echo "Nota 1: <b>".$gusta->getNota1()."</b> <br>";
    echo "Nota 2: <b>".$gusta->getNota2()."</b> <br>";
    echo "Nota do Trabalho: <b>".$gusta->getNotaTrab()."</b> <br> <br>";

    //chamando a função para ver se o aluno foi aprovado
    echo ($gusta->notaFinal($gusta->getNota1(),$gusta->getNota2(), $gusta->getNotaTrab())). "<br> <br>";
   
?>