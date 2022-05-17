<?php

namespace TG\Project01\Service;

use TG\Project01\Exception\ValidationException;
use TG\Project01\Model\Player\ShowPlayerRequest;
use TG\Project01\Model\Player\ShowPlayerResponse;
use TG\Project01\Repository\PlayerRepository;


class PlayerService
{
  public function __construct(private PlayerRepository $playerRepository){}

  public function showAllPlayer()
  {
    return $this->playerRepository->showAll();
  }

  public function showPlayer(ShowPlayerRequest $request): ShowPlayerResponse
  {
    $player = $this->playerRepository->findByPlayerCode($request->playerCode);
    if($player == null){
      throw new ValidationException("Pemain not found");      
    }else{
      $response = new ShowPlayerResponse;
      $response->player = $player;
      return $response;
    }
  }
}