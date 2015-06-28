<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class notascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('institucion.docente3');
    }

public function find()
    {
        return view('institucion.docente2');
    }
	
	
public function find2($id)
    {
    $asignaturas = DB::select('select * from asignaturas');
    $alumnos = DB::select('select * from alumno WHERE grado=?',[$id]);
 
    return view('institucion.docente',['asignaturas' => $asignaturas,'alumnos' => $alumnos]);
    }
	

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $asig = Request::input('asig');
       $alumno = Request::input('alumno');
       $n1 = Request::input('n1');
       $n2 = Request::input('n2');
       $n3 = Request::input('n3');
       $n4 = Request::input('n4');
	   $final=($n1+$n2+$n3+$n4)/4;
       $query=DB::insert('INSERT INTO notas(id,alumno,nota1,nota2,nota3,nota4,final,asignatura) VALUES (NULL,?,?,?,?,?,?,?)', [$alumno,$n1,$n2,$n3,$n4,$final,$asig]);
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
        $results = DB::select('SELECT a.*,b.nom,b.ape,b.grado,c.asignatura as nasi FROM notas a,alumno b,asignaturas c WHERE a.alumno=b.id AND a.asignatura=c.codigo');
    return view('institucion.actualizarnota',['results' => $results]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
       $id = Request::input('id');      
       $n1 = Request::input('n1');
       $n2 = Request::input('n2');
       $n3 = Request::input('n3');
       $n4 = Request::input('n4');
	   $final=($n1+$n2+$n3+$n4)/4;
       $query=DB::insert('UPDATE notas SET nota1=?,nota2=?,nota3=?,nota4=?,final=? WHERE id=?', [$n1,$n2,$n3,$n4,$final,$id]);
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
       $query=DB::insert('DELETE FROM notas WHERE id=?', [$id]);
      
	   return redirect('admin');
    }
}
