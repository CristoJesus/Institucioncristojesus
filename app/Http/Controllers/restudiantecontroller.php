<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class restudiantecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('institucion.restudiante');
    }

public function find()
    {
        return view('institucion.restudiante2');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $name = Request::input('nombre');
       $ape = Request::input('ape');
       $id= Request::input('id');
       $tel = Request::input('tel');
       $dir = Request::input('dir');
       $fecha= Request::input('fechan');
       $grado = Request::input('grado');
       $sex = Request::input('sex');
       $query=DB::insert('INSERT INTO alumno (id,nom,ape,dir,tel,fechan,grado,sex) VALUES (?,?,?,?,?,?,?,?)', [$id,$name,$ape,$dir,$tel,$fecha,$grado,$sex]);
	   return view('institucion.restudianteok');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
    $results = DB::select('select * from alumno');
 
    return view('institucion.actualizarestudiante',['results' => $results]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
       public function edit()
    {
       $name = Request::input('nombre');
       $ape = Request::input('ape');
       $id= Request::input('id');
       $tel = Request::input('tel');
       $dir = Request::input('dir');
       $fecha= Request::input('fechan');
       $grado = Request::input('grado');
       $sex = Request::input('sex');
       $query=DB::insert('UPDATE alumno SET nom=?,ape=?,dir=?,tel=?,fechan=?,grado=?,sex=? WHERE id=?', [$name,$ape,$dir,$tel,$fecha,$grado,$sex,$id]);
 
    return redirect('admin');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
     public function destroy($id)
    {
        $query=DB::insert('DELETE FROM alumno WHERE id=?', [$id]);
      
	   return redirect('admin');
    }
}
