<?php

namespace App\Catalog\Sorters;

use App\Catalog\Sorters\Sorter;

class ProductSalesPerViewSorter implements Sorter
{
    public function sort(array $products): array
    {
        usort($products, function ($a, $b) {
            $ratioA = $a['sales_count'] / $a['views_count'];
            $ratioB = $b['sales_count'] / $b['views_count'];

            return $ratioA <=> $ratioB;
        });

        return $products;
    }
}
