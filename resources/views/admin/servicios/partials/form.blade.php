<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombreS', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre...',]) !!}
    @error('nombreS')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese descripcion...']) !!}
    @error('descripcion')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>