<?php

namespace App\Models;

use Core\Database;

class Contato {
    public $id;
    public $usuario_id;
    public $nome;
    public $status;
    public $telefone;
    public $email;
    public $data_criacao;

    public static function all($pesquisar = null) {
        $db = new Database(config('database'));
        
        return $db->query(
            query: "SELECT * FROM contatos WHERE usuario_id = :usuario_id " . (
                $pesquisar ? "AND nome like :pesquisar" : null
            ),
            class: self::class,
            params: array_merge(['usuario_id' => auth()->id], $pesquisar ? ['pesquisar' => "%$pesquisar%"] : [])
        )->fetchAll();
    }
}


?>