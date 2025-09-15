<?php

namespace WorldCup;

class Person {
    private int $age; 

    public function run() {
        echo "running\n";
    }

    /**
     * Get the age
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Set the age
     */
    public function setAge(int $age) {
        $this->age = $age;
    }
}