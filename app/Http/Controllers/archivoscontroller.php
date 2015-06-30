<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class archivoscontroller extends Controller
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
		        return view('institucion.archivos');
    }

     public function index2()
    {
		 $results1 = DB::select('select * FROM alumno WHERE grado=?',[1]);
		 $results2 = DB::select('select * FROM alumno WHERE grado=?',[2]);
		 $results3 = DB::select('select * FROM alumno WHERE grado=?',[3]);
		 $results4 = DB::select('select * FROM alumno WHERE grado=?',[4]);
		 $results5 = DB::select('select * FROM alumno WHERE grado=?',[5]);
		 $results6 = DB::select('select * FROM alumno WHERE grado=?',[6]);
		 $results7 = DB::select('select * FROM alumno WHERE grado=?',[7]);
		 $results8 = DB::select('select * FROM alumno WHERE grado=?',[8]);
		 $results9 = DB::select('select * FROM alumno WHERE grado=?',[9]);
		 $results10 = DB::select('select * FROM alumno WHERE grado=?',[10]);
		 $results11 = DB::select('select * FROM alumno WHERE grado=?',[11]);	 		 
   
		        return view('institucion.archivos2',['results1' => $results1,'results2' => $results2,'results3' => $results3,'results4' => $results4,'results5' => $results5,'results6' => $results6,'results7' => $results7,'results8' => $results8,'results9' => $results9,'results10' => $results10,'results11' => $results11]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function alumno()
    {
      $results1 = DB::select('select * FROM alumno');
   
		        return view('institucion.archivos3',['results1' => $results1]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function docente()
    {
          $results1 = DB::select('SELECT a.*,b.asignatura,c.intensidad FROM docente a,asignaturas b,carga c WHERE a.id=c.docente AND b.codigo=c.asignatura');
   
		        return view('institucion.archivos4',['results1' => $results1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
return "";
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
