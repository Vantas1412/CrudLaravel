<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_producto" class="form-label">{{ __('Nombre Producto') }}</label>
            <input type="text" name="nombre_producto" class="form-control @error('nombre_producto') is-invalid @enderror" value="{{ old('nombre_producto', $producto?->nombre_producto) }}" id="nombre_producto" placeholder="Nombre Producto">
            {!! $errors->first('nombre_producto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
    
</div>