<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = \App\Categoria::get();
        return view('categoria.index', compact('categorias'));
    }
    
    Public function create(){
        return view('categoria.create');
    }
}
