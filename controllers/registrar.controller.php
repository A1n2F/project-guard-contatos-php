<?php
    
    require '../Core/Validacao.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $database = new Core\Database($config['database']);

        $validacao = Core\Validacao::validar([
            'nome' => ['required'],
            'email' => ['required', 'email', 'unique:usuarios'],
            'senha' => ['required', 'min:8', 'max:30', 'strong']
        ], $_POST);

        if($validacao->naoPassou()) {
            view('registrar');

            exit();
        }

        $database->query(
            query: "INSERT INTO usuarios ( nome, email, senha ) VALUES ( :nome, :email, :senha )",
            params: [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
            ]
        );

        flash()->push('mensagem', 'Registrado com sucesso!');

        header('location: /login');
        exit();
    
    }

    view('registrar')
?>