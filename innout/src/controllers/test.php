<?php
//controller temporario

loadModel('WorkingHours');

$wh = WorkingHours::loadFromUserAndDate(2, date('Y-m-d'));


$workedInterval = $wh->getWorkedInterval()->format('%H:%I:%S');
echo "worked " . "$workedInterval";
echo '<br>';
$lunchInterval = $wh->getLunchInterval()->format('%H:%i:%S');
print_r($lunchInterval);

echo '<br>';

print_r($wh->getExitTime());
