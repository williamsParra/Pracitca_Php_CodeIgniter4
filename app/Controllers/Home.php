<?php

namespace App\Controllers;
use App\Models\PeliculaModel;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function inventario(){
        $peli = new PeliculaModel();
        //tomando todas las peliculas y mandandolas a la vista
        $datos = ['peliculas'=>$peli->findAll()];
        return view('inventario',$datos);
    }
}
