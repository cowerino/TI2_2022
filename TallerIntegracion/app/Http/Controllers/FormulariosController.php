<?php

namespace App\Http\Controllers;
use App\Models\UsuariosForms;
use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
//use Illuminate\Support\Facades\DB;
use DB;

class FormulariosController extends Controller
{
    public function list_formularios(){
        //$query=DB::table('dbo.formulario')
        //->get();
        //$query = DB::select("exec Listar_Formularios :parametro",array( 'id'=>$id )); 
         #Este seria el parametro del id del usuario
    
        $values = [3];
        $query = DB::select('EXEC Listar_Formularios ?',$values);
        $query2 = DB::select('EXEC Listar_Usuario ?', $values);
        return view('formularios',['listado'=> $query, 'usuario'=>$query2]);
}

    public function crear_formulario(){
        $query = DB::select('EXEC Listar_Tablas');
        return view('crear',['listado'=> $query]);
    }



    
    public function getStates(Request $request)
    {
        $values = [$request->id_usuario];
        $states = DB::select('EXEC Listar_Campos ?',$values);
        if (count($states) > 0) {
            return response()->json($states);
        }

    }

    public function guardar_formulario(RegistroRequest $request){
        dd($request);
    }

    public function updateselectedCampos($id, $tabla="contacto"){
        $values = [$id];
        $values2 = [$tabla];
        $query = DB::select('EXEC Listar_Campos ?',$values2);
        if($tabla!="none"){
            $query = DB::select('EXEC Listar_Campos ?',$values2);
        }
        $query1 = DB::select('EXEC Listar_Enlaces ?',$values);
        $query2 = DB::select('EXEC Listar_Tablas');

        return view('editar',['enlaces'=> $query1, 'listado'=> $query2,'campos' => $query]);

    }

    public function ver_formulario($id){
        $values = [$id];
        $query = DB::select('EXEC Listar_Enlaces ?',$values);
        return view('ver',['listado'=> $query]);
    }


    public function editar_formulario($id){
        $values = [$id];

        $query = DB::select('EXEC Listar_Enlaces ?',$values);
        $query2 = DB::select('EXEC Listar_Tablas');
        return view('editar',['enlaces'=> $query, 'listado'=> $query2]);
    }

    public function prodfunct(){

        $listado =UsuariosForms::all(); //Obtenemos los datos de tablas

        return view('crear',compact('prod '));
    }

    public function findProductName(Request $request){

        $data=Product::select('nombre_usuario','id_usuario')->where('apellido1_usuario',$request->id_usuario)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
     
	}
    

}