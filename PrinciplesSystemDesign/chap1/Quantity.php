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

    private function addValue($other) {
        $sum = $this->value + $other;
        return $sum;
    }


    public function canAdd(int $other) :bool {
        $added = self::addValue($other);
        return $added <= self::MAX;
    }

    public function add(int $other) {

        try{
            if(!$this->canAdd($other)) {
                throw new Exception('合計が100を超えています');
            }
            $added = $this->addValue($other);
            // addすると新しいオブジェクトを呼び出す
            return new Quantity($added);

        }catch (Exception $e){
            echo '捕捉した例外: ',  $e->getMessage(), "\n";
        }
    }
}

// これで一回新しいオブジェクトを生成する
$quanty = new Quantity(10);
echo $quanty->value;

// 新しいオブジェクトを生成する
$quanty->add(100);