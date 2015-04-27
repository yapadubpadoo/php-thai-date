<?php

// namespace yapadubpadoo;

Class Thaidate {
	protected $date;
	protected $serverTimezone;
	protected $thaiTimezone = 'Asia/Bangkok';

	public function __construct($date)
	{		
		$this->date = new DateTime($date, new DateTimeZone($this->thaiTimezone));
	}

	public function getDate()
	{
		return $this->date;
	}

	public function getTimezone()
	{
		return $this->date->getTimezone()->getName();
	}
}