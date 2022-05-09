<?php

namespace TG\Project01\Repository;

use PDO;
use TG\Project01\Domain\Player;


class PlayerRepository
{
  public function __construct(private PDO $connection){}

  public function showPlayer()
  {
    $statement = $this->connection->query("SELECT * FROM players");
    
    try{
      if($result = $statement->fetchAll()){
        // $player = new Player;
        // $player->playerCode = $row['player_code'];
        // $player->playerName = $row['player_name'];
        // $player->playerImage = $row['player_image'];
        // $player->playerNumber = $row['player_number'];
        // $player->position = $row['position'];
        // $player->positionDetail = $row['position_detail'];
        // $player->nationality = $row['nationality'];
        // $player->birthPlace = $row['birth_place'];
        // $player->birthDate = $row['birth_date'];
        // $player->height = $row['height'];
        // $player->salary = $row['salary'];
        // $player->contractExpire = $row['contract_expire'];
        return $result;
      }else{
        return null;
      }
    }finally{
      $statement->closeCursor();
    }
  }
}