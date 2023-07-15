<?php

namespace App\Catalog;

use App\Catalog\Sorters\Sorter;

class Catalog
{
    private $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function getProducts(Sorter $sorter): array
    {
        return $sorter->sort($this->products);
    }
}
