<?php

require_once __DIR__ . '/../QueryRepo.php';

class QuerRepoIMPL implements QueryRepo
{
    private $connection;

    function getProductID(): int
    {
        $result = $this->connection->query("SELECT product_id FROM product ORDER BY product_id DESC LIMIT 1");
        while ($row = mysqli_fetch_array($result)) {
            print $row['product_id'];
            return $row['product_id'];
        }


    }

    function setConnction(mysqli $connection)
    {
        $this->$connection = $connection;
    }
}