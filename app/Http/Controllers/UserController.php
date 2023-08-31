<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $you = Auth()->user();
        return view('dashboard.usuarios.index', ['users'=>$users, 'you'=>$you]);
    }

    public function create()
    {
        return view('dashboard.usuarios.create');
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);

        return view('dashboard.usuarios.edit', ['user'=>$user]);
    }

    public function update(Request $request, $usuario_id)
    {
        $data = $request->all();
        $user = User::find($usuario_id);
        $user->update($data);
        return redirect('/usuarios')->with('message', 'Usuário atualizado com sucesso!');
    }

    public function save(Request $request){
        $data = $request->all();
        $user = new User();
        $user->create($data); 
        return redirect('/usuarios')->with('message', 'Usuário criado com sucesso!');
    }

    public function destroy($usuario_id){
  
        $user =  User::find($usuario_id);
        $user->delete(); 
        return redirect('/usuarios')->with('message', 'Usuário removido com sucesso');
    }
}

