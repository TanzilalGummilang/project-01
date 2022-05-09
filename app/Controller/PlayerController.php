<?php

namespace TG\Project01\Controller;

use TG\Project01\App\View;
use TG\Project01\Config\Database;
use TG\Project01\Repository\PlayerRepository;
use TG\Project01\Service\PlayerService;


class PlayerController
{
  private PlayerService $playerService;

  public function __construct()
  {
    $playerRepository = new PlayerRepository(Database::getConnection());
    $this->playerService = new PlayerService($playerRepository);
  }

  public function index()
  {
    $result = $this->playerService->showAllPlayer();

    View::render(
      'Player/index', [
        'title' => "Squad",
        'player' => $result
      ]
    );
  }
}