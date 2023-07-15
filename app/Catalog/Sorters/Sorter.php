<?php

namespace App\Catalog\Sorters;

interface Sorter
{
    public function sort(array $products): array;
}
