<?php

namespace App\Http\Controllers;

use App\Models\MembroFamilia;
use Illuminate\Http\Request;

class MembroController extends Controller
{
    public function index()
    {
        $membros = MembroFamilia::all();
        return view('dashboard.membro.index', ['membros'=>$membros]);
    }

    public function create($familia_id)
    {
        return view('dashboard.membro.create', ['familia_id'=>$familia_id]);
    }

    public function edit($membro_id)
    {
        $membro = MembroFamilia::find($membro_id);

        return view('dashboard.membro.edit', ['membro'=>$membro]);
    }

    public function update(Request $request, $membro_id)
    {
        $data = $request->all();
        $membro = MembroFamilia::find($membro_id);
        $membro->update($data);
        return redirect('/membro')->with('message', 'membror atualizado com sucesso!');
    }

    public function save(Request $request){
        $data = $request->all();
        $membro = new MembroFamilia();
        $membro->create($data); 
        return redirect('familia/'.$data['familia_id'].'/membro')->with('message', 'membror criado com sucesso!');
    }

    public function destroy($membro_id){
  
        $membro =  MembroFamilia::find($membro_id);
        $membro->delete(); 
        return redirect('/membro')->with('message', 'membror removido com sucesso');
    }
}
