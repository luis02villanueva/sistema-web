@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-6 col-lg-4">
    <div class="card mb-4 text-white bg-primary">
        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
        <div>
            @php
            use App\Models\User;
            $cant_usuarios = User::count();
            @endphp
            <div class="fs-4 fw-semibold">{{$cant_usuarios}}<span class="fs-6 fw-normal">
                <svg class="icon">
                <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom') }}"></use>
                </svg></span></div>
            <div>Usuarios</div>
        </div>
        </div>
        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
        <canvas class="chart" id="card-chart1" height="70"></canvas>
        </div>
    </div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-4">
    <div class="card mb-4 text-white bg-info">
        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
            @php
            use Spatie\Permission\Models\Role;
             $cant_roles = Role::count();
            @endphp
        <div>
            <div class="fs-4 fw-semibold">{{$cant_roles}}<span class="fs-6 fw-normal">
                <svg class="icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom') }}"></use>
                    </svg>
            </span></div>
            <div>Roles</div>
        </div>

        </div>
        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
        <canvas class="chart" id="card-chart2" height="70"></canvas>
        </div>
    </div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-4">
    <div class="card mb-4 text-white bg-warning">
        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
            @php
            use App\Models\Categoria;
           $cant_blogs = Categoria::count();
           @endphp
        <div>
            <div class="fs-4 fw-semibold">{{$cant_blogs}}<svg class="icon">
                <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom') }}"></use>
                </svg></div>
            <div>Categorias</div>
        </div>
        <div class="dropdown">
            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
            </svg>
            </button>
            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
        </div>
        </div>
        <div class="c-chart-wrapper mt-3" style="height:70px;">
        <canvas class="chart" id="card-chart3" height="70"></canvas>
        </div>
    </div>
    </div>
    <!-- /.col-->

    <!-- /.col-->
</div>

@endsection
