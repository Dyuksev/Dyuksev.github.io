<?php

  $f_json = 'http://bulk.openweathermap.org/sample/city.list.json.gz';
  $json = file_get_contents("$f_json");
  json_decode($json)

?>
