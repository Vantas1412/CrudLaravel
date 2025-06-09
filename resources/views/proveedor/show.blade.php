@extends('layouts.app')

@section('template_title')
    {{ $proveedor->name ?? __('Show') . " " . __('Proveedor') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('proveedors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo Proveedor:</strong>
                                    {{ $proveedor->codigo_proveedor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Proveedor:</strong>
                                    {{ $proveedor->nombre_proveedor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo Producto:</strong>
                                    {{ $proveedor->codigo_producto }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
