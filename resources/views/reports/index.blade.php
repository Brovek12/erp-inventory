@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-4">

        <div class="card shadow-sm mb-3">

            <div class="card-body">

                <h5>Total Products</h5>

                <h2>
                    {{ $totalProducts }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow-sm mb-3">

            <div class="card-body">

                <h5>Total Stock</h5>

                <h2>
                    {{ $totalQuantity }}
                </h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow-sm mb-3">

            <div class="card-body">

                <h5>Total Orders</h5>

                <h2>
                    {{ $totalOrders }}
                </h2>

            </div>

        </div>

    </div>

</div>

<div class="card shadow-sm">

    <div class="card-header">
        Product Stock Report
    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Stock</th>
                </tr>

            </thead>

            <tbody>

                @foreach($products as $item)

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

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection