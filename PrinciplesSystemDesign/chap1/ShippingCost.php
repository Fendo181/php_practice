<?php

class ShippingCost
{
    static $minimumForFreeCost = 5000;
    static $cost = 500;

    private $basePrice;

    public function __construct(int $basePrice){
        $this->basePrice = $basePrice;
    }

    public function amount () :int{
        if( $this->basePrice < self::$minimumForFreeCost) return self::$cost;
        return 0;
    }
}

function shippingCost(int $basePrice) :int {
    $cost = new ShippingCost($basePrice);
    return  $cost->amount();
}

echo '送料の料金は'.shippingCost(1000);
echo '送料の料金は'.shippingCost(5000);




