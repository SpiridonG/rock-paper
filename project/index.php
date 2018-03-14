<?php
	$rounds = 3;
	 class Game{
	 	public $chances = array('Камък','Ножица','Хартия');	
			function hand1(){
				$hand = count($this->chances);
				$draw = rand(0,$hand-1);
				$this->hand = $this->chances[$draw];
				return $this->hand;
			}
			function __construct() {
					$this->points1 = 0;
					$this->points2 = 0;
			}
			function hand2(){
				$hand = count($this->chances);				
				$this->draw = rand(0,$hand-1);
				$this->hand = $this->chances[$this->draw];
				return $this->hand;
				
			}
			
			function play(){
				for($i=0;$i<3;$i++){
					$hand1 = $this->hand1();
					$hand2 = $this->hand2();
					echo $hand1." VS ".$hand2;
					if($hand1 === $hand2){
						 echo ' - Draw<br />';
						 $i--;
					 }else{
						if($hand1=='Камък' && $hand2== 'Ножица' || $hand1 == 'Ножица' && $hand2 == 'Хартия' || $hand1 == 'Хартия' && $hand2 == 'Камък'){
							echo ' - Печели играч №1 <br />';
							$this->points1++;
						}else{
							echo ' - Печели играч №2 <br />';
							$this->points2++;
						}		
					 }
				}
				
				
			}
				
			function winner(){
				if($this->points1 > $this->points2){
					print '<br /> <h1> Краен победител Играч №1 </h1> ';
				}else{
					print '<br /> <h1> Краен победител Играч №2 </h1> ';					
				}
			}
	 }
	$player = new Game;
?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link href='https://fonts.googleapis.com/css?family=Fira+Mono' rel='stylesheet' type='text/css'>
		
	</head>
	<body>
		<div style="max-width: 600px;margin:0 auto;">
			<?php 
				echo $player->play();
				?>
		</div>
		<div style="max-width: 600px;margin:0 auto;">
			<?php 
				echo $player->winner();
				?>
		</div>
	</body>
</html>













