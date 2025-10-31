<?php
namespace App\Controller;





use App\Model\Aluno;

class AlunoController
{
    public static function cadastro()
    {
        echo "vou mostrar o formulário a depender do método HTTP";
        
        $model = new Aluno();
        $model->id = 8;
        $model->nome = "Aluno Teste";
        $model->ra = "RA123456";
        $model->curso = "Curso Teste";
        $model->save();
    }

    public static function listar()
    {
        echo "listagem de alunos";
        $aluno = new Aluno();
        $aluno->getAllRows();

    }


}