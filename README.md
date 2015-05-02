# php-thai-date
[![Build Status](https://travis-ci.org/yapadubpadoo/php-thai-date.svg?branch=dev)](https://travis-ci.org/yapadubpadoo/php-thai-date.svg)

## Convert PHP date to Thai style date
### Usage
```php
$thaidate = new yapadubpadoo\Thaidate("1984-12-04 23:59:59");
```
### Get Thai day
```php
$dayOfWeek = $thaidate->getDayOfWeek();
```
Result is "วันอังคาร"

### Get Thai month
```php
$month = $thaidate->getMonth();
```
Result is "ธันวาคม"

### Get Thai year (Year in Buddhist calendar)
```php
$year = $thaidate->getYear();
```
Result is "2527"

### Using format with standard PHP date format
| Format Character | Description | Example         |
| ------------- | ----------- | ----------- | 
| ::ThDay::| Day in Thai | วันอาทิตย์ |
| ::ThMonth::| Month in Thai  | เมษายน |
| ::ThYear::| Year in Buddhist calendar | 2526 |

```php
$format = 'วัน ::ThDay:: ที่ d เดือน ::ThMonth:: พ.ศ. ::ThYear:: (d M, Y - H:i)';
$datetime = $thaidate->format($format);
```
Result is "วัน อาทิตย์ ที่ 17 เดือน เมษายน พ.ศ. 2526 (17 Apr, 1983 09:00)"
