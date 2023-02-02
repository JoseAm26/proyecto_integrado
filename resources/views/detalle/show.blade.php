@extends('layouts.app')

@section('template_title')
    {{ $detalle->name ?? 'Show Detalle' }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Detalle') }}
                        </span>


                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Codigo</th>

                                    <th>precio</th>
                                    <th>Id venta</th>
                                    <th>Usuario</th>
                                    <th>Id usuario</th>


                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($detalle as $det)
                                    @if ($id = $det->id_producto)
                                        <tr>
                                            {{-- <td>{{ ++$i }}</td> --}}

                                            <td>{{ $det->nombre }}</td>
                                            <td>{{ $det->precio }}</td>
                                            <td>{{ $det->usuario}}</td>
                                            <td>{{ $det->contidad }}</td>

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
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
