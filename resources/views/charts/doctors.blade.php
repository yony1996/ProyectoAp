@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12 mt-4">

        <div class="card">
            <div class="card-header">
                <h1>Reporte: Medicos más activos</h1>

            </div>
            <div class="card-body table-responsive">
                <div class="input-daterange datepicker row align-items-center" data-date-format="yyyy-mm-dd">
                    <div class="col">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input id="startDate" class="form-control" placeholder="Fecha de Inicio" type="text"  value="{{$start}}">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input id="endDate" class="form-control" placeholder="Fecha de fin" type="text" value="{{$end}}">
                            </div>
                        </div>
                    </div>
                </div>
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
<script src="{{asset('dists/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('dists/assets/vendor/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js') }}"></script>
<script>
    $('.datepicker').datepicker({
    'language' : 'es'});
</script>

@endsection