<?php 


final class Game{
	 	public $chances = array('Rock','Scissors','Paper');	
			public function hand1(){
					$hand = count($this->chances);
				$draw = rand(0,$hand-1);
				$this->hand = $this->chances[$draw];
				return $this->hand;
			}
			public function hand2(){
				$hand = count($this->chances);				
				$this->draw = rand(0,$hand-1);
				$this->hand = $this->chances[$this->draw];
				return $this->hand;
				
			}
			public function __construct() {
					$this->points1 = 0;
					$this->points2 = 0;
			}
			
			public function play(){
				$rounds = 3 ;
				for($i=0;$i<$rounds;$i++){ /* where 3 is number of rounds */
					$hand1 = $this->hand1();
					$hand2 = $this->hand2();
					echo $hand1." VS ".$hand2;
					if($hand1 === $hand2){
						 echo ' - Draw<br />';
						 $i--;
					 }else{
						if($hand1=='Rock' && $hand2== 'Scissors' || $hand1 == 'Scissors' && $hand2 == 'Paper' || $hand1 == 'Paper' && $hand2 == 'Rock'){
							echo ' - Player 1 wins this round<br />';
							$this->points1++;
						}else{
							echo ' - Player 2 wins this round<br />';
							$this->points2++;
						}		
					 }
				}
				
					
			}
				
			public function winner(){
				if($this->points1 > $this->points2){
					$this->winner = 'Winner: Player #1';
					print $this->winner;
				}else{
					$this->winner = 'Winner: Player #2';
					print $this->winner;		
				}
			}
	 }
	$player = new Game;
?>