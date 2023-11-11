<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

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

            return redirect()->route('admin.home')->with('mensaje', 'Publicación creada exitosamente');
        } else {
            return redirect()->route('login')->with('mensaje', 'Inicia sesión como administrador para crear publicaciones');
        }
    }

        
    public function nacionales()
    {
        $publicacionesN = Post::where('categoria', 'nacional')->get();
        return view('posts.nacionales', ['publicacionesN' => $publicacionesN]);
    }

    public function internacionales()
    {
        $publicacionesI = Post::where('categoria', 'internacional')->get();
        return view('posts.internacionales', ['publicacionesI' => $publicacionesI]);
    }

    public function show($id)
    {
        $publicacion = Post::findOrFail($id);
        return view('posts.show', compact('publicacion'));
    }



}
