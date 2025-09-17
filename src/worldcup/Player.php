<?php

namespace WorldCup;
 class Player extends Person{

    private $position;
<<<<<<< HEAD
    private $age;
     //getter
     public function getAge(){
        return $this->position;
}

    //getter

     public function setAge($age): void {
        $this->position = $position;
=======
    private $name;

    //getter

public function getname() {
    return $this->name;
}
    //setter

    public function setName($name){
    $this->name = $name;
>>>>>>> 718beda07dca53618d7dad4858c6f84f5d8dee83
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
 



    
 

    