@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid mt-20">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Producto</span>
                        </div>

                    </div>
                    <form action="{{ route('cart.store') }}" method="POST">
                        {{ csrf_field() }}
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="/images/{{ $product->image_path }} alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                          <p class="text-gray-700 text-base">
                            Descripcion:  {{ $product->description }}
                          </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Precio: {{ $product->shipping_cost }}$</span>
                          @if (Auth::user()->role=='admin')
                          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Precio original: {{ $product->price }}</span>
                          @endif
                          
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
