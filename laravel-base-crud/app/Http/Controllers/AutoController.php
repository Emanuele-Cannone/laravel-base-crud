<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function indexAuto(){
        $data=[
            'saluto' => 'ciao io sono la pagina auto'
        ];
        return view('auto', $data);
    }
}
