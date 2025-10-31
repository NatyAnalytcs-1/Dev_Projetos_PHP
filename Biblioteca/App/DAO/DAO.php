<?php
namespace App\DAO;

class DAO 
{
    protected static $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=biblioteca";
    }

}
