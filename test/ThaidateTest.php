<?php 
require_once __DIR__.'/../src/yapadubpadoo/Thaidate.php';

Class ThaidateTest extends PHPUnit_Framework_TestCase
{
	public function testThidateObjectCanCreate()
	{
		$thaidate = new yapadubpadoo\Thaidate("2015-04-10 01:00:00");
	}

	public function testGetDateReturnDate()
	{
		$thaidate = new yapadubpadoo\Thaidate("2015-04-10 01:00:00");
		$date = $thaidate->getPHPDateObject();
		$this->assertTrue(method_exists($date, 'getTimestamp'));
	}

	public function testGetTimeZoneMustBeBangkok()
	{
		$thaidate = new yapadubpadoo\Thaidate("2015-04-10 01:00:00");
		$timezone = $thaidate->getTimezone();
		$this->assertEquals('Asia/Bangkok', $timezone);
	}

	public function testGetDayOfWeek1()
	{
		$thaidate = new yapadubpadoo\Thaidate("2015-04-30 23:59:59");
		$dayOfWeek = $thaidate->getDayOfWeek();
		$this->assertEquals('พฤหัสบดี', $dayOfWeek);
	}

	public function testGetDayOfWeek2()
	{
		$thaidate = new yapadubpadoo\Thaidate("2015-05-01 01:00:00");
		$dayOfWeek = $thaidate->getDayOfWeek();
		$this->assertEquals('ศุกร์', $dayOfWeek);
	}
}