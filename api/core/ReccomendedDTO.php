<?php


class ReccomendedDTO
{
private $productid;
private $status;

    /**
     * ReccomendedDTO constructor.
     * @param $productid
     * @param $status
     */
    public function __construct($productid, $status)
    {
        $this->productid = $productid;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * @param mixed $productid
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }




}