<?php

namespace yapadubpadoo;

Class Thaidate {
	protected $date;
	protected $serverTimezone;
	protected $thaiTimezone = 'Asia/Bangkok';

	public function __construct($date)
	{		
		$this->date = new \DateTime($date, new \DateTimeZone($this->thaiTimezone));
	}

	private function getThaiDay($index)
	{
		$ThDayOfWeek = array(
			'อาทิตย์',
			'จันทร์',
			'อังคาร',
			'พุธ',
			'พฤหัสบดี',
			'ศุกร์',
			'เสาร์',
			'อาทิตย์'
			);
		return $ThDayOfWeek[$index];
	}

	public function getPHPDateObject()
	{
		return $this->date;
	}

	public function getTimezone()
	{
		return $this->date->getTimezone()->getName();
	}

	public function getDayOfWeek()
	{
		return $this->getThaiDay($this->date->format('w'));
	}
}