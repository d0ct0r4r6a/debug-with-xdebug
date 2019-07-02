<!-- Demonstrasi I -->
<!-- Ekspektasi: Memunculkan tulisan "Hello, world" -->
<!-- Ubah hanya 1 baris di file ini -->
<?php
include "functions.php";

$test_string = "Hello, ";

$test_string = append_string("world");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Demonstrasi 1</title>
</head>
<body>
  <p>Ekspektasi: Memunculkan tulisan "Hello, world"</p>
  <span>Realita:</span>
</body>
</html>

<?php

var_dump($test_string);
die;

if ($test_string === "Hello, world") {
  echo "Hello, world";
} else {
  echo "Something's wrong";
}