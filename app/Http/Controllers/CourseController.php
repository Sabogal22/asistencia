<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::get();
        $data = ['courses'=>$courses,'Titulo'=>'Titulaciones'];
        return view('courses.home',$data);
    }

    public function getCourseAdd(){
        $data = ['titulo' => 'Agregar Titulación'];
        return view('courses.add',$data);
    }

    public function postCourseAdd(Request $request){
        $rules = [
            "name" => "required|min:8",
            "code" => "required|min:6"
        ];
        $messages = [
            "name.required" => 'Se Requiere Que Digite el Nombre de la Titulacion',
            "name.min" => 'Se Requiere Que Tenga Mínimo 8 Caracteres',
            "code.required" => 'Se Requiere que el nombre tenga como minimo 8 caracteres',
            "code.min" => 'Se requiere que la ficha tenga por minimo 6 caracteres',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
       if($validator->fails()):
        return back()->withErrors($validator)->with('message', 'se ha producido un error')->with('typealert', 'danger');
        else:
        $p = new Course;
        $p->name =e($request->input('name'));
        $p->code =e($request->input('code'));
        if($p->save()){
            return redirect(route('courses'))->with('message', 'Guardado con exito')->with('typealert', 'success');
        }
    endif;
    }

    public function getCourseEdit($id){
        $c = course::findOrFail($id);
        $base = ['courses'=>$c, 'Editar titulacion'];
        return view('courses.edit',$base);
    }

    public function postCourseEdit(Request $request){
        $rules = [
            "name" => "required|min:8",
            "code" => "required|min:6",
        ];

        $messages = [
            "name.required" => 'Se requiere que dijite el nombre de la titulacion',
            "code.required" => 'Serequiere que el nombre tenga como minimo 8 caracteres',
            "code.min" => 'Se requiere que la ficha tenga por minimo 6 caracteres',
        ];
       $validator = Validator::make($request->all(), $rules, $messages);
       if($validator->fails()):
        return back()->withErrors($validator)->with('message', 'se ha producido un error')->whit('typealert', 'danger');
    else:
        $c = course::findOrFail($request->input('id'));
        $c->name =e($request->input('name'));
        $c->code =e($request->input('code'));
        if($c->save()){
            return redirect(route('courses'))->with('message', 'Guardado con éxito')->with('typealert', 'success');
        }
    endif;
    }

    public function getCourseDelete($id){
        $p = course::findOrFail($id);
        if($p->delete());
        return back()->with('message', 'Titulacion Borrada Exitosamente')->with('typealert', 'succes');
    }
}