<?php

namespace App\Controllers\Contatos;


class CriarController {
    public function index() {
        return view('contatos/criar');
    }

    public function store() {
        dd($_POST);
    }
}


?>