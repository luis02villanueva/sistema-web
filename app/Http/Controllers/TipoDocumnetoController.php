<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class TipoDocumnetoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-tipodocumento|crear-tipodocumento|editar-tipodocumento|borrar-tipodocumento')->only('index');
         $this->middleware('permission:crear-tipodocumento', ['only' => ['create','store']]);
         $this->middleware('permission:editar-tipodocumento', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-tipodocumento', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //Con paginación
         $documentos = TipoDocumento::paginate(5);
         return view('tipodoc.index',compact('documentos'));
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $blogs->links() !!}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipodoc.crear');
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

        TipoDocumento::create($request->all());

        return redirect()->route('tipodocumentos.index');
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
    public function edit(TipoDocumento $documento)
    {
        return view('tipodoc.editar',compact('documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoDocumento $documento)
    {
         request()->validate([
            'nombre' => 'required',
            'estado' => 'required',
        ]);

        $documento->update($request->all());

        return redirect()->route('tipodoc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoDocumento $documento)
    {
        $documento->delete();

        return redirect()->route('tipodocumentos.index');
    }
}
