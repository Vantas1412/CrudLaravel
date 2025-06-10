<div class="row padding-1 p-1">
    <div class="col-md-12">
        

        <div class="form-group mb-2 mb20">
            <label for="fecha_orden" class="form-label">{{ __('Fecha Orden') }}</label>
            <input type="date" name="fecha_orden" class="form-control @error('fecha_orden') is-invalid @enderror" value="{{ old('fecha_orden', $orden?->fecha_orden) }}" id="fecha_orden" placeholder="Fecha Orden">
            {!! $errors->first('fecha_orden', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2">
    <label for="codigo_producto">Producto</label>
    <select name="codigo_producto" id="codigo_producto" class="form-select">
        <option value="">-- Selecciona un producto --</option>
        @foreach ($productos as $producto)
            <option value="{{ $producto->codigo_producto }}">{{ $producto->nombre_producto }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-2">
    <label for="codigo_proveedor">Proveedor</label>
    <select name="codigo_proveedor" id="codigo_proveedor" class="form-select">
        <option value="">-- Selecciona un proveedor --</option>
        {{-- Aquí se llenará dinámicamente con JS --}}
    </select>
</div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>