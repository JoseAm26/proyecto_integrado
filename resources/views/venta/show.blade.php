@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? 'Show Venta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12 mt-20">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('venta.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Producto</th>

                                        <th>precio</th>
                                        <th>Usuario</th>
                                        <th>Cantidad</th>
                                        <th>Id venta</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($products as $pro)
                                        {{-- @if ($id = $det->id_producto) --}}
                                            <tr>
                                                {{-- <td>{{ ++$i }}</td> --}}

                                                <td>{{ $pro->nombre }}</td>
                                                <td>{{ $pro->precio }}</td>
                                                <td>{{ $pro->usuario}}</td>
                                                <td>{{ $pro->cantidad }}</td>
                                                <td>{{ $pro->id_venta }}</td>
                                                <td>
                                                    {{-- <form action="{{ route('detalles.destroy',$detalle->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('detalles.show',$detalle->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('detalles.edit',$detalle->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    </form> --}}
                                                </td>
                                            </tr>
                                        {{-- @endif --}}
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
