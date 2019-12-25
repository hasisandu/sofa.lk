<?php

require_once __DIR__.'../ReccomendedBo.php';
require_once __DIR__.'../../core/ReccomendedDTO.php';
require_once __DIR__.'../../repo/impl/RecomendedRepoImpl.php';
require_once __DIR__.'../../dbconnection/DBConnection.php';


class ReccomendedBoIMPL implements ReccomendedBo

{
    private $repo;

    /**
     * ReccomendedBoIMPL constructor.
     * @param $repo
     */
    public function __construct()
    {
        $this->repo = new RecomendedRepoImpl();
    }


    function addReccomended(ReccomendedDTO $dto): bool
    {
        $connection=(new DBConnection())->getConnection();
        $this->repo->setConnction($connection);
        return $this->repo->addReccomended($dto);
    }

    function updateReccomended(ReccomendedDTO $dto): bool
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

    function getAllReccomends(): array
    {
        // TODO: Implement getAllReccomends() method.
    }
}