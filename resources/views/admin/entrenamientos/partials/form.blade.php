<div class="form-group">
    {!! Form::label('nombreServicio', 'servicio:') !!}

    {{-- {!! Form::select('nombreS', $servs, null, ['class' => 'form-control']) !!}
    --}}

    <select class="custom-select dropdown-primary my-xl-auto form-control" aria-haspopup="true"
        aria-expanded="false" name="nombreS" id="nombreS">
        <option value="selected">Elija un servicio</option>
        @foreach ($servs as $serv)
            <option class="dropdown-item" value="{{ $serv->id }}">{{ $serv->nombreS }}</option>
        @endforeach
    </select>

    @error('nombreS')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('nombreSeccion', 'seccion:') !!}

    {{-- {!! Form::select('nombreSC', $seccs, null, ['class' => 'form-control']) !!}
    --}}
    <select class="custom-select dropdown-primary my-xl-auto form-control" aria-haspopup="true"
        aria-expanded="false" name="nombreSC" id="nombreSC">
        <option value="selected">Elija una seccion</option>
        @foreach ($seccs as $secc)
            <option class="dropdown-item" value="{{ $secc->id }}">{{ $secc->nombreSC }}</option>
        @endforeach
    </select>
    @error('nombreSC')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese descripcion...']) !!}
    @error('descripcion')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('observacion', 'observaciones:') !!}
    {!! Form::text('observacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese observacion...']) !!}
    @error('observaciones')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('estado', 'estado:') !!}
    {{-- {!! Form::text('estado', null, ['class' => 'form-control', 'placeholder' =>
    'Ingrese observacion...']) !!} --}}
    {!! Form::select('estado', $stds, null, ['class' => 'form-control']) !!}
    @error('estado')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
