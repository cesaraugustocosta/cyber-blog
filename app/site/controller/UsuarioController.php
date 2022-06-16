<?php

namespace app\site\controller;

use \app\classes\Input;

class UsuarioController
{
  public function __construct()
  {
    echo Input::get('teste', FILTER_SANITIZE_NUMBER_INT);
  }
}
