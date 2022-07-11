<?php


namespace pochta;
use pochta\Sender;

class TransportCompany
{
    public $name;
    public $price;
    public $date;
    public $coef;
    public $sourceKladr = "не определено";
    public $targetKladr = "не определен";
    public $weight =0;
    public $error;

    public function __construct($name, $sourceKladr, $targetKladr,$weight,$price,$coef,$date)
    {
        $this->name=$name;
        $this->sourceKladr=$sourceKladr;
        $this->targetKladr=$targetKladr;
        $this->weight=$weight;
        $this->price=$price;
        $this->coef=$coef;
        $this->date=date('now');
        $this->error =0;
    }

    public function getReply(Sending $parcel){
        $hour = date('H', $parcel->dateToday);
        if ($hour>18) return "Сегодня уже поздно";
        else{
        if ($parcel->dateToday)
        if ($parcel->targetKladr===$this->targetKladr && $parcel->sourceKladr===$this->sourceKladr&&
        $parcel->dateToday===$this->date && $parcel->weight===$this->weight)
        $json = json_encode(array('price'=>$this->price, 'date'=>$this->date, 'error'=>$this->error));
        return $json;
    }
    }

}