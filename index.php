<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <div id="first_table" class="container">

    <?php

    //1 task
    $a_1 = false;
    $a_2 = false;
    $a_3 = true;
    $a_4 = true;

    $b_1 = false;
    $b_2 = true;
    $b_3 = false;
    $b_4 = true;

    ?>

    <h3>Задание 1. Таблица истинности PHP</h3>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">A</th>
          <th scope="col">B</th>
          <th scope="col">!A</th>
          <th scope="col">A || B</th>
          <th scope="col">A && B</th>
          <th scope="col">A XOR B</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php print_r((int)$a_1) ?></td>
          <td><?php print_r((int)$b_1) ?></td>
          <td><?php !$a_1 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_1 || $b_1 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_1 && $b_1 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_1 xor $b_1 ? print_r(1) : print_r(0) ?></td>
        </tr>
        <tr>
          <td><?php print_r((int)$a_2) ?></td>
          <td><?php print_r((int)$b_2) ?></td>
          <td><?php !$a_2 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_2 || $b_2 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_2 && $b_2 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_2 xor $b_2 ? print_r(1) : print_r(0) ?></td>
        </tr>
        <tr>
          <td><?php print_r((int)$a_3) ?></td>
          <td><?php print_r((int)$b_3) ?></td>
          <td><?php !$a_3 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_3 || $b_3 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_3 && $b_3 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_3 xor $b_3 ? print_r(0) : print_r(1) ?></td>
        </tr>
        <tr>
          <td><?php print_r((int)$a_4) ?></td>
          <td><?php print_r((int)$b_4) ?></td>
          <td><?php !$a_4 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_4 || $b_4 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_4 && $b_4 ? print_r(1) : print_r(0) ?></td>
          <td><?php $a_4 xor $b_4 ? print_r(0) : print_r(1) ?></td>
        </tr>
      </tbody>
    </table>

    <br>

    <?php

    //2 and 3 tasks
    $true = true;
    $false = false;
    $number_1 = 1;
    $number_0 = 0;
    $number_minus_1 = -1;
    $string_number_1 = "1";
    $null_var = null;
    $string_php = "php";

    ?>

    <h3>Задание 2. Таблица сравнения</h3>
    <h4>Гибкое сравнение в PHP (==)</h4>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">true</th>
          <th scope="col">false</th>
          <th scope="col">1</th>
          <th scope="col">0</th>
          <th scope="col">-1</th>
          <th scope="col">"1"</th>
          <th scope="col">null</th>
          <th scope="col">"php"</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">true</th>
          <td><?php $true == $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $true == $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $true == $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $true == $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $true == $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $true == $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $true == $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $true == $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">false</th>
          <td><?php $false == $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $false == $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $false == $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $false == $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $false == $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $false == $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $false == $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $false == $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td><?php $number_1 == $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 == $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 == $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 == $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 == $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 == $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 == $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 == $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">0</th>
          <td><?php $number_0 == $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 == $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 == $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 == $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 == $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 == $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 == $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 == $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">-1</th>
          <td><?php $number_minus_1 == $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 == $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 == $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 == $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 == $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 == $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 == $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 == $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">"1"</th>
          <td><?php $string_number_1 == $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 == $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 == $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 == $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 == $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 == $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 == $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 == $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">null</th>
          <td><?php $null_var == $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var == $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var == $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var == $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var == $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var == $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var == $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var == $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">"php"</th>
          <td><?php $string_php == $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php == $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php == $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php == $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php == $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php == $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php == $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php == $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
      </tbody>
    </table>

    <br>

    <h4>Жёсткое сравнение в PHP (===)</h4>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">true</th>
          <th scope="col">false</th>
          <th scope="col">1</th>
          <th scope="col">0</th>
          <th scope="col">-1</th>
          <th scope="col">"1"</th>
          <th scope="col">null</th>
          <th scope="col">"php"</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">true</th>
          <td><?php $true === $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $true === $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $true === $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $true === $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $true === $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $true === $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $true === $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $true === $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">false</th>
          <td><?php $false === $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $false === $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $false === $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $false === $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $false === $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $false === $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $false === $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $false === $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td><?php $number_1 === $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 === $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 === $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 === $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 === $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 === $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 === $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_1 === $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">0</th>
          <td><?php $number_0 === $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 === $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 === $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 === $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 === $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 === $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 === $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_0 === $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">-1</th>
          <td><?php $number_minus_1 === $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 === $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 === $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 === $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 === $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 === $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 === $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $number_minus_1 === $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">"1"</th>
          <td><?php $string_number_1 === $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 === $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 === $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 === $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 === $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 === $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 === $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_number_1 === $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">null</th>
          <td><?php $null_var === $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var === $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var === $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var === $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var === $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var === $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var === $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $null_var === $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
        <tr>
          <th scope="row">"php"</th>
          <td><?php $string_php === $true ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php === $false ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php === $number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php === $number_0 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php === $number_minus_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php === $string_number_1 ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php === $null_var ? print_r("true") : print_r("false") ?></td>
          <td><?php $string_php === $string_php ? print_r("true") : print_r("false") ?></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>

</html>