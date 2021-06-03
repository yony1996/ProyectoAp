<div class="content mt-4">

    <div class="form-group">
        <label for="examen">Examen Fisico</label>
        <textarea class="form-control" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '').replace(/(\..*?)\..*/g, '$1');" name="examen" id="examen" rows="3">{{$records->examen}}</textarea>
    </div>

</div>
