# Product Sorting Solution

This repository contains my solution for the product sorting assessment. The goal of the assessment was to create a flexible and extensible product sorting functionality that could be easily integrated into a Laravel application.

## Code Organization

The code is organized using a modular structure. The implementation is divided into separate files and directories, making it easier to manage and maintain. The use of namespaces helps prevent naming conflicts and improves code organization.

## Sorting Logic

The sorting logic is implemented using two classes: `ProductPriceSorter` and `ProductSalesPerViewSorter`. The `ProductPriceSorter` sorts the products based on their price in ascending order, while the `ProductSalesPerViewSorter` sorts them based on the sales per view ratio. The ratio is calculated by dividing the sales count by the views count.

## Extensibility

To achieve extensibility, I implemented the `Sorter` interface. This allows for easy addition of new sorting strategies without modifying the existing codebase. Different teams can create their own sorting classes by implementing the `Sorter` interface and providing their own sorting logic.

## Framework Integration

The code has been integrated into a Laravel application. The sorting logic is placed inside the `routes/web.php` file, where a route is defined for sorting products. The sorting functionality is invoked when accessing the defined route, definded route is: http://127.0.0.1:8000/sort-products

## Usage

To use the product sorting functionality, follow the instructions below:

1. Open the `routes/web.php` file in your Laravel application.
2. Locate the route defined for sorting products.
3. Modify the `$products` array within the route closure with the desired product data.
4. Visit the URL associated with the sorting route in your web browser.
5. The sorted products will be displayed based on the defined sorting strategies.

I hope am favourably considered sir.
