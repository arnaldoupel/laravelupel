<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Http\Requests\EstudianteRequest;

class EstudianteController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        
		$estudiantes= Estudiante::orderBy('id','ASC')->paginate();
		return view ('Estudiante.index', compact ('estudiantes')); 	
    }

    public function create()
    {
        
       return view ('Estudiante.create');  
    }

  public function store(EstudianteRequest $request)
    {
        
       
       $estudiantes= new Estudiante;
       $estudiantes->cedula=$request->cedula;
       $estudiantes->email=$request->email;
       $estudiantes->primer_nombre=$request->primer_nombre;
       $estudiantes->save();  

        return Redirect()->route('Estudiantes.index')  
                         ->with('info', 'el estudiante fue guardado'); 
    }




    public function edit($id)
    {
        
        $estudiantes= Estudiante::find($id);
        return view ('Estudiante.edit', compact ('estudiantes'));  
    }


 public function update(EstudianteRequest $request, $id)
    {
        
       $estudiantes= Estudiante::find($id);
       $estudiantes->cedula=$request->cedula;
       $estudiantes->email=$request->email;
       $estudiantes->primer_nombre=$request->primer_nombre;
       $estudiantes->save();  

        return Redirect()->route('Estudiantes.index')  
                         ->with('info', 'el estudiante fue Actualizado');  
    }



    public function show($id)
    {
        
        $estudiantes= Estudiante::find($id);
        return view ('Estudiante.show', compact ('estudiantes'));  
    }


public function destroy($id)
    {
        
        $estudiantes= Estudiante::find($id);
        $estudiantes->delete();
        return back()->with('info', 'el estudiante fue eliminado');  
    }

}
