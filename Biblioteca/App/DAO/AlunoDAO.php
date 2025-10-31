<?php
namespace App\DAO;


use App\Model\Aluno;



class AlunoDAO
{

    public function save(Aluno $model): Aluno
    {
            return ($model->id == null) ? $this->insert($model) : $this->update($model);
    }



    public function insert(Aluno $model) : Aluno
    {
        return new Aluno();
    }


    public function update(Aluno $model) : Aluno
    {
        return new Aluno();
    }

    public function selectById(int $id) :?Aluno
    {
        return new Aluno(); 
    }


    public function select(): array
    {
        return [];
    }

    public function delete(int $id)
    {
        return false;
    }


}