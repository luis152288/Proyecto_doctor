<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::paginate();
        return view('about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about= new About();
        return view('about.create',compact('about'));
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
        	'imagen-file' => 'image|mimes:jpg,jpeg,png',
        	]);
        if($request->file('imagen-file')){
        	//capturando imagen
        	$img = $request->file('imagen-file');
        	//obtener nombre
        	$file_route = $img->getClientOriginalName();
        	//almacenamiento
        	Storage::disk('imagenIndex')->put($file_route,file_get_contents($img->getRealPath()));
        }else{
        $file_route= "no-disponible.png";
    }

    About::create([
    	'imagen' => $file_route,
    	'letra' => $request->input('letra'),
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
        $about = About::findOrFail($id);
        return view('about.edit', compact('about'));
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
        	'imagen-file' => 'image|mimes:jpg,jpeg,png',
        	]);
        if ($request->file('imagen-file')) {
        	#captura de imagen
        	$img = $request->file('imagen-file');
        	#optener nombre de archivo
        	$file_route = $img->getClientOriginalName();
        	#alamcenar imagen
        	Storage::disk('imagenIndex')->put($file_route,file_get_contents($img->getRealPath()));
        }else{
        	$file_route = "no-disponible.png";
        }
        $about = About::findOrFail($id);
        $about->apdate([
        	'imagen'=> $file_route,
        	'letra' => $request->input('letra'),
        	'titulo' => $request->input('titulo'),
        	'descripcion' => $request->input('descripcion'),
        	]);

        return redirect('/about')->with('mensaje', 'cambios efectuados exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       About::destroy($id);
       return redirect('/index')->with('mensaje', 'eliminado');
    }
}
