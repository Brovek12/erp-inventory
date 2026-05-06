@extends('layouts.app')

@section('content')

<div class="card shadow-sm">

    <div class="card-header">
        <h4>Create Order</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('orders.store') }}"
              method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">
                    Product
                </label>

                <select name="product_id"
                        class="form-control"
                        required>

                    <option value="">
                        Choose Product
                    </option>

                    @foreach($products as $product)

                        <option value="{{ $product->id }}">

                            {{ $product->name }}
                            (Stock: {{ $product->quantity }})

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Quantity
                </label>

                <input type="number"
                       name="quantity"
                       class="form-control"
                       required>

            </div>

            <button class="btn btn-primary">
                Save Order
            </button>

        </form>

    </div>

</div>

@endsection