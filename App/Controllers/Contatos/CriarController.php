<?php

namespace App\Controllers\Contatos;

use Core\Database;
use Core\Validacao;

class CriarController {
    public function index() {
        return view('contatos/criar');
    }

    public function store() {
        $validacao = Validacao::validar([
            'nome' => ['required', 'min:3', 'max:20'],
            'status' => ['required'],
            'telefone' => ['required'],
            'email' => ['required', 'email'],
        ], $_POST);

        if($validacao->naoPassou()) {
            return view('contatos/criar');
        }

        $database = new Database(config('database'));

        $database->query(
            "INSERT INTO contatos (usuario_id, nome, status, telefone, email, data_criacao) 
            VALUES (:usuario_id, :nome, :status, :telefone, :email, :data_criacao)",
            params: [
                'usuario_id' => auth()->id,
                'nome' => $_POST['nome'],
                'status' => $_POST['status'],
                'telefone' => $_POST['telefone'],
                'email' => $_POST['email'],
                'data_criacao' => date('Y-m-d H:i:s'),
            ]
        );

        flash()->push('mensagem', 'Contato criado com sucesso!');
        return redirect('/contatos');
    }
}


?>