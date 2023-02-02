@extends('layouts.app')

@section('template_title')
    Venta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 mt-20">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Venta') }}
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
										<th>subtotal</th>
										<th>impuesto</th>
                                        <th>total</th>
                                        <th>estado</th>
                                        <th>otros</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ventas as $item)
                                    <tr>
                                        <td>

                                            {{$item->codigo}}

                                        </td>
                                        <td>
                                            {{$item->subtotal}}

                                        </td>
                                        <td>
                                            {{$item->impuesto}}
                                        </td>

                                        <td>

                                            {{$item->total}}

                                        </td>
                                        <td>

                                            {{$item->estado}}

                                        </td>
                                        <td>
                                            <form action="{{route('venta.show', $item->id)}}">
                                                <button class="btn btn-dark">Ver pedido</button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                {!! $ventas->links() !!}
            </div>
        </div>
    </div>
@endsection
