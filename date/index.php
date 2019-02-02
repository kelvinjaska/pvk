<?php
//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;	//22.veebruar2013
?>
<h1> Ülesanne 8</h1>
<?php

$sp = mktime(12,31,0,03,20,2013);
echo  '1) Kuupaev ja kellaaeg ', date(d.'.'.m.'.'.y. ' '.h.'.'.i, $sp);

//
echo '<br>';
echo '<br>';

//nadalapaeva massiiv
$eesti_nadalapaevad = array(1=>'esmaspaev', 'teisipaev', 'kolmapaev', 'neljapaev', 'reede', 'laupaev', 'puhapaev');
//kuupäevad massiividesse
$nadal = $eesti_nadalapaevad[date('n')];
//kuupäeva väljastamine
echo '2) ' .$nadal;

echo '<br>';
echo '<br>';

echo '3) ' .$paev. '.'.$kuu.'. '.$aasta.' '.$nadal;

echo '<br>';
echo '<br>';

$time = time();
$mp = mktime(0,0,0,06,24, 2019);


$sek = $mp - $time;
$min = $sek / 60;
settype($min, 'int');
$sek = $sek %60;


$hour = $min / 60;
settype($hour, 'int');
$min = $min %60;

$day = $hour / 24;
settype($day, 'int');
$hour = $hour %24;

echo $day. ' '.$hour. ' ' .$min. ' '.$sek;

?>

