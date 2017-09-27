<?php

function combinatoria($m,$s)
{
$comb=factorial($m)/(factorial($m-$s)*factorial($s));	
return $comb;
}

?>
