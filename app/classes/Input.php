<?php

namespace app\classes;

/**
* Gerencia os tipos de entrada GET e POST
*/
class Input
{

  /**
  * Faz uma requisisção do tipo GET
  *
  * @param string $param Nome da variável ou da Query
  * @param int $filter Constante com o filtro para a variável
  * @return string Retorna Falase se não encontrar ou o conteúdo encontrado
  */

  public static function get(string $param, int $filter = FILTER_SANITIZE_STRING) : string
  {
    return filter_input(INPUT_GET, $param, $filter);
  }

  /**
  * Faz uma requisisção do tipo POST
  *
  * @param string $param Nome da variável ou da Query
  * @param int $filter Constante com o filtro para a variável
  * @return string Retorna Falase se não encontrar ou o conteúdo encontrado
  */

  public static function post(string $param, int $filter = FILTER_SANITIZE_STRING) : string
  {
    return filter_input(INPUT_POST, $param, $filter);
  }
}
