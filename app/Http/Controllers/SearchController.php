<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angolano;

class SearchController extends Controller
{
    public function index(Request $request)
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

        // Lógica semelhante para os outros campos de pesquisa

        if ($request->filled('data_emissao_inicio') && $request->filled('data_emissao_fim')) {
            $query->whereBetween('data_emissao', [$request->input('data_emissao_inicio'), $request->input('data_emissao_fim')]);
        }

        // Lógica semelhante para os outros campos de data

        $results = $query->get();

        return view('search-results', compact('results'));
    }
}
