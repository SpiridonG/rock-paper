
<?php
use PHPUnit\Framework\TestCase;
 
include_once('logic.php');
static $some;
$some = $player->hand1();

class hand1result extends TestCase
{
	public function testRock()
	{
		global $some;
		$this->assertEquals('Rock', $some);
	}
	public function testPaper()
	{
		global $some;
		$this->assertEquals('Paper', $some);
	}
	public function testScissors()
	{
		global $some;
		$this->assertEquals('Scissors', $some);
	}
}
/* should return 2 errors 1 assertion */

?>