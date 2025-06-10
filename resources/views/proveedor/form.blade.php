<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_proveedor" class="form-label">{{ __('Nombre Proveedor') }}</label>
            <input type="text" name="nombre_proveedor" class="form-control @error('nombre_proveedor') is-invalid @enderror" value="{{ old('nombre_proveedor', $proveedor?->nombre_proveedor) }}" id="nombre_proveedor" placeholder="Nombre Proveedor">
            {!! $errors->first('nombre_proveedor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo_producto" class="form-label">{{ __('Producto') }}</label>
<select name="codigo_producto" id="codigo_producto" class="form-select @error('codigo_producto') is-invalid @enderror">
    <option value="">-- Selecciona un producto --</option>
    @foreach ($productos as $producto)
        <option value="{{ $producto->codigo_producto }}"
            {{ old('codigo_producto', $proveedor?->codigo_producto) == $producto->codigo_producto ? 'selected' : '' }}>
            {{ $producto->nombre_producto }} (ID: {{ $producto->codigo_producto }})
        </option>
    @endforeach
</select>
{!! $errors->first('codigo_producto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}

        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>