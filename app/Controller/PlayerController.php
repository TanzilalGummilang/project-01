<?php

namespace TG\Project01\Controller;

use TG\Project01\App\View;
use TG\Project01\Config\Database;
use TG\Project01\Exception\ValidationException;
use TG\Project01\Model\Player\ShowPlayerRequest;
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

  public function detail(string $playerCode)
  {
    $request = new ShowPlayerRequest;
    $request->playerCode = $playerCode;

    try{
      $response = $this->playerService->showPlayer($request);
      View::render(
        'Player/detail', [
          'title' => "Player Detail",
          'player' => [
            'playerImage' => $response->player->playerImage,
            'playerCode' => $response->player->playerCode,
            'playerName' => $response->player->playerName,
            'nationality' => $response->player->nationality,
            'position' => $response->player->position,
            'playerNumber' => $response->player->playerNumber
          ]
        ]
      );
    }catch(ValidationException $exception){
      View::render('Player/index', [
        'title' => "Squad",
        'error' => $exception->getMessage()
      ]);
    }
  }
}