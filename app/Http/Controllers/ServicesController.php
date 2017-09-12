<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::paginate();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = new Services();
        return view('services.create', compact('services'));
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

        $this->validate($request,[
            'imagen' => 'image|mimes:jpg,jpeg,png',
            ]);

        if($request->file('imagen')){
            //capturando imagen
            $img = $request->file('imagen');
            //obtener nombre
            $file_route = $img->getClientOriginalName();
            //almacenamiento
            Storage::disk('imagenIndex')->put($file_route,file_get_contents($img->getRealPath()));

        }else{
        $file_route= "no-disponible.png";
    }

    Services::create([
        'imagen' => $file_route,
        'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/services')->with('mensaje', 'creacion exitosa');
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
        $services = Services::findOrFail($id);
        return view('services.edit', compact('services'));
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

        $this->validate($request,[
            'imagen' => 'image|mimes:jpg,jpeg,png',
            ]);

        if ($request->file('imagen')) {
            #captura de imagen
            $img = $request->file('imagen');
            #optener nombre de archivo
            $file_route = $img->getClientOriginalName();
            #alamcenar imagen
            Storage::disk('imagenIndex')->put($file_route,file_get_contents($img->getRealPath()));

        }else{
            $file_route = "no-disponible.png";
        }

        $services = Services::findOrFail($id);
        $services->update([
            'imagen'=> $file_route,
            'descripcion' => $request->input('descripcion'),
            ]);

        return redirect('/services')->with('mensaje', 'cambios efectuados exitosamente');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Services::destroy($id);
        return redirect('/services')->with('mensaje', 'eliminado');
    }
}
