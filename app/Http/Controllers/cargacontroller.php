<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class cargacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
	public function __construct ()
	{
		$this ->middleware('auth');
	}
    public function index()
    {
		  $results = DB::select('select * from docente');
 
        return view('institucion.carga',['results' => $results]);
    }

    public function find()
    {
        $results = DB::select('select * from asignaturas');
        return view('institucion.cargaacademica',['results'=>$results]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $idd = Request::input('idd');
       $inten = Request::input('inten');
       $asig = Request::input('asig');
       $grado = Request::input('grado');
       $query=DB::insert('INSERT INTO carga(id,docente,intensidad,asignatura) VALUES (NULL,?,?,?)',[$idd,$inten,$asig]);
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
