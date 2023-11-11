<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }

    public function index()
    {
        return view('posts.index');
    }

    public function nacionales()
    {
        return view('posts.nacionales');
    }

    public function internacionales()
    {
        return view('posts.internacionales');
    }

    public function musica()
    {
        return view('extras.musica');
    }

    /*
    El método store permite la comunicación con la base de datos, de tal manera que el usuario,
    siempre y cuando sea administrador, a través de la vista "create" va a poder almacenar datos
    en la tabla de publicaciones.
    */

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string'],
            'imagen' => ['required', 'image'],
            'categoria' => ['required', 'in:nacional,internacional'],
        ]);

        if (Auth::check() && Auth::user()->role === 'admin') {
            $imagenRuta = $request->file('imagen')->store('public/imagenes');

            $usuario = Auth::user();
            $publicacion = $usuario->posts()->create([
                'titulo' => $request->titulo,
                'descripcion' => $request->descripcion,
                'imagen' => $imagenRuta,
                'categoria' => $request->categoria,
            ]);

            return redirect()->route('posts.index')->with('mensaje', 'Publicación creada exitosamente');
        } else {
            return redirect()->route('login')->with('mensaje', 'Inicia sesión como administrador para crear publicaciones');
        }
    }


}
