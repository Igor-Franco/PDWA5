<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;

class CadastrarController extends Controller
{
    //
    public function salvar(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'platform' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'year' => 'required|integer|min:1950|max:' . date('Y'),
            'developer' => 'required|string|max:255'
        ],
        [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser um texto.',
            'name.max' => 'O campo nome não pode ter mais que 255 caracteres.',
            'platform.required' => 'O campo plataforma é obrigatório.',
            'platform.string' => 'O campo plataforma deve ser um texto.',
            'platform.max' => 'O campo plataforma não pode ter mais que 255 caracteres.',
            'genre.required' => 'O campo gênero é obrigatório.',
            'genre.string' => 'O campo gênero deve ser um texto.',
            'genre.max' => 'O campo gênero não pode ter mais que 255 caracteres.',
            'year.required' => 'O campo ano é obrigatório.',
            'year.integer' => 'O campo ano deve ser um número inteiro.',
            'year.min' => 'O ano deve ser no mínimo 1950.',
            'year.max' => 'O ano não pode ser superior ao ano atual.',
            'developer.required' => 'O campo desenvolvedora é obrigatório.',
            'developer.string' => 'O campo desenvolvedora deve ser um texto.',
            'developer.max' => 'O campo desenvolvedora não pode ter mais que 255 caracteres.'
        ]);

        $videogame = new Videogame();
        $videogame->fill($request->all());
        $videogame->save();

        //dd($request);

        return view('cadastrosalvo');
    }
}
