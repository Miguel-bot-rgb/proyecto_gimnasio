<div class="form-group">
    {!! Form::label('DNI', 'DNI:') !!}
    {!! Form::text('DNI', null, ['class' => 'form-control', 'placeholder' => 'Ingrese DNI...',]) !!}
    @error('DNI')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('Apellido', 'Apellido:') !!}
    {!! Form::text('Apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Apellido...']) !!}
    @error('Sueldo')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('Nombre', 'Nombre:') !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre...']) !!}
    @error('Nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('Telefono', 'Telefono:') !!}
    {!! Form::text('Telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Telefono...']) !!}
    @error('Sueldo')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>