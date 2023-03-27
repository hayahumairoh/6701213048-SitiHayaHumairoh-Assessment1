<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $angka1 = $_POST['num1'];
  $operator = $_POST['dropdown'];
  $angka2 = $_POST['num2'];

  // proses operasi aritmatika
  switch ($dropdown) {
    case '+':
      $hasil = $num1 + $num2;
      break;
    case '-':
      $hasil = $num1 - $num2;
      break;
    case '*':
      $hasil = $num1 * $num2;
      break;
    case '/':
      $hasil = $num1 / $num2;
      break;
    default:
      echo "dropdown tidak valid";
      exit;
  }

  // tampilkan hasil
  echo "hasil: " . $hasil;
}
?>