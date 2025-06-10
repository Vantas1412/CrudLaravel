@extends('layouts.app')

@section('template_title')
    Proveedors
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proveedors') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proveedors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear proveedor') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
									<th >Codigo Proveedor</th>
									<th >Nombre Proveedor</th>
									<th >Codigo Producto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedors as $proveedor)
                                        <tr>

                                            
										<td >{{ $proveedor->codigo_proveedor }}</td>
										<td >{{ $proveedor->nombre_proveedor }}</td>
										<td >{{ $proveedor->codigo_producto }}</td>

                                            <td>
                                                <form action="{{ route('proveedors.destroy', $proveedor->codigo_proveedor) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proveedors.show', $proveedor->codigo_proveedor) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proveedors.edit', $proveedor->codigo_proveedor) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proveedors->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
