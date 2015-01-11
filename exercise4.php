<?php

class car {
	public $color;
	public $engineType;
	public $numCylinders;
	public $make;
	public $model;
	private $topSpeed;

	public function __construct($color, $engineType, $numCylinders, $make, $model) {
		$this->color = $color;
		$this->engineType = $engineType;
		$this->numCylinders = $numCylinders;
		$this->make = $make;
		$this->model = $model;
	}

	public function set_top_speed($speed) {
		$this->topSpeed = $speed;
	}
}

$taurus = new car('blue', 'V6', 6, 'Ford', 'Taurus');
$taurus->color;

$s10 = new car('green', 'Inline 4', 4, 'Chevy', 'S10');
$chevelle = new car('blue', 'V8', 8, 'Chevrolet', 'Chevelle Malibu');

$taurus->set_top_speed(140);
$s10->set_top_speed(90);
$chevelle->set_top_speed(100);


var_dump($taurus);
