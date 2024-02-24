<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angolano;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = Angolano::query();

        if ($request->filled('nome')) {
            $query->where('nome', 'LIKE', '%' . $request->input('nome') . '%');
        }

        if ($request->filled('numero_bilhete')) {
            $query->where('numero_bilhete', $request->input('numero_bilhete'));
        }

        if ($request->filled('data_nascimento')) {
            $query->where('data_nascimento', $request->input('data_nascimento'));
        }

        if ($request->filled('naturalidade')) {
            $query->where('naturalidade', $request->input('naturalidade'));
        }

        if ($request->filled('sexo')) {
            $query->where('sexo', $request->input('sexo'));
        }

        if ($request->filled('altura')) {
            $query->where('altura', $request->input('altura'));
        }

        if ($request->filled('nome_pai')) {
            $query->where('nome_pai', $request->input('nome_pai'));
        }

        if ($request->filled('nome_mae')) {
            $query->where('nome_mae', $request->input('nome_mae'));
        }

        if ($request->filled('estado_civil')) {
            $query->where('estado_civil', $request->input('estado_civil'));
        }

        if ($request->filled('provincia')) {
            $query->where('provincia', $request->input('provincia'));
        }

        if ($request->filled('residencia')) {
            $query->where('residencia', $request->input('residencia'));
        }

        // Lógica semelhante para os outros campos de pesquisa

        if ($request->filled('data_emissao_inicio') && $request->filled('data_emissao_fim')) {
            $query->whereBetween('data_emissao', [$request->input('data_emissao_inicio'), $request->input('data_emissao_fim')]);
        }

        // Lógica semelhante para os outros campos de data

        $results = $query->get();

        return view('search-results', compact('results'));
    }

}
