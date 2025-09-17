<?php

namespace WorldCup;

use DateTime;

require_once 'Person.php';
require_once 'Player.php';
require_once 'Coach.php';
require_once 'Ball.php';
require_once 'Field.php';
require_once 'Goalkeeper.php';
require_once 'Defender.php';
require_once 'Midfielder.php';
require_once 'Forward.php';
require_once 'Team.php';
 

$game = new Game();
$game->main();

/**
 * Class to define the game
 */
class Game {
    private $field;
    private $date;
    private $ball;
    private $teams;

    public function getField() {
        return $this->field;
    }

    public function setField($field) {
        $this->field = $field;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getBall() {
        return $this->ball;
    }

    public function setBall($ball) {
        $this->ball = $ball;
    }

    public function getTeams() {
        return $this->teams;
    }

    public function setTeams($teams) {
        $this->teams = $teams;
    }

    public function main() {
        echo "starting application\n";
        
        
        $this->setField(new Field(100));
        $this->setDate(new DateTime());
        $this->setBall(new Ball());

        // create players team A
        $listA = [];
        $listA[] = new Goalkeeper();
        $listA[] = new Defender();
        $listA[] = new Defender();
        $listA[] = new Defender();
        $listA[] = new Defender();
        $listA[] = new Midfielder();
        $listA[] = new Midfielder();
        $listA[] = new Midfielder();
        $listA[] = new Midfielder();
        $listA[] = new Forward();
        $listA[] = new Forward();

        // create players team B
        $listB = [];
        $listB[] = new Goalkeeper();
        $listB[] = new Defender();
        $listB[] = new Defender();
        $listB[] = new Defender();
        $listB[] = new Defender();
        $listB[] = new Midfielder();
        $listB[] = new Midfielder();
        $listB[] = new Midfielder();
        $listB[] = new Midfielder();
        $listB[] = new Forward();
        $listB[] = new Forward();

        $teamA = new Team("NewTeam");
        $teamA->setPlayers($listA);
        $teamA->setCoach(new Coach());

        $teamB = new Team("Maped");
        $teamB->setPlayers($listB);
        $teamB->setCoach(new Coach());

        $teams = [];
        $teams[] = $teamA;
        $teams[] = $teamB;
        $this->setTeams($teams);

        $this->start();
    }


    public function start() {
        echo "starting match actions...\n";

        for ($i = 0; $i < 10; $i++) {
            echo "\n--- Action " . ($i + 1) . " ---\n";

            // select random team
            $teamIndex = array_rand($this->teams);
            $selectedTeam = $this->teams[$teamIndex];
            echo "Team: " . $selectedTeam->getName() . "\n";

            // select random player
            $players = $selectedTeam->getPlayers();
            $playerIndex = array_rand($players);
            $selectedPlayer = $players[$playerIndex];
            echo "Player type: " . (new \ReflectionClass($selectedPlayer))->getShortName() . "\n";

            // common actions
            $selectedPlayer->run();
            $selectedPlayer->passBall();

            // specific actions
            if ($selectedPlayer instanceof Forward) {
                $selectedPlayer->drible();
                $selectedPlayer->kick($this->getBall());
            } else if ($selectedPlayer instanceof Midfielder) {
                $selectedPlayer->organize();
            } else if ($selectedPlayer instanceof Defender) {
                $selectedPlayer->steal($this->getBall());
            } else if ($selectedPlayer instanceof Goalkeeper) {
                $selectedPlayer->block($this->getBall());
            }
        }
    }
    
}
