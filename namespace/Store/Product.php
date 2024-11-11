<?php

namespace Store;

class Product {
    private string $name;
    private float $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getInfo(): string {
        return "Store Product: {$this->name} - Price: \${$this->price}";
    }
} 