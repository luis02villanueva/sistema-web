<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use Illuminate\Http\Request;

class UnidadMedidaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-unidad|crear-unidad|editar-unidad|borrar-unidad')->only('index');
         $this->middleware('permission:crear-unidad', ['only' => ['create','store']]);
         $this->middleware('permission:editar-unidad', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-unidad', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //Con paginación
         $unidades = Unidad::paginate(5);
         return view('unidadMedida.index',compact('unidades'));
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() !!}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidadmedida.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',

            'estado' => 'required',
        ]);

        Unidad::create($request->all());

        return redirect()->route('unidad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Unidad $unidad)
    {
        return view('unidadmedida.editar',compact('unidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unidad $unidad)
    {
         request()->validate([
            'nombre' => 'required',
            'estado' => 'required',
        ]);

        $unidad->update($request->all());

        return redirect()->route('unidadmedida.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unidad $unidad)
    {
        $unidad->delete();

        return redirect()->route('unidad.index');
    }
}
