<?php

function combinatoria($m,$s)
{
$comb=factorial($m)/(factorial($m-$s)*factorial($s));	
return $comb;
}

function binomac($m,$p,$x)
{
$proba=0;
for ($i=0;$i<=$x;$i++)
{
$proba=$proba+binom($m,$p,$i);}
return $proba;
}

function promedio($lista) { 
$sum=0;
    for ($i=0;$i<count($lista);$i++) { 
       $sum=$sum+$lista[$i] ; 
    } 
$prom=$sum/count($lista);
return $prom;
}
?>
