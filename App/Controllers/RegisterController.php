<?php

namespace App\Controllers;

use Core\Database;
use Core\Validacao;

class RegisterController {
    public function index() {
        return view('registrar');
    }

    public function register() {
        $validacao = Validacao::validar([
            'nome' => ['required'],
            'email' => ['required', 'email', 'unique:usuarios'],
            'senha' => ['required', 'min:8', 'max:30', 'strong']
        ], $_POST);

        if($validacao->naoPassou()) {
            return view('registrar');
        }

        $database = new Database(config('database'));

        $database->query(
            query: "INSERT INTO usuarios ( nome, email, senha ) VALUES ( :nome, :email, :senha )",
            params: [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
            ]
        );

        flash()->push('mensagem', 'Registrado com sucesso!');

        return redirect('/login');
    }
}



?>