<?php

namespace WorldCup;
 class Player extends Person{

    private $position;
    private $name;

    //getter

public function getname() {
    return $this->name;
}
    //setter

    public function setName($name){
    $this->name = $name;
    }

    //getter
     public function getposition(){
        return $this->position;
}

    //setter

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
 



    
 

    
