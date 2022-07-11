<?php


namespace pochta;


class Sending
{
    public $sourceKladr = "не определено";
    public $targetKladr = "не определен";
    public $weight =0;
    public $speed=0;
    public $transport="не определен";
    public $dateToday = "не определено";


    public function __construct()
    {
        if (isset($_POST["townFrom"])) {

            $this->sourceKladr = strip_tags($_POST["townFrom"]);
        }
        if (isset($_POST["townTo"])) {

            $this->targetKladr = strip_tags($_POST["townTo"]);
        }
        if (isset($_POST["weight"])) {

            $this->weight = strip_tags($_POST["weight"]);
        }

        if (isset($_POST["speed"])) {

            $this->speed = strip_tags($_POST["speed"]);
        }
        if (isset($_POST["transport"])) {

            $this->transport = strip_tags($_POST["transport"]);
        }
        if (isset($_POST["date"])) {

            $this->dateToday =  $_POST ['date'];
        }
    }



}

