<?php

require_once __DIR__ . '/../../core/ReccomendedDTO.php';
require_once __DIR__ . '/../RecomendedRepo.php';

class RecomendedRepoImpl implements RecomendedRepo
{
    private $connection;

    function addReccomended(ReccomendedDTO $DTO): bool
    {
        $result = $this->connection->query("INSERT INTO reccomended VALUES ('{$DTO->getProductid()}','{$DTO->getStatus()}')");
        /*if ($result) {
            return $result;
        } else {
            return $result;
        }*/
        return $result;
    }

    function updateReccomended(ReccomendedDTO $DTO): bool
    {
        // TODO: Implement updateReccomended() method.
    }

    function deleteReccomended($id): bool
    {
        // TODO: Implement deleteReccomended() method.
    }

    function searchReccomended($id): ReccomendedDTO
    {
        // TODO: Implement searchReccomended() method.
    }

    function getAllReccomended(): array
    {
        // TODO: Implement getAllReccomended() method.
    }

    function setConnction(mysqli $connection)
    {
        $this->connection = $connection;
    }
}