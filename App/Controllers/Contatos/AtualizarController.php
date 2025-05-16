<?php

namespace App\Controllers\Contatos;

use Core\Database;
use Core\Validacao;

class AtualizarController {

    public function index() {
        return view('contatos/atualizar');
    }

    public function __invoke() {
        $validacao = Validacao::validar([
            'nome' => ['required', 'min:3', 'max:20'],
            'status' => ['required'],
            'telefone' => ['required'],
            'email' => ['required', 'email'],
        ], request()->all());

        if($validacao->naoPassou()) {
            return view('contatos/atualizar');
        }
        
        $db = new Database(config('database'));

        $db->query(
            query: "UPDATE contatos 
            SET nome = :nome, status = :status, telefone = :telefone, email = :email
            WHERE id = :id",
            params: [
                'nome' => request()->post('nome'),
                'status' => request()->post('status'),
                'telefone' => request()->post('telefone'),
                'email' => request()->post('email'),
                'id' =>request()->post('id')
            ]
        );

        flash()->push('mensagem', 'Contato atualizado com sucesso!');

        return redirect('/contatos');
    }
}



?>