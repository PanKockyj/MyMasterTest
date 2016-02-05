<?php

class Cycle
{
    public $arr;
 
 
    function setCycle(){
        for($i=1; $i<=100; $i++)
        {
            $this->arr[] = $i;
        }
        return $this->arr;
}
 
    function viewResult($arr){
        $i = 0;
        while($i<100){
            if($this->arr[$i]%3==0&&$this->arr[$i]%12!=0){
                echo $this->arr[$i];
                echo "<br>";
            }
            $i++;
        }
 
    }
}
 
$cycle = new Cycle();
$cycle->viewResult($cycle->setCycle());

?>