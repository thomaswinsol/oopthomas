<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Vehicle {
    public $color;
    public $num_doors;
    public $price;
    public $shape;
    public $brand;
    
    
    /**
     * echo the price
     */
    public function showPrice () {
        echo 'This vehicle costs '. $this->price . '<br />';
    }
    
    /**
     * echo numDoors
     */
    public function numDoors() {
        echo 'This vehicle has ' . $this->num_doors . ' doors' . '<br />'; 
    }
    
    /*
     *  echo VROOM
     */
    public function drive() {
        echo 'VROOOOOOOOOM'. '<br />';
    }
     
    
    /**
     * 
     * @return string
     */
    public function getColor(){
        return $this->color;
    }
    /**
     * 
     * @return type
     */
    public function getNumDoors(){
        return $this->num_doors;
    }
    /**
     * 
     * @return type
     */
    public function getBrand(){
        return $this->brand;
    }
    /**
     * 
     * @return type
     */
    public function getPrice(){
        return $this->price;
    }
    /**
     * 
     * @return type
     */
    public function getShape(){
        return $this->shape;
    }
    
    /**
     * Set the color of the vehicle
     * @param type $color
     * @throws Exception
     */
    /**/
    public function setColor($color)
    {
        if (null === $color) {
            throw new Exception('no color');
        }
        
        $this->color = $color;
    }
    /**
     * 
     * @param integer $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    /**
     * 
     * @param integer $doors
     */
    public function setNumDoors($doors)
    {
        $this->num_doors = $doors;
    }
    /**
     * 
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    /**
     * 
     * @param string $shape
     */
    public function setShape($shape)
    {
        $this->shape = $shape;
    }
}
?>
