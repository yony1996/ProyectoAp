<div class="content mt-4">



    <div class="card">

        <div class="card-body">

            <div class="row">
                <div class="col">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z]/g, '').replace(/(\..*?)\..*/g, '$1');" id="name" class="form-control" placeholder="Nombre" value="{{$patient->user->name}}" required disabled autocomplete="off">


                </div>
                <div class="col">
                    <label for="last_name">Apellido</label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z]/g, '').replace(/(\..*?)\..*/g, '$1');" name="last_name" id="last_name" class="form-control" value="{{$patient->last_name}}" placeholder="Apellido" required disabled autocomplete="off">


                </div>
                <div class="col">
                    <label for="ci">Cedula</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="10" name="ci" id="ci" class="form-control" value="{{$patient->ci}}" disabled placeholder="Cedula" required autocomplete="off">
                    @error('ci')<small class="alert text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="col">
                    <label for="age">Edad</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2" name="age" id="age" value="{{$patient->age}}" disabled class="form-control" placeholder="Edad" required autocomplete="off">
                    @error('age')<small class="alert text-danger">{{ $message }}</small> @enderror
                </div>

            </div>
            <hr class="my-3">
            <div class="row">

                <div class="form-group col-md-4">
                    <label for="gender">Sexo</label>
                    <select name="gender" id="gender" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="F" @if($records->gender=="F")
                            selected
                            @endif>Femenino</option>
                        <option value="M" @if($records->gender=="M")
                            selected
                            @endif>Masculino</option>
                        <option value="O" @if($records->gender=="O")
                            selected
                            @endif>Otro</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="ethnicity">Etnia</label>
                    <select name="ethnicity" id="ethnicity" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="Blanco" @if($records->ethnicity=="Blanco")
                            selected
                            @endif>Blanco</option>
                        <option value="Mestizo" @if($records->ethnicity=="Mestizo")
                            selected
                            @endif>Mestizo</option>
                        <option value="Indigena" @if($records->ethnicity=="Indigena")
                            selected
                            @endif>Indigena</option>
                        <option value="Afroecuatoriano" @if($records->ethnicity=="Afroecuatoriano")
                                selected
                            @endif>Afroecuatoriano</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="marital_status">Estado Civil</label>
                    <select name="marital_status" id="marital_status" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="Soltero/a" @if($records->marital_status=="Soltero/a")
                            selected
                            @endif>Soltero/a</option>
                        <option value="Casado/a" @if($records->marital_status=="Casado/a")
                            selected
                            @endif>Casado/a</option>
                        <option value="Unión libre" @if($records->marital_status=="Unión libre")
                            selected
                            @endif>Unión libre</option>
                        <option value="Separado/a" @if($records->marital_status=="Separado/a")
                            selected
                            @endif>Separado/a</option>
                        <option value="Divorciado/a" @if($records->marital_status=="Divorciado/a")
                            selected
                            @endif>Divorciado/a</option>
                        <option value="Viudo/a" @if($records->marital_status=="Viudo/a")
                            selected
                            @endif>Viudo/a</option>

                    </select>
                </div>

            </div>
            <hr class="my-3">

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="work">A que se dedica?</label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="work" id="work" value="{{$records->work}}" class="form-control" placeholder="A que se dedica" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <label for="seaside">Lugar de nacimiento</label>
                    <select name="seaside" id="seaside" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="Azuay" @if($records->seaside=="Azuay")
                            selected
                            @endif>Azuay</option>
                        <option value="Cañar" @if($records->seaside=="Cañar")
                            selected
                            @endif>Cañar</option>
                        <option value="Loja" @if($records->seaside=="Loja")
                            selected
                            @endif>Loja</option>
                        <option value="Carchi" @if($records->seaside=="Carchi")
                            selected
                            @endif>Carchi</option>
                        <option value="Imbabura" @if($records->seaside=="Imbabura")
                            selected
                            @endif>Imbabura</option>
                        <option value="Pichincha" @if($records->seaside=="Pichincha")
                            selected
                            @endif>Pichincha</option>
                        <option value="Cotopaxi" @if($records->seaside=="Cotopaxi")
                            selected
                            @endif>Cotopaxi</option>
                        <option value="Tungurahua" @if($records->seaside=="Tungurahua")
                            selected
                            @endif>Tungurahua</option>
                        <option value="Bolivar" @if($records->seaside=="Bolivar")
                            selected
                            @endif>Bolívar</option>
                        <option value="Chimborazo" @if($records->seaside=="Chimborazo")
                            selected
                            @endif>Chimborazo</option>
                        <option value="Sto. Domingo de los Tsachilas" @if($records->seaside=="Sto. Domingo de los Tsachilas")
                            selected
                            @endif>Sto. Domingo de los Tsachilas</option>
                        <option value="Esmeraldas" @if($records->seaside=="Esmeraldas")
                            selected
                            @endif>Esmeraldas</option>
                        <option value="Manabi" @if($records->seaside=="Manabi")
                            selected
                            @endif>Manabí</option>
                        <option value="Guayas" @if($records->seaside=="Guayas")
                            selected
                            @endif>Guayas</option>
                        <option value="Los Rios" @if($records->seaside=="Los Rios")
                            selected
                            @endif>Los Ríos</option>
                        <option value="El Oro" @if($records->seaside=="El Oro")
                            selected
                            @endif>El Oro</option>
                        <option value="Santa Elena" @if($records->seaside=="Santa Elena")
                            selected
                            @endif>Santa Elena</option>
                        <option value="Sucumbios" @if($records->seaside=="Sucumbios")
                            selected
                            @endif>Sucumbíos</option>
                        <option value="Napo" @if($records->seaside=="Napo")
                            selected
                            @endif>Napo</option>
                        <option value="Pastaza" @if($records->seaside=="Pastaza")
                            selected
                            @endif>Pastaza</option>
                        <option value="Orellana" @if($records->seaside=="Orellana")
                            selected
                            @endif>Orellana</option>
                        <option value="Morona Santiago" @if($records->seaside=="Morona Santiago")
                            selected
                            @endif>Morona Santiago</option>
                        <option value="Zamora Chinchipe" @if($records->seaside=="Zamora Chinchipe")
                            selected
                            @endif>Zamora Chinchipe</option>
                        <option value="Galapagos" @if($records->seaside=="Galapagos")
                            selected
                            @endif>Galapagos</option>
                    </select>
                </div>
                <div class="col">
                    <label for="residence">Residencia Actual</label>
                    <select name="seaside" id="seaside" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="Azuay" @if($records->seaside=="Azuay")
                            selected
                            @endif>Azuay</option>
                        <option value="Cañar" @if($records->seaside=="Cañar")
                            selected
                            @endif>Cañar</option>
                        <option value="Loja" @if($records->seaside=="Loja")
                            selected
                            @endif>Loja</option>
                        <option value="Carchi" @if($records->seaside=="Carchi")
                            selected
                            @endif>Carchi</option>
                        <option value="Imbabura" @if($records->seaside=="Imbabura")
                            selected
                            @endif>Imbabura</option>
                        <option value="Pichincha" @if($records->seaside=="Pichincha")
                            selected
                            @endif>Pichincha</option>
                        <option value="Cotopaxi" @if($records->seaside=="Cotopaxi")
                            selected
                            @endif>Cotopaxi</option>
                        <option value="Tungurahua" @if($records->seaside=="Tungurahua")
                            selected
                            @endif>Tungurahua</option>
                        <option value="Bolivar" @if($records->seaside=="Bolivar")
                            selected
                            @endif>Bolívar</option>
                        <option value="Chimborazo" @if($records->seaside=="Chimborazo")
                            selected
                            @endif>Chimborazo</option>
                        <option value="Sto. Domingo de los Tsachilas" @if($records->seaside=="Sto. Domingo de los Tsachilas")
                            selected
                            @endif>Sto. Domingo de los Tsachilas</option>
                        <option value="Esmeraldas" @if($records->seaside=="Esmeraldas")
                            selected
                            @endif>Esmeraldas</option>
                        <option value="Manabi" @if($records->seaside=="Manabi")
                            selected
                            @endif>Manabí</option>
                        <option value="Guayas" @if($records->seaside=="Guayas")
                            selected
                            @endif>Guayas</option>
                        <option value="Los Rios" @if($records->seaside=="Los Rios")
                            selected
                            @endif>Los Ríos</option>
                        <option value="El Oro" @if($records->seaside=="El Oro")
                            selected
                            @endif>El Oro</option>
                        <option value="Santa Elena" @if($records->seaside=="Santa Elena")
                            selected
                            @endif>Santa Elena</option>
                        <option value="Sucumbios" @if($records->seaside=="Sucumbios")
                            selected
                            @endif>Sucumbíos</option>
                        <option value="Napo" @if($records->seaside=="Napo")
                            selected
                            @endif>Napo</option>
                        <option value="Pastaza" @if($records->seaside=="Pastaza")
                            selected
                            @endif>Pastaza</option>
                        <option value="Orellana" @if($records->seaside=="Orellana")
                            selected
                            @endif>Orellana</option>
                        <option value="Morona Santiago" @if($records->seaside=="Morona Santiago")
                            selected
                            @endif>Morona Santiago</option>
                        <option value="Zamora Chinchipe" @if($records->seaside=="Zamora Chinchipe")
                            selected
                            @endif>Zamora Chinchipe</option>
                        <option value="Galapagos" @if($records->seaside=="Galapagos")
                            selected
                            @endif>Galapagos</option>
                    </select>
                </div>
            </div>
            <hr class="my-3">

            <div class="row justify-content-center">

                <div class="form-group col-md-4">
                    <label for="instruction">Instrucción</label>
                    <select name="instruction" id="instruction" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="Basica" @if($records->instruction=="Basica")
                            selected
                            @endif>Basica</option>
                        <option value="Media" @if($records->instruction=="Media")
                            selected
                            @endif>Media</option>
                        <option value="Superior" @if($records->instruction=="Superior")
                            selected
                            @endif>Superior</option>
                    </select>
                </div>


                <div class="form-group col-md-4">
                    <label for="type_of_blood">Tipo de Sangre</label>
                    <select name="type_of_blood" id="type_of_blood" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="A+" @if($records->type_of_blood=="A+")
                            selected
                            @endif>A+</option>
                        <option value="A-" @if($records->type_of_blood=="A-")
                            selected
                            @endif>A-</option>
                        <option value="B+" @if($records->type_of_blood=="B+")
                            selected
                            @endif>B+</option>
                        <option value="B-" @if($records->type_of_blood=="B-")
                            selected
                            @endif>B-</option>
                        <option value="O+" @if($records->type_of_blood=="O+")
                            selected
                            @endif>O+</option>
                        <option value="O-" @if($records->type_of_blood=="O-")
                            selected
                            @endif>O-</option>
                        <option value="AB+" @if($records->type_of_blood=="AB+")
                            selected
                            @endif>AB+</option>
                        <option value="AB-" @if($records->type_of_blood=="AB-")
                            selected
                            @endif>AB-</option>


                    </select>
                </div>





            </div>
            <div class="row">
                <div class="col">
                    <label for="direction">Dirección</label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="direction" id="direction" value="{{$records->direction}}" class="form-control" placeholder="Dirección" autocomplete="off">

                </div>
                <div class="col">
                    <label for="phone">Telefono</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" name="phone" id="phone" value="{{$patient->phone}}" class="form-control" placeholder="Telefono" autocomplete="off">

                </div>
            </div>



        </div>
    </div>


    <div class="card mt-4">

        <div class="card-body">

            <div class="row">
                <div class="col">
                    <label for="reason">Motivo de la consulta / porque motivo vino? </label>
                    <input type="text" name="reason" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" id="reason" value="{{$records->reason}}" class="form-control" placeholder="Motivo de la consulta" autocomplete="off">

                </div>
                <div class="col">
                    <label for="disease">Enfermedad Actual</label>
                    <input type="text" name="disease" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" id="disease" value="{{$records->disease}}" class="form-control" placeholder="Enfermedad Actual" autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="fac">FAC?Cuando empezó la molestia? </label>
                    <input type="text" name="fac" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" id="fac" value="{{$records->fac}}" class="form-control" placeholder="Cuando empezó la molestia?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="frc">FRC?Nunca antes presento esta molestia?</label>
                    <input type="text" name="frc" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" id="frc" value="{{$records->frc}}" class="form-control" placeholder="Nunca antes presento esta molestia?" autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="ca">CA?:Cuál cree usted que fue la causa de esta molestia?</label>
                    <input type="text" name="ca" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" id="ca" value="{{$records->ca}}" class="form-control" placeholder="Cuál cree usted que fue la causa de esta molestia?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="fc">FC?:Cómo empezó?</label>
                    <input type="text" name="fc" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" id="fc" value="{{$records->fc}}" class="form-control" placeholder="Cómo empezó?" autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="sa">SA?:Que otra molestia ha presentado?</label>
                    <input type="text" name="sa" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" id="sa" value="{{$records->sa}}" class="form-control" placeholder="Que otra molestia ha presentado?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="e">E?: En las últimas horas o días ha cambiado en alguna forma la molestia? </label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="e" id="e" value="{{$records->e}}" class="form-control" placeholder="En las últimas horas o días ha cambiado en alguna forma la molestia?" autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="rm">RM?: A tomado algo para esta molestia?</label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="rm" id="rm" value="{{$records->rm}}" class="form-control" placeholder="A tomado algo para esta molestia?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="ea">EA?: En este momento como sigue su molestia? </label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="ea" id="ea" value="{{$records->ea}}" class="form-control" placeholder="En este momento como sigue su molestia? " autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="eg">¿Enfermedades de gravedad por la que tome medicamentos?</label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="eg" id="eg" value="{{$records->eg}}" class="form-control" placeholder="¿Enfermedades de gravedad por la que tome medicamentos?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="egs">¿Enfermedades Graves en sus familiares de sangre?</label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="egs" id="egs" value="{{$records->egs}}" class="form-control" placeholder="¿Enfermedades Graves en sus familiares de sangre?" autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="cir">¿Le han realizado cirugías?</label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="cir" id="cir" value="{{$records->cir}}" class="form-control" placeholder="¿Le han realizado cirugías?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="aler">¿Tiene alergias algún medicamento o alimento?</label>
                    <input type="text" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="aler" id="aler" value="{{$records->aler}}" class="form-control" placeholder="¿Tiene alergias algún medicamento o alimento?" autocomplete="off">

                </div>
            </div>

        </div>
    </div>


</div>
