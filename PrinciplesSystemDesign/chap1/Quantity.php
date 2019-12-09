<?php

class Quantity
{
    private const MIN =1;
    private const MAX =100;
    public $value;

    public function __construct(int $value)
    {
        try{
            if($value < self::MIN) {
                throw new Exception('1未満です');
            }elseif ($value > self::MAX) {
                throw new Exception('100以上です');
            }
        }catch (Exception $e ) {
            echo '捕捉した例外: ',  $e->getMessage(), "\n";
        }

        $this->value = $value;
    }
}

$quanty = new Quantity('200');
echo $quanty->value;