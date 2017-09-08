<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\carousel;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = carousel::paginate();
        return view('carousel.index', compact('carousel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carousel = new Carousel();
        return view('carousel.create', compact('carousel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_route = null;

        $this->validate($request, [
            'imagen-file' => 'image|mimes:jpg,jpeg,png',
        ]);

        if($request->file('imagen-file')){
            // Capturo la imagen
            $img = $request->file('imagen-file');
            // Obtengo el nombre real
            $file_route = $img->getClientOriginalName();
            // Almaceno la imagen en la carpeta
            Storage::disk('imagenIndex')->put($file_route,file_get_contents($img->getRealPath()));

        }else{
            $file_route = "no-disponible.png";
        }   

        Carousel::create([
            'imagen' => $file_route,
            'titulo' => $request->input('titulo'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/index')->with('mensaje', 'creacion exitosa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //preguntar por que esto es vacio
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel = Carousel::findOrFail($id);
        return view('index.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file_route = null;

        $this->validate($request, [
            'imagen-file' => 'image|mimes:jpg,jpeg,png',
        ]);

        if($request->file('imagen-file')){
            // Capturo la imagen
            $img = $request->file('imagen-file');
            // Obtengo el nombre real
            $file_route = $img->getClientOriginalName();
            // Almaceno la imagen en la carpeta
            Storage::disk('imagenIndex')->put($file_route,file_get_contents($img->getRealPath()));

        }else{
            $file_route = "no-disponible.png";
        }   

        $carousel = Carousel::findOrFail($id);
        $carousel->update([
            'imagen' => $file_route,
            'titulo' => $request->input('titulo'),
            'descripcion' => $request->input('descripcion'),
            'status' => $request->input('status'),
        ]);

        return redirect('/carousel')->with('mensaje', 'Cambios guardados satisfactoriamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carousel::destroy($id);
        return redirect('/index')->with('mensaje', 'Imagen Eliminada');
    }
}
