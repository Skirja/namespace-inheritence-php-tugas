<?php

require_once __DIR__ . '/Store/Product.php';
require_once __DIR__ . '/Warehouse/Product.php';

use Store\Product as StoreProduct;
use Warehouse\Product as WarehouseProduct;

$storeProduct = new StoreProduct("Laptop", 999.99);
$warehouseProduct = new WarehouseProduct("Laptop", 50);

echo $storeProduct->getInfo() . "\n";
echo $warehouseProduct->getInfo() . "\n"; 