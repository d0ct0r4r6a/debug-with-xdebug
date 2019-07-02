<?php

$initial_value = 3;

function append_string($to_append = "a", $string = "Hello") {
  return $string . $to_append;
}

function add_one($number) {
  return $number > 3 ? $number : $number + 1;
}