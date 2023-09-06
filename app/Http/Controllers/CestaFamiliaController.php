<?php

namespace App\Http\Controllers;

use App\Models\Cesta;
use App\Models\Familia;
use App\Models\MembroFamilia;
use Illuminate\Http\Request;

class CestaFamiliaController extends Controller
{
    public function index()
    {
        $membros = MembroFamilia::all();
        return view('dashboard.cestafamilia.index', ['membros'=>$membros]);
    }

    public function create($familia_id)
    {
        $cestas = Cesta::all();
        return view('dashboard.cestafamilia.index', ['familia_id'=>$familia_id, 'cestas'=>$cestas]);
    }

    public function edit($membro_id)
    {
        $membro = MembroFamilia::find($membro_id);

        return view('dashboard.cestafamilia.edit', ['membro'=>$membro]);
    }

    public function update(Request $request, $membro_id)
    {
        $data = $request->all();
        $membro = MembroFamilia::find($membro_id);
        $membro->update($data);
        return redirect('/membro')->with('message', 'membror atualizado com sucesso!');
    }

    public function save(Request $request, $familia_id){
        $data = $request->all();
        $familia = Familia::find($familia_id);
        $cesta = Cesta::find($data['cesta_id']);
        // $familia->cesta_id = $data['cesta_id'];
        // $familia->update(); 
        $familia->cestas()->attach($cesta);
        return redirect('familia')->with('message', 'Cesta vinculada');
    }

    public function destroy($membro_id){
  
        $membro =  MembroFamilia::find($membro_id);
        $membro->delete(); 
        return redirect('/membro')->with('message', 'membror removido com sucesso');
    }
}
