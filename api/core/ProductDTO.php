<?php


class ProductDTO
{
    private $productid;
    private $name;
    private $modal;
    private $size;
    private $material;
    private $price;
    private $color;
    private $image;
    private $status;
    private $category;
    private $description;
    private $discount;

    /**
     * ProductDTO constructor.
     * @param $productid
     * @param $name
     * @param $modal
     * @param $size
     * @param $material
     * @param $price
     * @param $color
     * @param $image
     * @param $status
     * @param $category
     * @param $description
     * @param $discount
     */
    public function __construct($productid, $name, $modal, $size, $material, $price, $color, $image, $status, $category, $description, $discount)
    {
        $this->productid = $productid;
        $this->name = $name;
        $this->modal = $modal;
        $this->size = $size;
        $this->material = $material;
        $this->price = $price;
        $this->color = $color;
        $this->image = $image;
        $this->status = $status;
        $this->category = $category;
        $this->description = $description;
        $this->discount = $discount;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getModal()
    {
        return $this->modal;
    }

    /**
     * @param mixed $modal
     */
    public function setModal($modal)
    {
        $this->modal = $modal;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
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

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }


}