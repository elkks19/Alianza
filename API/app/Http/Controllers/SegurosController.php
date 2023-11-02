<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seguro;

class SegurosController extends Controller
{
    public function index()
    {
        return Seguro::all();
    }

    public function store(Request $request)
    {
        return Seguro::create($request->all());
    }

    public function show($id)
    {
        return Seguro::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $seguro = Seguro::findOrFail($id);
        $seguro->update($request->all());

        return $seguro;
    }

    public function destroy($id)
    {
        $seguro = Seguro::findOrFail($id);
        $seguro->delete();

        return 204;
    }

    public function search($nombre)
    {
        return Seguro::where('nombre', 'like', '%'.$nombre.'%')->get();
    }
}
