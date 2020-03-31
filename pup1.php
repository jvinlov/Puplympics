<!DOCTYPE html>
<html>
<head>
	<title>Puplympics</title>
</head>
<body>
	<h1>Puplympics</h1>
<?php

// creating Pup class

class Pup {

	public $name;
	public $speed;
	public $run_time;
	public $rest_time;

	//constructor

	public function __construct($name, $speed, $run_time, $rest_time) {

		$this->name=$name;
		$this->speed=$speed;
		$this->run_time=$run_time;
		$this->rest_time=$rest_time;
	}
// race method

	public function race() {

			echo"\n";
			echo $this->name . " runs " . $this->speed . " feet per second" . " for " . $this->run_time ." seconds"." but then rests for ". $this->rest_time . " seconds" . "<br><br>";

			
			$distance=0;
			$time=0;
			$state="Running";

			while ($time <=3461) {

			
				switch($state){

					case "Running":

						// if ($racer_time + $this->run_time <=3461) {
						echo "Let's Run!<br>";
						$distance += ($this->run_time * $this->speed);
						$time += $this->run_time;
						// echo "Race Time: " . "$racer_time <br>";
						echo "$this->name Traveled: " . "$distance feet. <br><br>";
						$state= "Resting";
						break;

					case "Resting":
						
						$time += $this->rest_time;
						echo "Time to Rest! <br>";
						echo "Race Time: " . "$time<br>";
						// echo "Let's get up and moving lazy puppy!<br><br>";
						
							$state= "Running";
						
						break;
					
				}


			}

			
		}
		
}

$alfie = new Pup ("Alfie", 5, 17, 57);
$lincoln = new Pup ("Lincoln", 28, 6, 133);
$tuck = new Pup ("Tuck", 23, 4, 83);
$sullivan = new Pup ("Sullivan", 19, 7, 108);
$stitch = new Pup ("Stitch", 4,22, 62);
$zema = new Pup ("Zema", 16, 6, 86);
$mara = new Pup ("Mara", 27, 6, 135);
$butter = new Pup ("Butter", 12, 6, 53);
$ember = new Pup ("Ember", 15, 4, 50);




$contestants = array($alfie, $lincoln, $tuck, $sullivan, $stitch, $zema, $mara, $butter, $ember);



$cont_object = (object)$contestants;




// foreach ($stitch as $propName => $propValue) {
// 	echo $propName . ": " . $propValue . "<br>";
// }


// $cont_object->race();


$alfie->race();
$lincoln->race();
$tuck->race();
$sullivan->race();
$stitch->race();
$zema->race();
$mara->race();
$butter->race();
$ember->race();

?>
</body>
</html>
