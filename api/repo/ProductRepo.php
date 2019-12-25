<?php

require_once __DIR__.'/../core/ProductDTO.php';
require_once __DIR__.'/SuperRepo.php';

interface ProductRepo extends SuperRepo
{
    function saveProduct(ProductDTO $dto):bool;
    function updateProduct(ProductDTO $dto):bool;
    function deleteProduct($id):bool;
    function getProduct($id):ProductDTO;
    function getAllProducts():array ;
    function getProductID():int;
}