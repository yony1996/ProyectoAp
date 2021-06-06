@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12 mt-4">

        <div class="card">
            <div class="card-header">
                <h1>Reporte: Medicos más activos</h1>

            </div>
            <div class="card-body table-responsive">
                <div id="container">

                </div>
            </div>

        </div>
        <!-- /.card -->
    </div>
</div>
@endsection

@section('js')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script src="{{asset('js/charts/doctors.js')}}"></script>
@endsection