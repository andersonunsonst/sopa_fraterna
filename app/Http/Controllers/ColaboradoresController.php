<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradoresController extends Controller
{
    
    public function index()
    {
        $Colaboradors = Colaborador::all();
        return view('dashboard.colaborador.index', ['colaboradores'=>$Colaboradors]);
    }

    public function create()
    {
        return view('dashboard.colaborador.create');
    }

    public function edit($colaborador_id)
    {
        $Colaborador = Colaborador::find($colaborador_id);

        return view('dashboard.colaborador.edit', ['colaborador'=>$Colaborador]);
    }

    public function update(Request $request, $Colaborador_id)
    {
        $data = $request->all();
        $Colaborador = Colaborador::find($Colaborador_id);
        $Colaborador->update($data);
        return redirect('/colaborador')->with('message', 'Colagorador atualizado com sucesso!');
    }

    public function save(Request $request){
        $data = $request->all();
        $Colaborador = new Colaborador();
        $Colaborador->create($data); 
        return redirect('/colaborador')->with('message', 'Colagorador criado com sucesso!');
    }

    public function destroy($Colaborador_id){
  
        $Colaborador =  Colaborador::find($Colaborador_id);
        $Colaborador->delete(); 
        return redirect('/colaborador')->with('message', 'Colagorador removido com sucesso');
    }
}
