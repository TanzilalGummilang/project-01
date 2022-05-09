<?php

namespace TG\Project01\Service;

use TG\Project01\Repository\PlayerRepository;


class PlayerService
{
  public function __construct(private PlayerRepository $playerRepository){}

  public function showAllPlayer()
  {
    return $this->playerRepository->showPlayer();
  }
}