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
                    <a>Crear Paciente</a>
                </div>
                <div class="card-body">
                    <form action="{{route('patient.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col" >
                                <label for="ci">Cédula</label>
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="10" value="{{old('ci')}}" name="ci" id="ci" class="form-control" placeholder="Cedula" required autocomplete="off">
                                @error('ci') <small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="col">
                                <label for="age">Edad</label>
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" value="{{old('age')}}" name="age" id="age" class="form-control" placeholder="Edad" required autocomplete="off">
                                @error('age') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="name">Nombre</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');"value="{{old('name')}}" name="name" id="name" class="form-control" placeholder="Nombre" required autocomplete="off">
                                @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>
                            <div class="col">
                                <label for="middle_name">Segundo Nombre</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');"value="{{old('middle_name')}}" name="middle_name" id="middle_name" class="form-control" placeholder="Segundo Nombre" required autocomplete="off">
                                @error('middle_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="last_name">Apellido</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" value="{{old('last_name')}}"name="last_name" id="last_name" class="form-control" placeholder="Apellido" required autocomplete="off">
                                @error('last_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>
                            <div class="col">
                                <label for="second_last_name">Segundo Apellido</label>
                                <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde; ]/g, '').replace(/(\..*?)\..*/g, '$1');" value="{{old('second_last_name')}}" name="second_last_name" id="second_last_name" class="form-control" placeholder="Segundo Apellido" required autocomplete="off">
                                @error('second_last_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email">Correo</label>
                                <input type="email" value="{{old('email')}}"name="email" id="email" class="form-control" placeholder="Correo" required autocomplete="off">
                                @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>
                            <div class="col">
                                <label for="phone">Telefono</label>
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" value="{{old('phone')}}"name="phone" id="phone" class="form-control" placeholder="Telefono" required autocomplete="off">
                                @error('phone') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                            </div>

                        </div>

                        <div class="form-group mt-4">
                            <button id="btn-crear"class="btn btn-primary" type="submit">Crear</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
{{-- <script>
$(document).ready(function(){
    $("#ci").change(function () {

        var cedula = $("#ci").val();

       //Preguntamos si la cedula consta de 10 digitos
       if(cedula.length == 10){

          //Obtenemos el digito de la region que sonlos dos primeros digitos
          var digito_region = cedula.substring(0,2);

          //Pregunto si la region existe ecuador se divide en 24 regiones
          if( digito_region >= 1 && digito_region <=24 ){

            // Extraigo el ultimo digito
            var ultimo_digito   = cedula.substring(9,10);

            //Agrupo todos los pares y los sumo
            var pares = parseInt(cedula.substring(1,2)) + parseInt(cedula.substring(3,4)) + parseInt(cedula.substring(5,6)) + parseInt(cedula.substring(7,8));

            //Agrupo los impares, los multiplico por un factor de 2, si la resultante es > que 9 le restamos el 9 a la resultante
            var numero1 = cedula.substring(0,1);
            var numero1 = (numero1 * 2);
            if( numero1 > 9 ){ var numero1 = (numero1 - 9); }

            var numero3 = cedula.substring(2,3);
            var numero3 = (numero3 * 2);
            if( numero3 > 9 ){ var numero3 = (numero3 - 9); }

            var numero5 = cedula.substring(4,5);
            var numero5 = (numero5 * 2);
            if( numero5 > 9 ){ var numero5 = (numero5 - 9); }

            var numero7 = cedula.substring(6,7);
            var numero7 = (numero7 * 2);
            if( numero7 > 9 ){ var numero7 = (numero7 - 9); }

            var numero9 = cedula.substring(8,9);
            var numero9 = (numero9 * 2);
            if( numero9 > 9 ){ var numero9 = (numero9 - 9); }

            var impares = numero1 + numero3 + numero5 + numero7 + numero9;

            //Suma total
            var suma_total = (pares + impares);

            //extraemos el primero digito
            var primer_digito_suma = String(suma_total).substring(0,1);

            //Obtenemos la decena inmediata
            var decena = (parseInt(primer_digito_suma) + 1)  * 10;

            //Obtenemos la resta de la decena inmediata - la suma_total esto nos da el digito validador
            var digito_validador = decena - suma_total;

            //Si el digito validador es = a 10 toma el valor de 0
            if(digito_validador == 10)
              var digito_validador = 0;

            //Validamos que el digito validador sea igual al de la cedula
            if(digito_validador == ultimo_digito){
                document.getElementById("btn-crear").disabled = false;

              console.log('la cedula:' + cedula + ' es correcta');
            }else{
                document.getElementById('spa-ci').innerHTML = 'cedula incorrecta';

              document.getElementById("btn-crear").disabled = true;
            }

          }else{
            // imprimimos en consola si la region no pertenece
            console.log('Esta cedula no pertenece a ninguna region');
            $span= $("#spa-ci");
            $span.html("<strong>Esta cedula no pertenece a ninguna region</strong>");
            document.getElementById("btn-crear").disabled = true;
          }
       }else{
          //imprimimos en consola si la cedula tiene mas o menos de 10 digitos
          console.log('Esta cedula tiene menos de 10 Digitos');
          document.getElementById('spa-ci').innerHTML = 'cedula incorrecta';
          document.getElementById("btn-crear").disabled = true;
       }

    });

});

</script> --}}
@section('js')


@endsection
