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

	public function __construct($name, $speed, $run_time, $rest_time, $racer_time, $distance, $points, $state) {

		$this->name=$name;
		$this->speed=$speed;
		$this->run_time=$run_time;
		$this->rest_time=$rest_time;
		$this->racer_time=$racer_time;
		$this->distance=$distance;
		$this->points=$points;
		$this->state=$state;
		
	}

	public function race() {

		
		$one_second = array();
		
		// looping through 3 seconds. 

		for ($time=1; $time<=3461; $time++) {

			//  each second run the following: 

			// foreach loop through all contestants (troubled)
				foreach($contestants as $value) {

					// check state running or resting

					if ($this->state = "Running") {

						$this->distance += ($this->speed);

						$this->racer_time ++;

					// push each distance into array

						array_push($one_second, $this->distance);

					// trying to reduce run time, but I realize this will reset to run_time each second
						$run_interval = $this->run_time;
						$run_interval --;

							if ($run_interval = 0) {
								$this->state = "Resting";
								}

						} else {

							// Resting state

							$this->racer_time ++;
							// create rest interval equal to rest time, then reduce by one each second
							$rest_interval = $this->rest_time;
							$rest_interval --;

							// push each distance into array, even while resting

								array_push($one_second, $this->distance);

							// check to see if still resting, change state at end of rest
								if($rest_interval = 0){
									$this->state = "Running";
									$rest_interval = $this->rest_time;
								}
						}
				}

									
					

						// still in time for loop, checking farthest distance including ties

					$max = max($one_second);

					foreach($one_second as $key => $val) {
						if($val === $max) $award[] = $val;
					
						
					}
					echo "\n Leader is " .  $max ."<br>";

					// add one point to leader(s)

					$award[points] ++

					// reset $one_second array before next second

					unset($one_second);
							
							
		}

	}
							
}

$alfie = new Pup ("Alfie", 5, 17, 57, 0, 0, 0, Running);
$lincoln = new Pup ("Lincoln", 28, 6, 133, 0, 0, 0, Running);
$tuck = new Pup ("Tuck", 23, 4, 83, 0, 0, 0, Running);
$sullivan = new Pup ("Sullivan", 19, 7, 108, 0, 0, 0, Running);
$stitch = new Pup ("Stitch", 4,22, 62, 0, 0, 0, Running);
$zema = new Pup ("Zema", 16, 6, 86, 0, 0, 0, Running);
$mara = new Pup ("Mara", 27, 6, 135, 0, 0, 0, Running);
$butter = new Pup ("Butter", 12, 6, 53, 0, 0, 0, Running);
$ember = new Pup ("Ember", 15, 4, 50, 0, 0, 0, Running);


$alfieArray = json_decode(json_encode($alfie), true);
$lincolnArray = json_decode(json_encode($lincoln), true);
$tuckArray = json_decode(json_encode($tuck), true);
$sullivanArray = json_decode(json_encode($sullivan), true);
$stitchArray = json_decode(json_encode($stitch), true);
$zemaArray = json_decode(json_encode($zema), true);
$maraArray = json_decode(json_encode($mara), true);
$butterArray = json_decode(json_encode($butter), true);
$emberArray = json_decode(json_encode($ember), true);

$contestants = array($alfieArray, $lincolnArray, $tuckArray, $sullivanArray, $stitchArray, $zemaArray, $maraArray, $butterArray, $emberArray);


array_map("race", $contestants);


// below is development testing
	// echo $contestants[2]["speed"];
// 		echo "<br>";
// 	$keys = array_keys($contestants); 
// for($i = 0; $i < count($contestants); $i++) { 
//     // echo $keys[$i] . "\n"; 
//     foreach($contestants[$keys[$i]] as $key => $value) { 
//         echo $key . " : " . $value . "\n<br>"; 
//     } 
//     echo "\n"; 
// } 
?>
</body>
</html>
