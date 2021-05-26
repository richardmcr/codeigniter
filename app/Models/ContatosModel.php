<?php

namespace App\Models;

use CodeIgniter\Model;

class ContatosModel extends Model
{
    protected $table = 'contato';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['nome', 'sobrenome', 'telefone', 'email', 'ra'];

    public function getContatos($id = false)
    {
        if ($id === false)
        {
            return $this
            ->orderBy('nome', 'asc')
            ->findAll();
        }

        return $this->asArray()
                    ->where(['id' => $id])
                    ->first();
    }
}