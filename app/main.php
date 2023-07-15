<?php

// require_once __DIR__ . '/vendor/autoload.php';

use App\Catalog\Catalog;
use App\Catalog\Sorters\ProductPriceSorter;
use App\Catalog\Sorters\ProductSalesPerViewSorter;

// Sample products array
$products = [
    [
        'id' => 1,
        'name' => 'Alabaster Table',
        'price' => 12.99,
        'created' => '2019-01-04',
        'sales_count' => 32,
        'views_count' => 730,
    ],
    [
        'id' => 2,
        'name' => 'Zebra Table',
        'price' => 44.49,
        'created' => '2012-01-04',
        'sales_count' => 301,
        'views_count' => 3279,
    ],
    [
        'id' => 3,
        'name' => 'Coffee Table',
        'price' => 10.00,
        'created' => '2014-05-28',
        'sales_count' => 1048,
        'views_count' => 20123,
    ],
];

$catalog = new Catalog($products);

// Sort products by price
$productPriceSorter = new ProductPriceSorter();
$productsSortedByPrice = $catalog->getProducts($productPriceSorter);

// Sort products by sales per view ratio
$productSalesPerViewSorter = new ProductSalesPerViewSorter();
$productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);

// Display sorted products
echo "Products sorted by price:\n";
foreach ($productsSortedByPrice as $product) {
    echo $product['name'] . ' - $' . $product['price'] . "\n";
}

echo "\n";

echo "Products sorted by sales per view ratio:\n";
foreach ($productsSortedBySalesPerView as $product) {
    echo $product['name'] . ' - Sales/View: ' . ($product['sales_count'] / $product['views_count']) . "\n";
}
