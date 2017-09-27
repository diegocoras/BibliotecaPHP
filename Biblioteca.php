<?php

function combinatoria($m,$s)
{
$comb=factorial($m)/(factorial($m-$s)*factorial($s));	
return $comb;
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

?>
