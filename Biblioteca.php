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

function variancia($lista){;
$sumc=0;
for ($i=0;$i<count($lista);$i++) { 
$sumc=$sumc+$lista[$i]*$lista[$i]; 
    }
$var=($sumc-count($lista)*promedio($lista)*promedio($lista))/(count($lista)-1);
return $var;
}

function cv($lista){
$cv=sqrt(variancia($lista)*100/promedio($lista));
return $cv;
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
