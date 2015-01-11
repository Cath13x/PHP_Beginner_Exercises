<?php

class house{
	public $houseType;
	public $color;
	public $stories;
	public $acreage;
	public $bedrooms;
	public $temperature;
	public function __construct($houseType, $color, $stories, $acreage, $bedrooms){
		$this->houseType = $houseType;
		$this->color = $color;
		$this->stories = $stories;
		$this->acreage = $acreage;
		$this->bedrooms = $bedrooms;
	}	
	public function setTemperature($temperature){
		$this->temperature = $temperature;
	}
}

$parentsHouse = new house('ranch', 'blue', 2, 0.65, 2);
var_dump($parentsHouse);

$grandmashouse = new house('colonial', 'white', 1, 1, 3);
$grandmashouse->setTemperature(72);
var_dump($grandmashouse);

