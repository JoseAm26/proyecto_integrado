@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="/">Inicio</a></li> --}}
                <li class="breadcrumb-item active" aria-current="page">Tienda</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12 mb-4">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                    </div>
                    @if(Auth::user()->role=='admin')
                        <div class="col-lg-7 mt-2">
                            <a href="{{route('product.index')}}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-plus"></i> Crear producto</a>
                         </div>
                         <div class="col-lg-7 mt-2">
                            <a href="{{route('user.index')}}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-plus"></i> Administrar usuarios</a>
                         </div>
                         <div class="col-lg-7 mt-2">
                            <a href="{{route('venta.index')}}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-plus"></i> Ver ventas</a>
                         </div>
                    @endif
                </div>
                <hr>
                <div class="row mt-5">
                    @foreach($products as $item)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="/images/{{ $item->image_path }}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $item->image_path }}"
                                >
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $item->item }}</h6></a>
                                    <p>${{ $item->price }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $item->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $item->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $item->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $item->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <button class="btn btn-secondary btn-sm my-1" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                </button>
                                                {{-- <form action="{{route('product.destroy', $item->id)}}" method="POST">
                                                    @csrf
                                                    {{ method_field('delete') }}
                                                    <button type="submit" class="btn btn-danger btn-sm my-1" class="tooltip-test" title="add to cart"><i class="fa-solid fa-trash"></i> eliminar registro
                                                    </button> --}}
                                                    @if (Auth::user()->role=='admin')
                                                        <a href="{{route('product.edit', $item)}}" class="btn btn-success btn-sm my-1" class="tooltip-test" title="add to cart"><i class="fa-solid fa-pen-to-square"></i> Actualizar registro</a>
                                                        <br>
                                                    @endif
                                                    <a href="{{route('product.show', $item)}}" class="btn btn-info btn-sm my-1" class="tooltip-test" title="add to cart"><i class="fa-solid fa-eye"></i> ver registro</a>
                                                {{-- </form> --}}

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
