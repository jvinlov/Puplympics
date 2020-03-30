<!DOCTYPE html>
<html>
<head>
	<title>Puplympics</title>
</head>
<body>
	<h1>Puplympics</h1>
<?php

class Pup {

	public $name;
	public $speed;
	public $run_time;
	public $rest_time;
	public $racer_time;
	public $distance;
	public $points;

	//constructor

	public function __construct($name, $speed, $run_time, $rest_time, $racer_time, $distance, $points) {

		$this->name=$name;
		$this->speed=$speed;
		$this->run_time=$run_time;
		$this->rest_time=$rest_time;
		$this->racer_time=$racer_time;
		$this->distance=$distance;
		$this->points=$points;
	}
}

$alfie = new Pup ("Alfie", 5, 17, 57, 0, 0, 0);
$lincoln = new Pup ("Lincoln", 28, 6, 133, 0, 0, 0);
$tuck = new Pup ("Tuck", 23, 4, 83, 0, 0, 0);
$sullivan = new Pup ("Sullivan", 19, 7, 108, 0, 0, 0);
$stitch = new Pup ("Stitch", 4,22, 62, 0, 0, 0);
$zema = new Pup ("Zema", 16, 6, 86, 0, 0, 0);
$mara = new Pup ("Mara", 27, 6, 135, 0, 0, 0);
$butter = new Pup ("Butter", 12, 6, 53, 0, 0, 0);
$ember = new Pup ("Ember", 15, 4, 50, 0, 0, 0);

$contestants = array($alfie, $lincoln, $tuck, $sullivan, $stitch, $zema, $mara, $butter, $ember);
// multidimensional array

$pups = array(

	'Alfie' => array(
		
		'speed' => 5,
		'run_time' => 17,
		'rest_time' => 57,
		'racer_time' =>0,
		'distance' =>0,
		'points' =>0,
	),

	'Lincoln' => array(
		
		'speed' => 28,
		'run_time' => 6,
		'rest_time' => 133,
		'racer_time' =>0,
		'distance' =>0,
		'points' =>0,
	),

	'Tuck' => array(
		
		'speed' => 23,
		'run_time' => 4,
		'rest_time' => 83,
		'racer_time' =>0,
		'distance' =>0,
		'points' =>0,
	),

	'Sullivan' => array(
		
		'speed' => 19,
		'run_time' => 7,
		'rest_time' => 108,
		'racer_time' =>0,
		'distance' =>0,
		'points' =>0,
	),

	'Stitch' => array(
		
		'speed' => 4,
		'run_time' => 22,
		'rest_time' => 62,
		'racer_time' =>0,
		'distance' =>0,
		'points' =>0,
	),

	'Zema' => array(
		
		'speed' => 16,
		'run_time' => 6,
		'rest_time' => 86,
		'racer_time' =>0,
		'distance' =>0,
		'points' =>0,
	),

	'Mara' => array(
		
		'speed' => 27,
		'run_time' => 6,
		'rest_time' => 135,
		'racer_time' =>0,
		'distance' =>0,
		'points' =>0,
	),

	'Butter' => array(
		
		'speed' => 12,
		'run_time' => 6,
		'rest_time' => 53,
		'racer_time' =>0,
		'distance' =>0,
		'points' =>0,
	),

	'Ember' => array(
		
		'speed' => 15,
		'run_time' => 4,
		'rest_time' => 50,
		'racer_time' =>0,
		'distance' =>0,
		'points' =>0,
	)
);


$time = 0;
$state = "Running";
$one_second = array();

// running race

// function race() {

// 		// looping through 3461 seconds

// 		for (i=0, i<=3461, i++) {

// 			if ($state = "Running") {

// 						// if ($racer_time + $this->run_time <=3461) {
					
// 						$distance += (speed);
// 						$racer_time ++;
// 						array_push($one_second, $distance);
						
						
						
// 						if ($racer_time > $run_time){
// 						$state= "Resting";
// 						}

// 					} else {

// 					$racer_time ++;

// 					if ($resting_time < $racer_time){
// 						$state = "Running";
// 					}
					

						
// 						$racer_time= $racer_time + $this->rest_time;
// 						// echo "Time to Rest! <br>";
// 						// echo "Race Time: " . "$racer_time<br>";
// 						// echo "Let's get up and moving lazy puppy!<br><br>";
						
// 							$state= "Running";
						
// 						break;
// 				}
// 				// checking farthest distance including ties
// 				$max = max($one_second);

// 				foreach($one_second as $key => $val) {
// 					if($val === $max) $award[] = $key;
					
// 				}
// 				}
// 			}
		
		

	foreach ($contestants as $key => $value) {
	// echo $key ."\n<br>";
	// echo $key['Alfie']. "Distance =  " . ["distance"];

	foreach ($value as $sub_key =>$sub_val) {
		echo $sub_key . " = " . $sub_val . " <br>";
		// echo $pup['distance']. " " . $pup["points"]. "\n" ;
		
		}

	
		echo "<br>";
	}


// array_map("race", $pups);

// race($pups);
?>
</body>
</html>
