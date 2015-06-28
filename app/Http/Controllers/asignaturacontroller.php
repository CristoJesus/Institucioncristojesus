<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class asignaturacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('institucion.asignatura');
    }

public function find()
    {
        return view('institucion.asignatura2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $asig = Request::input('asig');
       $cod = Request::input('cod');
       $query=DB::insert('INSERT INTO asignaturas(id,asignatura,codigo) VALUES (NULL,?,?)', [$asig,$cod]);
	    return redirect('admin');
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
        $results = DB::select('select * from asignaturas');
 
    return view('institucion.actualizarasignatura',['results' => $results]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
        $asig = Request::input('asig');
       $cod = Request::input('cod');	   
       $id = Request::input('id');
       $query=DB::insert('UPDATE asignaturas SET asignatura=?,codigo=? WHERE id=?',[$asig,$cod,$id]);
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
       $query=DB::insert('DELETE FROM asignaturas WHERE id=?', [$id]);
      
	   return redirect('admin');
    }
}
