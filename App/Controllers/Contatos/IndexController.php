<?php

namespace App\Controllers\Contatos;

use App\Models\Contato;

class IndexController {
    public function __invoke() {

        $pesquisar = isset($_GET['pesquisar']) ? $_GET['pesquisar'] : null;
        $contatos = Contato::all($pesquisar);

        $id = isset($_GET['id']) ? $_GET['id'] : (sizeof($contatos) > 0 ? $contatos[0]->id : null);

        $filtro = array_filter($contatos, fn($c) => $c->id == $id);
        $contatoSelecionado = array_pop($filtro);

        if(!$contatoSelecionado) {
            return view('contatos/nao-encontrado');
        }

        return view('contatos', [
            'user' => auth(),
            'contatos' => $contatos,
            'contatoSelecionado' => $contatoSelecionado
        ]);
    }
}



?>