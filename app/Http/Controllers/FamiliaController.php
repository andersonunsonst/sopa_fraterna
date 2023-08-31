<?php

namespace App\Http\Controllers;

use App\Models\Familia;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    
    public function index()
    {
        $Familias = Familia::all();
        return view('dashboard.familia.index', ['familias'=>$Familias]);
    }

    public function create()
    {
        return view('dashboard.familia.create');
    }

    public function edit($Familia_id)
    {
        $Familia = Familia::find($Familia_id);

        return view('dashboard.familia.edit', ['familia'=>$Familia]);
    }

    public function update(Request $request, $Familia_id)
    {
        $data = $request->all();
        $Familia = Familia::find($Familia_id);
        $Familia->update($data);
        return redirect('/familia')->with('message', 'Familiar atualizado com sucesso!');
    }

    public function save(Request $request){
        $data = $request->all();
        $Familia = new Familia();
        $Familia->create($data); 
        return redirect('/familia')->with('message', 'Familiar criado com sucesso!');
    }

    public function destroy($Familia_id){
  
        $Familia =  Familia::find($Familia_id);
        $Familia->delete(); 
        return redirect('/familia')->with('message', 'Familiar removido com sucesso');
    }
}
