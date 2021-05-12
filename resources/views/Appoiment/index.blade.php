@extends('layouts.dashboard')


@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card-body">
                @if (session('notification'))
                <div class="alert alert-success" role="alert">
                    {{session('notification')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif



            </div>
            <div class="card">
                <div class="card-header">
                    <a>Mis Citas</a>

                </div>
                <ul class="nav nav-pills mb-3 mt-4 ml-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-toggle="pill" href="#confirmed-appoiments" role="tab" aria-selected="true">Mis Próximas Citas</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="pill" href="#pending-appoiments" role="tab" aria-selected="false">Citas por Confirmar</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="pill" href="#old-appoiments" role="tab" aria-selected="false">Historial de Citas</a>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="confirmed-appoiments" role="tabpanel">
                        @include('Appoiment.confirmed-appoiments')
                    </div>
                    <div class="tab-pane fade" id="pending-appoiments" role="tabpanel">
                        @include('Appoiment.pending-appoiments')
                    </div>
                    <div class="tab-pane fade" id="old-appoiments" role="tabpanel">
                        @include('Appoiment.old-appoiments')
                    </div>
                </div>


            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection
