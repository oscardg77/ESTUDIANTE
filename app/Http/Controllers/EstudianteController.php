<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;



class EstudianteController extends Controller
{
    public function index() {
        
        $estudiante = Estudiante::all();

        return $estudiante;
   }
          //validar
      
    public function store(Request $request){

         $datos_validados = $request->validate([

           'nombre' => 'required|min:3',

           'email' => 'required',

    ]);

          //crear

        Estudiante::create($datos_validados);

        return ['mensaje' => 'Usuario creado'];

    }

    public function show($id) {

        //buscar estudiante id

        $estudiante = Estudiante::find($id);

        //comprobar que existe estudiante

        if(!$estudiante){

          return ['error' => 'Estudiante no encontrado'];

        }

        return ['datos' => $estudiante];
    }


    
    public function update($id, Request $request) {

        //validar los datos

        $datos_validados = $request->validate([

            'nombre' => 'min:3',
 
            'email' => 'min:8',
 
     ]);

        //buscar estudiante id

        $estudiante = Estudiante::find($id);

        //comprobar que existe estudiante

        if(!$estudiante){

          return ['error' => 'Estudiante no encontrado'];

        }
      //Actualizar estudiante

        $estudiante->update($datos_validados);

        return ['mensaje' => 'Estudiante actualizado'];
    }


    public function destroy($id) {

        //buscar estudiante id

        $estudiante = Estudiante::find($id);

        //comprobar que existe estudiante

        if(!$estudiante){

          return ['error' => 'Estudiante no encontrado'];

        }
      //Actualizar estudiante

        $estudiante->destroy($id);

        return ['mensaje' => 'Estudiante borrado'];
    }

}
