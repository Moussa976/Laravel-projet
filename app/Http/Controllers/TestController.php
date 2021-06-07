<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($nb1=null, $nb2=null) {
        if(empty($nb1) || empty($nb2)) {
            $nb1=5;
            $nb2=12;
        }
        return view('calcul', ["nb1" => $nb1, "nb2" => $nb2]);
    }

    public function form(Request $request) {
        if ($request->isMethod('post')) {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
            ]);
            $nom = $request->input('nom');
            $prenom = $request->input('prenom');
            return view('test.form', ["nom" =>$nom, "prenom" => $prenom]);
        }
        return view('test.form');
    }
}
