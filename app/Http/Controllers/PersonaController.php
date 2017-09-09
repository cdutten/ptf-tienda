<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personas');
    }

    public function add(Request $request)
    {

        $this->validate($request, [
            'nombre' => 'required|max:50',
            'dni' => 'required|max:50',
            'edad' => 'required|min:10',
            'trabajo' => 'required',
        ]);

        productos::create([
            'nombre' => $datos['nombre'],
            'dni' => $datos['dni'],
            'edad' => $datos['edad'],
            'trabajo' => $datos['precio'],
          ]);

    	return redirect()->to('admin');
    }
}
