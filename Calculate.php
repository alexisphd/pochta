<?php


namespace pochta;
use pochta\Sending;
use pochta\Sender;


class Calculate
{
    public $coeff;
    public $basePrice;
    public function __construct ($basePrice){
        $this->basePrice=$basePrice;
    }

public function getCalculation(Sending $parcel, $res)
{
   // $array = file_get_contents('php://input');
    $array = file_get_contents($res);

    if (isset($array)) {
        $array = json_decode($array, true);

        echo $parcel->transport .'<br>';

        if ($parcel->speed=='fast') {

            if (date("H") > 18) echo "Уже поздно, заказ быстрой доставкой до 18-00";
            else {
                echo 'Стоимость доставки: ' . $array['price'] . '<br>';
                $date = floor((strtotime($array['date']) - (strtotime('now'))) / (60 * 60 * 24)); // для нужной скорости
                echo 'Период доставки, дней: ' . $date . '<br>';
            }
        }
       else{
           $correctedPrice = $array['price']*$this->basePrice/$array['price']; //Как вариант для определения коэффициента
           echo 'Стоимость доставки: '. $correctedPrice. '<br>';
           echo 'Дата доставки: '. $array['date'] . '<br>';
       }
       if ($array['error']){
           echo 'Ошибка: '. $array ['error'];
       }

    }
}
}