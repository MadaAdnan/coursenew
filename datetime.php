<?php
// start with 1-1-1970 00:00:00utc
// 192.168.1.1 => turkey,Istanbul

date_default_timezone_set('Asia/Damascus');
$time= strtotime('+3 Hours');
echo time();
$date=mktime(12,40,10,3,30,2000);
echo date('l jS \of F Y h:i:s A',$date);

//echo $date;



