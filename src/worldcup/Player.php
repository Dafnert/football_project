<?php

namespace WorldCup;
 class Player extends Person{

    private $position;
    private $age;
     //getter
     public function getAge(){
        return $this->position;
}

    //getter

     public function setAge($age): void {
        $this->position = $position;
    }

    //getter
     public function getposition(){
        return $this->position;
}

    //getter

     public function setposition($position): void {
        $this->position = $position;
    }

    public function passBall() {
        echo "Passing\n";
    }
    public function injury() {
        echo "Injuring\n";
    }

} 
 



    
 

    