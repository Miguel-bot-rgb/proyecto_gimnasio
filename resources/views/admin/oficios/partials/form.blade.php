<div class="form-group">
    {!! Form::label('Resposabilidad', 'Responsabilidad:') !!}
    {!! Form::text('Resposabilidad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese reponsabilidad...',]) !!}
    @error('Resposabilidad')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('Sueldo', 'Sueldo:') !!}
    {!! Form::text('Sueldo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Sueldo...']) !!}
    @error('Sueldo')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>