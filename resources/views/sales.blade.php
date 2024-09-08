<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products - {{ $category }}</title>
</head>
<body>
    <h1>Category: {{ $category }}</h1>
    
    @if(count($products) > 0)
        <ul>
            @foreach($products as $product)
                <li>{{ $product['name'] }} - Rp {{ number_format($product['price'], 0, ',', '.') }}</li>
            @endforeach
        </ul>
    @else
        <p>No products available in this category.</p>
    @endif
    
    <a href="{{ url('/') }}">Back to Home</a>
</body>
</html>
