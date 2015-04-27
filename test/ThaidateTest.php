<?php 
require_once __DIR__.'/../src/yapadubpadoo/Thaidate.php';

Class ThaidateTest extends \PHPUnit_Framework_TestCase
{
	public function testThidateObjectCanCreate()
	{
		$thaidate = new Thaidate("2015-04-10 01:00:00");
	}

	public function testGetDateReturnDate()
	{
		$thaidate = new Thaidate("2015-04-10 01:00:00");
		$date = $thaidate->getDate();
		$this->assertTrue(method_exists($date, 'getTimestamp'));
	}

	public function testGetTimeZoneMustBeBangkok()
	{
		$thaidate = new Thaidate("2015-04-10 01:00:00");
		$timezone = $thaidate->getTimezone();
		$this->assertEquals('Asia/Bangkok', $timezone);
	}
}