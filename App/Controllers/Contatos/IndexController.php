<?php

namespace App\Controllers\Contatos;

class IndexController {
    public function __invoke() {
        if(!auth()) {
            return redirect('/login');
        }

        return view('contatos', [
            'user' =>auth()
        ]);
    }
}



?>