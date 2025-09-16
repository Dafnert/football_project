<?php

namespace WorldCup;

class Ball {
    private String $material;

    // Getter
    public function getMaterial(): string {
        return $this->material;
    }

    // Setter
    public function setMaterial(string $material): void {
        $this->material = $material;
    }


     public function move() {
        echo "moving\n";
    }


    }

