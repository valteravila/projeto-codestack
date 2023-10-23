<?php

namespace App\Http\Controllers;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index(){

        $livros = Livro::all();
        return response()->json($livros);

    }

    public function show($id)
{
    $livro = Livro::find($id);
    if (!$livro) {
        return response()->json(['message' => 'Livro não encontrado'], 404);
    }
    return response()->json($livro);

}
public function store(Request $request)
{
    $livro = Livro::create($request->all());
    return response()->json($livro, 201);
}

public function update(Request $request, $id)
{
    $livro = Livro::find($id);
    if (!$livro) {
        return response()->json(['message' => 'Livro não encontrado'], 404);
    }
    $livro->update($request->all());
    return response()->json($livro);
}
public function destroy($id)
{
    $livro = Livro::find($id);
    if (!$livro) {
        return response()->json(['message' => 'Livro não encontrado'], 404);
    }
    $livro->delete();
    return response()->json(['message' => 'Livro deletado']);
}
}
