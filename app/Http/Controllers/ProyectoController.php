<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
{
    public function index()
    {
        // $proyectos = DB::table('proyectos')->get();
        $proyectos = Proyecto::all();
        return view('projects/index', ['proyectos' => $proyectos]); //para que sera esto ????
    }


    public function create()
    {
        return view("projects.create");
    }

    public function store(Request $request)
    {
        // Crear el proyecto sin validación de datos
        Proyecto::create($request->all());

        // Redirigir con un mensaje de éxito
        return redirect('projects/')->with('success', 'Proyecto creado satisfactoriamente');
    }

    public function show($id)
    {
        //
    }

    public function edit(Proyecto $proyecto)
    {
        try {
            // Lógica para manejar el proyecto
            return view('projects.edit', ['proyecto' => $proyecto]);
        } catch (\Exception $e) {
            // Captura la excepción y la envía a la vista como error
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(Request $request, Proyecto $proyecto){
        $data = $request->all();
        $proyecto->update($data);

        return redirect('projects/')->with('info', 'Proyecto actualizado exitosamente');
    }

    // public function destroy(Proyecto $proyecto){
    //     $proyecto->delete();
    //     return redirect('projects/')->with('success', 'Proyecto eliminado exitosamente');
    //}
    
    
    public function destroy($id){
        $proyecto= Proyecto::find($id); #<-puedo buscar el id del proyecto e eliminarlo
        $proyecto->delete();
        return redirect('projects/')
        ->with('error', 'Proyecto eliminado satisfactoriamente');
    }
    
}