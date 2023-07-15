<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Products Sorted by Price:</h1>
    <ul>
        @foreach ($productsSortedByPrice as $product)
        <li>{{ $product['name'] }} - ${{ $product['price'] }}</li>
        @endforeach
    </ul>

    <h1>Products Sorted by Sales per View Ratio:</h1>
    <ul>
        @foreach ($productsSortedBySalesPerView as $product)
        <li>{{ $product['name'] }} - Sales/View: {{ $product['sales_count'] / $product['views_count'] }}</li>
        @endforeach
    </ul>
</body>

</html>