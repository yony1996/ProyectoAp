@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
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
                    <a>Ficha Medica</a>
                </div>
                <ul class="nav nav-tabs " id="myTab" role="tablist">

                    <li class="nav-item " role="presentation">
                        <a class="nav-link text-sm active" id="anamnesis-tab" data-toggle="tab" href="#anamnesis" aria-controls="anamnesis" role="tab" aria-selected="true">Anamnesis</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-sm" id="datos-tab" data-toggle="tab" href="#datos" aria-controls="datos" role="tab" aria-selected="false">Datos</a>
                    </li>


                </ul>


                <div class="card-body">

                    <form action="{{route('record.store')}}" method="POST">
                        @csrf
                        <div class="col text-right">
                            <button type="submit" class="btn btn-sm btn-success">Crear Ficha Medica</button>
                        </div>
                        <input type="hidden" name="patient_id" value="{{$patient->id}}">

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="anamnesis" role="tabpanel" aria-labelledby="anamnesis-tab">
                                @include('Doctor.Documents.Record.tablas.anamnesis')
                            </div>

                            <div class="tab-pane fade" id="datos" role="tabpanel" aria-labelledby="datos-tab">
                                @include('Doctor.Documents.Record.tablas.datosdefiliacion')
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
