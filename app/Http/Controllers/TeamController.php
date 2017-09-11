<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::paginate();
        return view('team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = new About();
        return view('team.create', compact('team'));
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
            'imagen-file' => 'image|mimes:jpg,jpeg,png'
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

        Team::create([
            'imagen' => $file_route,
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/index')->with('mensaje', 'Creacion exitosa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('team.edit', compact('team'));
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
            'imagen-file' => 'image|mimes:jpg,jpeg,png'
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

        $service = Services::findOrFail($id);
        $service->update([
            'imagen' => $file_route,
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/about')->with('mensaje', 'Cambios efectuados exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::destroy($id);
        return redirect('/team')->with('mensaje', 'Eliminado exitosamente');
    }
}
