<?php

namespace TG\Project01\Controller;

use TG\Project01\App\View;


class HomeController
{
  public function index()
  {
    View::render(
      'Home/index', [
        'title' => "Home"
      ]
    );
  }
}