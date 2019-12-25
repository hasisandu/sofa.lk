<?php

require_once __DIR__.'/../QueryBO.php';
require_once __DIR__.'/../../repo/impl/QuerRepoIMPL.php';
require_once __DIR__.'/../../dbconnection/DBConnection.php';

class QueryBoImpl implements QueryBO
{
    private $repo;

    /**
     * QueryBoImpl constructor.
     */
    public function __construct()
    {
        $this->repo=new QuerRepoIMPL();
    }


    function getId():int
    {
        $this->repo->setConnction((new DBConnection())->getConnection());
        return $this->repo->getProductID();
    }
}