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

	public function testGetDayOfWeek4()
	{
		$thaidate = new yapadubpadoo\Thaidate("2015-04-30 23:59:59");
		$dayOfWeek = $thaidate->getDayOfWeek();
		$this->assertEquals('พฤหัสบดี', $dayOfWeek);
	}

	public function testGetDayOfWeek5()
	{
		$thaidate = new yapadubpadoo\Thaidate("2015-05-01 01:00:00");
		$dayOfWeek = $thaidate->getDayOfWeek();
		$this->assertEquals('ศุกร์', $dayOfWeek);
	}

	public function testGetMonth4()
	{
		$thaidate = new yapadubpadoo\Thaidate("2015-04-30 23:59:59");
		$dayOfWeek = $thaidate->getMonth();
		$this->assertEquals('เมษายน', $dayOfWeek);
	}

	public function testGetMonth12()
	{
		$thaidate = new yapadubpadoo\Thaidate("2015-12-31 23:59:59");
		$dayOfWeek = $thaidate->getMonth();
		$this->assertEquals('ธันวาคม', $dayOfWeek);
	}

	public function testGetYear2558()
	{
		$thaidate = new yapadubpadoo\Thaidate("2015-12-31 23:59:59");
		$year = $thaidate->getYear();
		$this->assertEquals('2558', $year);
	}

	public function testGetYear2527()
	{
		$thaidate = new yapadubpadoo\Thaidate("1984-12-31 23:59:59");
		$year = $thaidate->getYear();
		$this->assertEquals('2527', $year);
	}

	public function testFormat()
	{
		$thaidate = new yapadubpadoo\Thaidate("1984-12-04 23:59:59");
		$datetime = $thaidate->format('Y-m-d H:i:s');
		$this->assertEquals('1984-12-04 23:59:59', $datetime);
	}

	public function testFormatThaiDay()
	{
		$thaidate = new yapadubpadoo\Thaidate("1984-12-04 23:59:59");
		$datetime = $thaidate->format('วัน ::ThDay::');
		$this->assertEquals('วัน อังคาร', $datetime);
	}

	public function testFormatThaiDayWithPHPDateFormat()
	{
		$thaidate = new yapadubpadoo\Thaidate("1984-12-04 23:59:59");
		$datetime = $thaidate->format('วัน ::ThDay:: ที่ d');
		$this->assertEquals('วัน อังคาร ที่ 04', $datetime);
	}

	public function testFormatThaiMonthWithPHPDateFormat()
	{
		$thaidate = new yapadubpadoo\Thaidate("1984-12-04 23:59:59");
		$datetime = $thaidate->format('วัน ::ThDay:: ที่ d เดือน ::ThMonth::');
		$this->assertEquals('วัน อังคาร ที่ 04 เดือน ธันวาคม', $datetime);
	}

	public function testFormatThaiYearWithPHPDateFormat()
	{
		$thaidate = new yapadubpadoo\Thaidate("1984-12-04 23:59:59");
		$datetime = $thaidate->format('วัน ::ThDay:: ที่ d เดือน ::ThMonth:: พ.ศ. ::ThYear::');
		$this->assertEquals('วัน อังคาร ที่ 04 เดือน ธันวาคม พ.ศ. 2527', $datetime);
	}
}