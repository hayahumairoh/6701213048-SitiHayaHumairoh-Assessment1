<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $angka1 = $_POST['num1'];
  $angka2 = $_POST['num2'];
  $operator = $_POST['dropdown'];


  if ($operator == '+') {
    $hasil = $num1 + $num2;
  } else if ($dropdown == '-') {
    $hasil = $num1 - $num2;
  } else if ($dropdown == '*') {
    $hasil = $num1 * $num2;
  } else if ($dropdown == '/') {
    $hasil = $num1 / $num2;
  }

//tampilan akhir tadi ada salah
  echo "Hasil operasi " . $num1 . " " . $dropdown . " " . $angka2 . " adalah " . $hasil;
}
?>