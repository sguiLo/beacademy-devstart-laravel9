<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index()
    {
        $users = [
            'nome' => [
             'Gustavo Oliveira',
             'Jão Lira']
        ];

        dd($users);
    }
    
    public function show($id)
    {
        dd('Id do Usuário é ' . $id);
    }
}
