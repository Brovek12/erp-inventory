@extends('layouts.app')

@section('content')

<div class="card shadow-sm">

    <div class="card-header">
        <h4>Add Product</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('products.store') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">
                    Product Name
                </label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    required
                >

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Quantity
                </label>

                <input
                    type="number"
                    name="quantity"
                    class="form-control"
                    required
                >

            </div>

            <button class="btn btn-primary">
                Save Product
            </button>

        </form>

    </div>

</div>

@endsection