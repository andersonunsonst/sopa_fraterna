<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Models\Cesta;
use App\Models\Familia;
use Illuminate\Http\Request;

class CestaController extends Controller
{
    
    public function index()
    {
        $Cestas = Cesta::all();
     
        return view('dashboard.cesta.index', ['cestas'=>$Cestas]);
    }

    public function create()
    {
        $alimentos = Alimento::pluck('nome', 'id');
        return view('dashboard.cesta.create', [ 'alimentos'=>$alimentos]);
    }

    public function edit($Cesta_id)
    {
        $Cesta = Cesta::find($Cesta_id);

        return view('dashboard.cesta.edit', ['cesta'=>$Cesta]);
    }

    public function update(Request $request, $Cesta_id)
    {
        $data = $request->all();
        $Cesta = Cesta::find($Cesta_id);
        $Cesta->update($data);
        return redirect('/cesta')->with('message', 'colaborador atualizado com sucesso!');
    }

    public function save(Request $request){
        $data = $request->all();
     
        $alimento = Alimento::find($data['alimento_id']);

        $cesta = Cesta::find(1);
        $cesta->alimentos()->attach($alimento);
  

        return redirect('/cesta')->with('message', 'colaborador criado com sucesso!');
    }

    public function destroy($Cesta_id){
  
        $Cesta =  Cesta::find($Cesta_id);
        $Cesta->delete(); 
        return redirect('/cesta')->with('message', 'colaborador removido com sucesso');
    }
}
