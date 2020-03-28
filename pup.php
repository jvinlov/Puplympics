<?php

class Pup {
	public function __construct($name, $speed, $run_time, $rest_time) {

		$this->name=$name;
		$this->speed=$speed;
		$this->run_time=$run_time;
		$this->rest_time=$rest_time;
	}

	public function race() {

	}
}

$alfie = new Pup("Alfie", 5, 17, 57);
$lincoln = new Pup("Lincoln", 28, 6, 133);
$tuck = new Pup("Tuck", 23, 4, 83);
$sullivan = new Pup("Sullivan", 19, 7, 108);
$stitch = new Pup("Stitch", 4,22, 62);
$zema = new Pup("Zema", 16, 6, 86);
$mara = new Pup("Mara", 27, 6, 135);
$butter = new Pup("Butter", 12, 6, 53);
$ember = new Pup("Ember", 15, 4, 50);


?>