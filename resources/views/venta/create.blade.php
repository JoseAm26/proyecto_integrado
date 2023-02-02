@extends('layouts.app')

@section('template_title')
    Create Venta
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
                                    <th>Nombre</th>
                                    <th>Nombre</th>
                                    <th>precio</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartCollection as $item)
                                <tr>
                                    <td>

                                            <b><a>{{ $item->name }}</a></b><br>

                                    </td>
                                    <td>
                                        <b></b>${{ $item->price }}<br>

                                    </td>
                                    <td>
                                        <b></b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                                    </td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td>
                                        <b>Total: </b>${{ \Cart::getTotal() }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="{{ route('cart.procesopedido') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-secondary btn-md">Terminar pedido</button>
                        </form>
                    </div>
                </div>
            </div>
            {!! $ventas->links() !!}
        </div>
    </div>
</div>
@endsection
