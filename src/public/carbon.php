<?php
require '../vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->year;

$dt = Carbon::now();
echo $dt->month;
