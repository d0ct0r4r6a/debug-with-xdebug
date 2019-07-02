<!-- Demonstrasi II -->
<!-- Ekspektasi:
  - angka 1 sebagai nilai awal dari input field
  - tombol 'Tambah 1' akan menambahkan nilai input field terus menerus
-->
<!-- Ubah 2 baris dalam satu file -->
<?php
include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Demonstrasi 2</title>
</head>
<body>
  <p>Ekspektasi:</p>
  <ul>
    <li>angka 1 sebagai nilai awal dari input field</li>
    <li>tombol 'Tambah 1' akan menambahkan nilai input field terus menerus</li>
  </ul>
  <p>Realita:</p>
  <button onclick="callAPI()">Tambah 1</button>
  <input
    id="current-value"
    type="number"
    value="<?php echo $initial_value ?>"
    disabled>
  <script>
    function callAPI() {
      var inputElement = document.getElementById("current-value")
      fetch("api.php?value=" + inputElement.value)
        .then(resp => resp.json())
        .then(resp => {
          inputElement.value = resp;
        })
    }
  </script>
</body>
</html>