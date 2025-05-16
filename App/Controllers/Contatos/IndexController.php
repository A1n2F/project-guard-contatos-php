<?php

namespace App\Controllers\Contatos;

use App\Models\Contato;

class IndexController {
    public function __invoke() {
        $contatos = Contato::all(request()->get('pesquisar', null));
        
        $contatoSelecionado = $this->getContatoSelecionado($contatos);

        if(!$contatoSelecionado) {
            return view('contatos/nao-encontrado');
        }

        return view('contatos/index', [
            'user' => auth(),
            'contatos' => $contatos,
            'contatoSelecionado' => $contatoSelecionado
        ]);
    }

    private function getContatoSelecionado($contatos) {
        $id = request()->get('id', (sizeof($contatos) > 0 ? $contatos[0]->id : null));

        $filtro = array_filter($contatos, fn($c) => $c->id == $id);
        return array_pop($filtro);
    }
}



?>