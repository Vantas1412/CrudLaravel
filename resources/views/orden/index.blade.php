@extends('layouts.app')

@section('template_title')
    Ordens
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ordens') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ordens.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Orden') }}
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
                                        
									<th >Codigo Orden</th>
									<th >Fecha Orden</th>
									<th >Codigo Proveedor</th>
									<th >Codigo Producto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordens as $orden)
                                        <tr>
                                            
                                            
										<td >{{ $orden->codigo_orden }}</td>
										<td >{{ $orden->fecha_orden }}</td>
										<td >{{ $orden->codigo_proveedor }}</td>
										<td >{{ $orden->codigo_producto }}</td>

                                            <td>
                                                <form action="{{ route('ordens.destroy', $orden->codigo_orden) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ordens.show', $orden->codigo_orden) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ordens.edit', $orden->codigo_orden) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $ordens->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
