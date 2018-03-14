
<?php
use PHPUnit\Framework\TestCase;
 
include_once('logic.php');
static $win;
static $win2;
$player->play();
$win = $player->points1;
$win2 = $player->points2;
class winner extends TestCase
{
	public function testWin1()
	{
		global $win;
		global $win2;
		$this->assertGreaterThan($win , $win2);
	}
	public function testWin2()
	{
		global $win;
		global $win2;
		$this->assertGreaterThan($win2 , $win);
	}
	
}
/* should return 1 failure 1 assertion */
?>