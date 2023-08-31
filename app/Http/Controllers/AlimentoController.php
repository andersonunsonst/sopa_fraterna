<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AlimentoController extends Controller
{
    
    public function index()
    {
        $Alimento = Alimento::all();
        return view('dashboard.alimento.index', ['alimentos'=>$Alimento]);
    }

    public function create()
    {
        return view('dashboard.alimento.create');
    }

    public function edit($alimento_id)
    {
        $alimento = Alimento::find($alimento_id);

        return view('dashboard.alimento.edit', ['alimento'=>$alimento]);
    }

    public function update(Request $request, $alimento_id)
    {
        $data = $request->all();
        $alimento = Alimento::find($alimento_id);
        $alimento->update($data);
        return redirect('/alimento')->with('message', 'Alimento atualizado com sucesso!');
    }

    public function save(Request $request){
        $data = $request->all();
        $data['validade']  = Carbon::parse($data['validade'])->format('Y-m-d');
        $alimento = new Alimento();
        $alimento->create($data); 
        return redirect('/alimento')->with('message', 'Alimento criado com sucesso!');
    }

    public function destroy($alimento_id){
  
        $alimento =  Alimento::find($alimento_id);
        $alimento->delete();
        return redirect('/alimento')->with('message', 'Alimento removido com sucesso');
    }
}
