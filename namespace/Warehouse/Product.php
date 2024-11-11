<?php

namespace Warehouse;

class Product {
    private string $name;
    private int $stock;

    public function __construct(string $name, int $stock) {
        $this->name = $name;
        $this->stock = $stock;
    }

    public function getInfo(): string {
        return "Warehouse Product: {$this->name} - Stock: {$this->stock}";
    }
} 