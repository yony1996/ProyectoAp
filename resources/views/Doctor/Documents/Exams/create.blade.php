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
                    <a>Orden de Examen</a>
                </div>
                <ul class="nav nav-tabs " id="myTab" role="tablist">

                    <li class="nav-item " role="presentation">
                        <a class="nav-link text-sm active" id="hematologia-tab" data-toggle="tab" href="#hematologia" role="tab" aria-selected="true">1 Hematologia</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-sm" id="uroanalisis-tab" data-toggle="tab" href="#uroanalisis" role="tab" aria-selected="false">2 Uroanalisis</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-sm" id="coprologico-tab" data-toggle="tab" href="#coprologico" role="tab" aria-selected="false">3 Coprologico</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-sm" id="quimicasanguinea-tab" data-toggle="tab" href="#quimicasanguinea" role="tab" aria-selected="false">4 Quimica Sanguínea</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-sm" id="serologia-tab" data-toggle="tab" href="#serologia" role="tab" aria-selected="false">5 Serología</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-sm" id="bacteriologia-tab" data-toggle="tab" href="#bacteriologia" role="tab" aria-selected="false">6 Bacteriología</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-sm" id="otros-tab" data-toggle="tab" href="#otros" role="tab" aria-selected="false">7 Otros</a>
                    </li>

                </ul>


                <div class="card-body">
                    <form action="{{route('exam.store')}}" method="POST">
                        @csrf
                        <div class="col text-right">
                            <button type="submit" class="btn btn-sm btn-success">Crear Orden de Examen</button>
                        </div>
                        <div class="tab-content d-flex justify-content-center" id="myTabContent">
                            <div class="tab-pane fade show active" id="hematologia" role="tabpanel">
                                @include('Doctor.Documents.Exams.tablas.hematologia')
                            </div>
                            <div class="tab-pane fade" id="uroanalisis" role="tabpanel">
                                @include('Doctor.Documents.Exams.tablas.uroanalisis')
                            </div>
                            <div class="tab-pane fade" id="coprologico" role="tabpanel">
                                @include('Doctor.Documents.Exams.tablas.coprologico')
                            </div>
                            <div class="tab-pane fade" id="quimicasanguinea" role="tabpanel">
                                @include('Doctor.Documents.Exams.tablas.quimicasanguinea')
                            </div>
                            <div class="tab-pane fade" id="serologia" role="tabpanel">
                                @include('Doctor.Documents.Exams.tablas.serologia')
                            </div>
                            <div class="tab-pane fade" id="bacteriologia" role="tabpanel">
                                @include('Doctor.Documents.Exams.tablas.bacteriologia')
                            </div>
                            <div class="tab-pane fade" id="otros" role="tabpanel">
                                @include('Doctor.Documents.Exams.tablas.otros')
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
