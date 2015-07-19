<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($nome)
    {
        return view('test.index', ['nome'=>$nome]);
    }

    public function notas()
    {
        $notas = [
            0 => 'Anotação 1',
            1 => 'Conteudo',
            2 => 'Informações',
            3 => 'Fale Conosco',
            4 => 'Pesquisar'
        ];

        $texto = "Segue as informações das Notas1";

        return view('test.notas', compact('notas', 'texto') ); //['notas'=>$notas, 'texto'=>$texto]);
    }

    
}
