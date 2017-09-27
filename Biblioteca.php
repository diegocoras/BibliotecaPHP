<?php

function combinatoria($m,$s)
{
$comb=factorial($m)/(factorial($m-$s)*factorial($s));	
return $comb;
}

function factorial($m)
{
$fact=1;
for ($i=1;$i<=$m;$i++){
$fact=$fact*$i;}
return $fact;
}

function binom($m,$p,$r)
{
$binom=combinatoria($m,$r)*pow($p,$r)*pow((1-$p),($m-$r));
return $binom;
	}

?>
