<?php

class car{
    public $color;  //property
    
    public function setColor($c){
        return 'Car is :'.$this->color=$c;
    }
    public function sayhay(){
        return 'sayhay';
        
    }
}

$newcar = new car;
$test=$newcar->setcolor('red');
echo $test;
echo '<hr>';

        echo $newcar->sayhay();
        echo '<hr>';
        echo $newcar->color='blue';