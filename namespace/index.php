<?php

// Memuat file kelas
require_once __DIR__ . '/Store/Product.php';
require_once __DIR__ . '/Warehouse/Product.php';

// Using both Product classes with aliases
use Store\Product as StoreProduct;
use Warehouse\Product as WarehouseProduct;

// Create instances of both Product classes
$storeProduct = new StoreProduct("Laptop", 999.99);
$warehouseProduct = new WarehouseProduct("Laptop", 50);

// Display information from both products
echo $storeProduct->getInfo() . "\n";
echo $warehouseProduct->getInfo() . "\n"; 