<?php

namespace App\Database\Models;

use App\Database\Models\crud;
use App\Database\ConnectData\connection;

class orders_product extends connection implements crud
{

    private $id,  $quantity, $price, $Product_id;


    public function create()
    {
    }
    public function read()
    {
        $query = "SELECT id,product_id,quantity FROM orders_products";
        return $this->conn->query($query);
    }
    public function update()
    {
    }
    public function delete()
    {
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of Product_id
     */
    public function getProduct_id()
    {
        return $this->Product_id;
    }

    /**
     * Set the value of Product_id
     *
     * @return  self
     */
    public function setProduct_id($Product_id)
    {
        $this->Product_id = $Product_id;

        return $this;
    }
}