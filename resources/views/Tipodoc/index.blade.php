@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Tipo de documento</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @can('crear-tipodocumento')
                        <a class="btn btn-warning" href="{{ route('tipodocumentos.create') }}">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">estado</th>
                                    <th style="color:#fff;">Acciones</th>
                              </thead>
                              <tbody>
                            @foreach ($documentos as $documento)
                            <tr>
                                <td style="display: none;">{{ $documento->id }}</td>
                                <td>{{ $documento->nombre }}</td>

                                <td>{{ $documento->estado }}</td>
                                <td>
                                    <form action="{{ route('tipodocumentos.destroy',$documento->id) }}" method="POST">
                                        @can('editar-tipodocumento')
                                        <a class="btn btn-info" href="{{ route('tipodocumentos.edit',$documento->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-tipodocumento')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $documentos->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
