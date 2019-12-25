<?php

require_once __DIR__ . '/../core/ProductDTO.php';

interface ProductBO
{
    function saveProduct(ProductDTO $dto): bool;

    function updateProduct(ProductDTO $dto): bool;

    function deleteProduct($id): bool;

    function getProduct($id): ProductDTO;

    function getAllProducts(): array;
    function getID():int;
}