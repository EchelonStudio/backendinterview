<?php

use App\Catalog\Catalog;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Catalog\Sorters\ProductPriceSorter;
use App\Catalog\Sorters\ProductSalesPerViewSorter;

Route::get('/sort-products', function () {
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

    $productPriceSorter = new ProductPriceSorter();
    $productsSortedByPrice = $catalog->getProducts($productPriceSorter);

    $productSalesPerViewSorter = new ProductSalesPerViewSorter();
    $productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);

    return View::make('sorted-products', compact('productsSortedByPrice', 'productsSortedBySalesPerView'));
});
