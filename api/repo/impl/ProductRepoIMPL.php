<?php

require_once __DIR__ . '/../ProductRepo.php';
require_once __DIR__ . '/../../core/ProductDTO.php';

class ProductRepoIMPL implements ProductRepo

{
    private $connection;

    function saveProduct(ProductDTO $dto): bool
    {

       /* print $dto->getProductid();
        print $dto->getName();
        print $dto->getMaterial();
        print $dto->getModal();
        print $dto->getStatus();
        print $dto->getSize();
        print $dto->getPrice();
        print $dto->getColor();
        print $dto->getDiscount();
        print $dto->getDescription();
        print $dto->getImage();
        print $dto->getCategory();*/

        $status = 0;

        if ($dto->getStatus() == "active") {
            $status = 1;
        }
        /*
                $servername = "127.0.0.1";
                $username = "root";
                $password = "hasika1234";
                $dbname = "sofalk";
        // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }*/

        /*$result = $this->connection->query("INSERT INTO product VALUES (
'{$dto->getProductid()}',
'{$dto->getName()}',
'{$dto->getModal()}',
'{$dto->getSize()}',
'{$dto->getMaterial()}',
'{$dto->getPrice()}',
'{$dto->getColor()}',
'{$dto->getImage()}',
'{$status}',
'{$dto->getCategory()}',
'{$dto->getDescription()}',
'{$dto->getDiscount()}',
)");*/

       return $this->connection->query("INSERT INTO product VALUES ('{$dto->getProductid()}','{$dto->getName()}','{$dto->getModal()}','{$dto->getSize()}','{$dto->getMaterial()}','{$dto->getPrice()}','{$dto->getColor()}','{$dto->getImage()}','{$status}','{$dto->getCategory()}','{$dto->getDescription()}','{$dto->getDiscount()}')");
    }

    function updateProduct(ProductDTO $dto): bool
    {
        print 'ok';
        $status = 0;

        if ($dto->getStatus() == "active") {
            $status = 1;
        }
        return $this->connection->query("UPDATE product SET product_name='{$dto->getName()}',modal='{$dto->getModal()}',size='{$dto->getSize()}',metirial='{$dto->getMaterial()}',price='{$dto->getPrice()}',color='{$dto->getColor()}',image='{$dto->getImage()}',status='{$status}',categery='{$dto->getCategory()}',description='{$dto->getDescription()}',discount='{$dto->getDiscount()}' WHERE product_id={$dto->getProductid()},");
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
        $datas=array();
        $result=$this->connection->query("SELECT * FROM product");
        while ($row = mysqli_fetch_array($result)) {
            $datas[]=$row['product_id'];
        }
    }

    public function setConnction(mysqli $connection)
    {
        $this->connection = $connection;
    }

    function getProductID(): int
    {
        $result = $this->connection->query("SELECT product_id FROM product ORDER BY product_id DESC LIMIT 1");
        while ($row = mysqli_fetch_array($result)) {
            return $row['product_id'];
        }
        return 0;
    }
}