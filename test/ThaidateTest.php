<?php 
require_once __DIR__.'/../src/yapadubpadoo/Thaidate.php';

Class ThaidateTest extends \PHPUnit_Framework_TestCase
{
	public function testThidateObjectCanCreate()
	{
		$thaidate = new yapadubpadoo\Thaidate();
	}
}