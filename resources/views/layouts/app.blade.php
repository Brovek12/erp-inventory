<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ERP Inventory</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Scripts -->
    </head>
    <body style="background-color: #f8f9fa;">
        
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">ERP Inventory</a>

            <div class="d-flex gap-2">
                <a href="{{ route('products.index') }}" class="btn btn-outline-light">Products</a>
                <a href="{{ route('orders.index') }}" class="btn btn-outline-light">Orders</a>
                <a href="{{ route('reports.index') }}" class="btn btn-outline-light">Reports</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">Logout</button>
                </form>
            </div>


        </div>
        

      </nav>

      <div class="container py-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
           @if(session('error'))
             <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
      
      </div>
     

    </body>
       @yield('content')
</html>

