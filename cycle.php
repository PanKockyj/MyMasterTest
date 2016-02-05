<?php

for($i=1; $i<=100; $i++){
	$arr[] = $i;
}

$count = count($arr);

for($i=0;$i<$count;$i++){
	if($arr[$i]%3==0&&$arr[$i]%12!=0){
		echo "$arr[$i]<br>";
	}

?>