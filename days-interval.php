<?php 

$date1=date_create('2023-06-03 07:00:00');
$date2=date_create('2023-06-05 07:00:00');

$start_date=date_create(date_format($date1, 'Y-m-d'));
$end_date=date_create(date_format($date2, 'Y-m-d'));

$interval= date_diff($start_date,$end_date);
$amount_days=$interval-> days;

$days=[];

for($i=0; $i<= $amount_days; $i++){
    $days[]=date_format($start_date, 'Y-m-d');
    date_modify($start_date,'+1 day');
}

echo '<pre>';
print_r($days);
echo '</pre>';
?>