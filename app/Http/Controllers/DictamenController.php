<?php

namespace App\Http\Controllers;

use App\Models\Dictamenes;
use Illuminate\Http\Request;
// use Flasher\Prime\FlasherInterface;
// use Flasher\Toastr\Prime\ToastrFactory;

class DictamenController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }


    public function index()
    {
        //Prevent flash messages showing again when clicking the back button
        header('Cache-Control: no-store, private, no-cache, must-revalidate');
        header('Cache-Control: pre-check=0, post-check=0, max-age=0, max-stale = 0', false);

        $dictamenes = Dictamenes::orderByDesc('id')->get();
        return view('dictamen.index', compact('dictamenes'));
    }


    public function create()
    {
        return view('dictamen.create');
    }


    public function store(Request $request)
    {
        $dictamen = new Dictamenes();

        $dictamen->nro_dictamen = $request->nro_dictamen;
        $dictamen->expediente = $request->expediente;
        $dictamen->asunto = $request->asunto;
        $dictamen->monto = $request->monto;
        $dictamen->fecha_ingreso = $request->fecha_ingreso;
        $dictamen->fecha_salida = $request->fecha_salida;

        $dictamen->save();

        $request->session()->flash('success', 'Dictamen agregado con éxito!');

        return redirect('/');
    }


    public function show($id)
    {
        //Prevent flash messages showing again when clicking the back button
        header('Cache-Control: no-store, private, no-cache, must-revalidate');
        header('Cache-Control: pre-check=0, post-check=0, max-age=0, max-stale = 0', false);

        $dictamen = Dictamenes::find($id);
        return view('dictamen.show', compact('dictamen'));
    }


    public function edit($id)
    {
        $dictamen = Dictamenes::find($id);
        return view('dictamen.edit', compact('dictamen'));
    }

    
    public function update(Request $request, $id)
    {
        $dictamen = Dictamenes::find($id);

        $dictamen->nro_dictamen = $request->nro_dictamen;
        $dictamen->expediente = $request->expediente;
        $dictamen->asunto = $request->asunto;
        $dictamen->monto = $request->monto;
        $dictamen->fecha_ingreso = $request->fecha_ingreso;
        $dictamen->fecha_salida = $request->fecha_salida;

        $dictamen->save();

        $request->session()->flash('success', 'Dictamen editado con éxito!');

        return redirect(route('dictamen.show', $dictamen->id));
    }


    public function destroy(Request $request, $id)
    {
        $dictamen = Dictamenes::find($id);
        $dictamen->delete();
        
        $request->session()->flash('delete', 'Se ha eliminado el registro');
        return redirect(route('dictamen.index'));
    }
}
