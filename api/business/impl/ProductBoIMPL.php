<?php

require_once __DIR__.'/../ProductBO.php';
require_once __DIR__.'/../../core/ProductDTO.php';
require_once __DIR__.'/../../repo/impl/ProductRepoIMPL.php';
require_once __DIR__.'/../../dbconnection/DBConnection.php';

class ProductBoIMPL implements ProductBO
{
    private $repo;

    /**
     * ProductBoIMPL constructor.
     * @param $repo
     */
    public function __construct()
    {
        $this->repo = new ProductRepoIMPL();
    }


    function saveProduct(ProductDTO $dto): bool
    {
        $this->repo->setConnction((new DBConnection())->getConnection());
        return $this->repo->saveProduct($dto);
    }

    function updateProduct(ProductDTO $dto): bool
    {

        $this->repo->setConnction((new DBConnection())->getConnection());
        return $this->repo->updateProduct($dto);
    }

    function deleteProduct($id): bool
    {
        // TODO: Implement deleteProduct() method.
    }

    function getProduct($id): ProductDTO
    {
        // TODO: Implement getProduct() method.
    }

    function getAllProducts(): array
    {
        // TODO: Implement getAllProducts() method.
    }

    function getID(): int
    {
        $this->repo->setConnction((new DBConnection())->getConnection());
        return $this->repo->getProductID();
    }
}