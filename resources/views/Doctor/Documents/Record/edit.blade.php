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
                    <li class="nav-item " role="presentation">
                        <a class="nav-link text-sm " id="examen-tab" data-toggle="tab" href="#examen" aria-controls="examen" role="tab" aria-selected="true">Examen Fisico</a>
                    </li>
                    <li class="nav-item " role="presentation">
                        <a class="nav-link text-sm " id="tratamiento-tab" data-toggle="tab" href="#tratamiento" aria-controls="tratamiento" role="tab" aria-selected="true">Tratamiento</a>
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
                                @include('Doctor.Documents.Record.tablas.anamnesisedit')
                            </div>
                            <div class="tab-pane fade show " id="examen" role="tabpanel" aria-labelledby="examen-tab">
                                @include('Doctor.Documents.Record.tablas.examenedit')
                            </div>
                            <div class="tab-pane fade show" id="tratamiento" role="tabpanel" aria-labelledby="tratamiento-tab">
                                @include('Doctor.Documents.Record.tablas.tratamientoedit')
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
