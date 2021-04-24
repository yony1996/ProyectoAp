@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-12 mt-4">

        <div class="card">
            <div class="card-header">
                <a href="{{redirect()->getUrlGenerator()->previous()}}" data-toggle="tooltip" data-placement="top" title="retornar"><i class="ni ni-bold-left"></i>

                </a> &nbsp;
                <a>Pacientes Registrados</a>&nbsp;
                <button class="btn btn-sm btn-primary ml-4" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i>
                    Registrar Paciente</button>



            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">


                <table class="table table-bordered" id="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CI</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Estado</th>
                            <th width="280px">Action</th>


                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>



            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Registro de Paciente</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="Addpatient">
                    @csrf
                    <div class="form-group">
                        <label for="ci">Cédula</label>
                        <input type="text" name="ci" id="ci" class="form-control" autocomplete="off" placeholder="Cedula">
                        <small id="ci-error" class="form-text text-danger"></small>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="name">Nombre</label>
                            <input type="text"  name="name" id="name" class="form-control" autocomplete="off" placeholder="Nombre">
                            <small id="name-error" class="form-text text-danger"></small>
                        </div>
                        <div class="col">
                            <label for="middle_name">Segundo Nombre</label>
                            <input type="text" name="middle_name" id="middle_name" class="form-control" autocomplete="off" placeholder="Segundo Nombre">
                            <small id="middle-name-error" class="form-text text-danger"></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="last_name">Apellido</label>
                            <input type="text"  name="last_name" id="last_name" class="form-control" autocomplete="off" placeholder="Apellido">
                            <small id="last-name-error" class="form-text text-danger"></small>
                        </div>
                        <div class="col">
                            <label for="second_last_name">Segundo Apellido</label>
                            <input type="text" name="second_last_name" id="second_last_name" class="form-control" autocomplete="off" placeholder="Segundo Apellido">
                            <small id="second-last-name-error" class="form-text text-danger"></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email"  name="email" id="email" class="form-control" autocomplete="off" placeholder="Email">
                            <small id="email-error" class="form-text text-danger"></small>
                        </div>
                        <div class="col">
                            <label for="phone">Telefono</label>
                            <input type="text" class="form-control" name="phone" id="phone" autocomplete="off" placeholder="Telefono">
                            <small id="phone-error" class="form-text text-danger"></small>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="AddPatient" class="btn btn-primary">Registrarlo</button>
                <button type="button" id="UpdatePatient" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </div>
</div>



@endsection
