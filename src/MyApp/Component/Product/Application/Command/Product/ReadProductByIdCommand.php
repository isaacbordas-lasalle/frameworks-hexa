<?php

namespace MyApp\Component\Product\Application\Command\Product;

class ReadProductByIdCommand
{
    private $productId;

    public function __construct(int $productId)
    {
        $this->productId = $productId;
    }

    public function productId(): int
    {
        return $this->productId;
    }
}