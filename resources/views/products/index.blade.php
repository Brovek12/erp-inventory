@extends('layouts.app')

@section('content')

<div class="card shadow-sm">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h4 class="mb-0">
            Products
        </h4>

        <a href="{{ route('products.create') }}" class="btn btn-primary">
            Add Product
        </a>

    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>
                    <th width="50">#</th>
                    <th>Product Name</th>
                    <th width="150">Quantity</th>
                    <th width="250">Action</th>
                </tr>

            </thead>

            <tbody>

                @forelse($products as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $item->name }}
                        </td>

                        <td>
                            {{ $item->quantity }}
                        </td>

                        <td>

                            <div class="d-flex gap-2">

                                <form action="{{ route('products.increase', $item->id) }}" method="POST">
                                    @csrf

                                    <button class="btn btn-success btn-sm">
                                        +
                                    </button>
                                </form>

                                <form action="{{ route('products.decrease', $item->id) }}" method="POST">
                                    @csrf

                                    <button class="btn btn-warning btn-sm">
                                        -
                                    </button>
                                </form>

                                <form action="{{ route('products.destroy', $item->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm">
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="4" class="text-center">
                            No products found
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection