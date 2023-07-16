<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto">
        <table class="w-full border-collapse">
            <thead>
                <tr>
                    <th colspan="2" class="py-4 text-lg font-bold">Products Sorted by Price:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productsSortedByPrice as $product)
                <tr>
                    <td class="py-2 px-4 border">{{ $product['name'] }}</td>
                    <td class="py-2 px-4 border">${{ $product['price'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <table class="w-full border-collapse mt-8">
            <thead>
                <tr>
                    <th colspan="2" class="py-4 text-lg font-bold">Products Sorted by Sales per View Ratio:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productsSortedBySalesPerView as $product)
                <tr>
                    <td class="py-2 px-4 border">{{ $product['name'] }}</td>
                    <td class="py-2 px-4 border">Sales/View: {{ $product['sales_count'] / $product['views_count'] }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>