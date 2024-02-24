<?php

class Product
{

    public $name = 'soap';
    public $price = 100;

    public function __construct($name = 'soap', $price = 100){
        $this->name = $name;
        $this->price = $price;
    }

    public function priceAsCurrency($divisor  = 1, $currencySymbol = '$')
    {

        $priceAsCurrency = $this->price / $divisor;
        return $currencySymbol . $priceAsCurrency;
    }
}
$product = new Product('tyres', 200);
print $product->name;
print $product->price;
// echo ($product->priceAsCurrency(currencySymbol: '₹') . PHP_EOL);
