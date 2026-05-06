@extends('layouts.app')

@section('content')

<div class="card shadow-sm">

    <div class="card-header d-flex justify-content-between">

        <h4>Orders</h4>

        <a href="{{ route('orders.create') }}"
           class="btn btn-primary">
            Create Order
        </a>

    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead class="table-dark">
                <tr>
                    <th>Order Code</th>
                    <th>Product</th>
                    <th>Quantity</th>
                </tr>
            </thead>

            <tbody>

                @forelse($orders as $order)

                    @foreach($order->items as $item)

                        <tr>

                            <td>
                                {{ $order->order_code }}
                            </td>

                            <td>
                                {{ $item->product->name }}
                            </td>

                            <td>
                                {{ $item->quantity }}
                            </td>

                        </tr>

                    @endforeach

                @empty

                    <tr>
                        <td colspan="3" class="text-center">
                            No orders found
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection