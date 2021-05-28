<div class="content mt-4">



    <div class="card">

        <div class="card-body">

            <div class="row">
                <div class="col">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" value="{{$patient->user->name}}" required autocomplete="off">


                </div>
                <div class="col">
                    <label for="last_name">Apellido</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{$patient->last_name}}" placeholder="Apellido" required autocomplete="off">


                </div>
                <div class="col">
                    <label for="ci">Cedula</label>
                    <input type="text" name="ci" id="ci" class="form-control" value="{{$patient->ci}}" placeholder="Cedula" required autocomplete="off">

                </div>
                <div class="col">
                    <label for="age">Edad</label>
                    <input type="text" name="age" id="age" value="{{$patient->age}}" class="form-control" placeholder="Edad" required autocomplete="off">

                </div>

            </div>
            <hr class="my-3">
            <div class="row">

                <div class="form-group col-md-4">
                    <label for="gender">Sexo</label>
                    <select name="gender" id="gender" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="ethnicity">Etnia</label>
                    <select name="ethnicity" id="ethnicity" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Mestizo">Mestizo</option>
                        <option value="Indigena">Indigena</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="marital_status">Estado Civil</label>
                    <select name="marital_status" id="marital_status" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="Soltero/a">Soltero/a</option>
                        <option value="Casado/a">Casado/a</option>
                        <option value="Unión libre">Unión libre</option>
                        <option value="Separado/a">Separado/a</option>
                        <option value="Divorciado/a">Divorciado/a</option>
                        <option value="Viudo/a">Viudo/a</option>

                    </select>
                </div>

            </div>
            <hr class="my-3">

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="work">A que se dedica?</label>
                    <input type="text" name="work" id="work" class="form-control" placeholder="A que se dedica" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <label for="seaside">Lugar de nacimiento</label>
                    <select name="seaside" id="seaside" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="Azuay">Azuay</option>
                        <option value="Cañar">Cañar</option>
                        <option value="Loja">Loja</option>
                        <option value="Carchi">Carchi</option>
                        <option value="Imbabura">Imbabura</option>
                        <option value="Pichincha">Pichincha</option>
                        <option value="Cotopaxi">Cotopaxi</option>
                        <option value="Tungurahua">Tungurahua</option>
                        <option value="Bolívar">Bolívar</option>
                        <option value="Chimborazo">Chimborazo</option>
                        <option value="Sto. Domingo de los Tsachilas">Sto. Domingo de los Tsachilas</option>
                        <option value="Esmeraldas">Esmeraldas</option>
                        <option value="Manabí">Manabí</option>
                        <option value="Guayas">Guayas</option>
                        <option value="Los Ríos">Los Ríos</option>
                        <option value="El Oro">El Oro</option>
                        <option value="Santa Elena">Santa Elena</option>
                        <option value="Sucumbíos">Sucumbíos</option>
                        <option value="Napo">Napo</option>
                        <option value="Pastaza">Pastaza</option>
                        <option value="Orellana">Orellana</option>
                        <option value="Morona Santiago">Morona Santiago</option>
                        <option value="Zamora Chinchipe">Zamora Chinchipe</option>
                    </select>
                </div>
                <div class="col">
                    <label for="residence">Residencia Actual</label>
                    <select name="residence" id="residence" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="Azuay">Azuay</option>
                        <option value="Cañar">Cañar</option>
                        <option value="Loja">Loja</option>
                        <option value="Carchi">Carchi</option>
                        <option value="Imbabura">Imbabura</option>
                        <option value="Pichincha">Pichincha</option>
                        <option value="Cotopaxi">Cotopaxi</option>
                        <option value="Tungurahua">Tungurahua</option>
                        <option value="Bolívar">Bolívar</option>
                        <option value="Chimborazo">Chimborazo</option>
                        <option value="Sto. Domingo de los Tsachilas">Sto. Domingo de los Tsachilas</option>
                        <option value="Esmeraldas">Esmeraldas</option>
                        <option value="Manabí">Manabí</option>
                        <option value="Guayas">Guayas</option>
                        <option value="Los Ríos">Los Ríos</option>
                        <option value="El Oro">El Oro</option>
                        <option value="Santa Elena">Santa Elena</option>
                        <option value="Sucumbíos">Sucumbíos</option>
                        <option value="Napo">Napo</option>
                        <option value="Pastaza">Pastaza</option>
                        <option value="Orellana">Orellana</option>
                        <option value="Morona Santiago">Morona Santiago</option>
                        <option value="Zamora Chinchipe">Zamora Chinchipe</option>
                    </select>
                </div>
            </div>
            <hr class="my-3">

            <div class="row justify-content-center">

                <div class="form-group col-md-4">
                    <label for="instruction">Instrucción</label>
                    <select name="instruction" id="instruction" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="Basica">Basica</option>
                        <option value="Media">Media</option>
                        <option value="Superior">Superior</option>
                    </select>
                </div>


                <div class="form-group col-md-4">
                    <label for="type_of_blood">Tipo de Sangre</label>
                    <select name="type_of_blood" id="type_of_blood" class="form-control">
                        <option selected>seleccione una opición</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>


                    </select>
                </div>





            </div>
            <div class="row">
                <div class="col">
                    <label for="direction">Dirección</label>
                    <input type="text" name="direction" id="direction" class="form-control" placeholder="Dirección" autocomplete="off">

                </div>
                <div class="col">
                    <label for="phone">Telefono</label>
                    <input type="text" name="phone" id="phone" value="{{$patient->phone}}" class="form-control" placeholder="Telefono" autocomplete="off">

                </div>
            </div>



        </div>
    </div>


    <div class="card mt-4">

        <div class="card-body">

            <div class="row">
                <div class="col">
                    <label for="reason">Motivo de la consulta / porque motivo vino? </label>
                    <input type="text" name="reason" id="reason" class="form-control" placeholder="Motivo de la consulta" autocomplete="off">

                </div>
                <div class="col">
                    <label for="disease">Enfermedad Actual</label>
                    <input type="text" name="disease" id="disease" class="form-control" placeholder="Enfermedad Actual" autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="fac">FAC?Cuando empezó la molestia? </label>
                    <input type="text" name="fac" id="fac" class="form-control" placeholder="Cuando empezó la molestia?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="frc">FRC?Nunca antes presento esta molestia?</label>
                    <input type="text" name="frc" id="frc" class="form-control" placeholder="Nunca antes presento esta molestia?" autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="ca">CA?:Cuál cree usted que fue la causa de esta molestia?</label>
                    <input type="text" name="ca" id="ca" class="form-control" placeholder="Cuál cree usted que fue la causa de esta molestia?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="fc">FC?:Cómo empezó?</label>
                    <input type="text" name="fc" id="fc" class="form-control" placeholder="Cómo empezó?" autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="sa">SA?:Que otra molestia ha presentado?</label>
                    <input type="text" name="sa" id="sa" class="form-control" placeholder="Que otra molestia ha presentado?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="e">E?: En las últimas horas o días ha cambiado en alguna forma la molestia? </label>
                    <input type="text" name="e" id="e" class="form-control" placeholder="En las últimas horas o días ha cambiado en alguna forma la molestia?" autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="rm">RM?: A tomado algo para esta molestia?</label>
                    <input type="text" name="rm" id="rm" class="form-control" placeholder="A tomado algo para esta molestia?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="ea">EA?: En este momento como sigue su molestia? </label>
                    <input type="text" name="ea" id="ea" class="form-control" placeholder="En este momento como sigue su molestia? " autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="eg">¿Enfermedades de gravedad por la que tome medicamentos?</label>
                    <input type="text" name="eg" id="eg" class="form-control" placeholder="¿Enfermedades de gravedad por la que tome medicamentos?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="egs">¿Enfermedades Graves en sus familiares de sangre?</label>
                    <input type="text" name="egs" id="egs" class="form-control" placeholder="¿Enfermedades Graves en sus familiares de sangre?" autocomplete="off">

                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <label for="cir">¿Le han realizado cirugías?</label>
                    <input type="text" name="cir" id="cir" class="form-control" placeholder="¿Le han realizado cirugías?" autocomplete="off">

                </div>
                <div class="col">
                    <label for="aler">¿Tiene alergias algún medicamento o alimento?</label>
                    <input type="text" name="aler" id="aler" class="form-control" placeholder="¿Tiene alergias algún medicamento o alimento?" autocomplete="off">

                </div>
            </div>

        </div>
    </div>


</div>
