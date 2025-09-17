<?php

namespace WorldCup;
 class Player extends Person{

    private $position;

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
 



    
 

    
