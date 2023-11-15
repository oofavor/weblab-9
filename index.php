<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Глушков - Lab 9 (Variant 4)</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header class="header">
    <div>
      <h1>Глушков Андрей</h1>
      <p>Group: 221-362</p>
      <p>Lab: 9 (Variant 4)</p>
    </div>
    <img class="header-logo" src="static/img/logo.png" alt="University Logo">
  </header>

  <main>
    <?php
    include("util.php");
    $start_value = -10;	// начальное значение аргумента
    $encounting = 10000;	// количество вычисляемых значений
    $step = 2;	// шаг изменения аргумента
    $max_val = -INF;
    $min_val = INF;
    $type = 'D';	// тип верстки
    
    $x = $start_value;	// текущее значение аргумента. равно начальному
    
    switch ($type) {
      case 'B':
        echo '<ul>';
        break;
      case 'C':
        echo '<ol>';
        break;
      case 'D':
        echo "<table border='1' cellpadding='1' cellspacing='0'>";
        echo "<tr><th>#</th><th>x</th><th>f</th></tr>";
        break;
    }

    for ($i = 0; $i < $encounting; $i++) // цикл с заданным количеством итераций
    {
      $f = math($x);

      if ($f < $min_val) {
        $min_val = $f;
      }
      if ($f > $max_val) {
        $max_val = $f;
      }

      switch ($type) {
        case 'A':
          echo 'f(' . $x . ')=' . $f . '<br>';
          break;
        case 'B':
        case 'C':
          echo "<li>f(" . $x . ")=" . $f . "</li>";
          break;
        case 'D':
          echo "<tr><td>{$i}</td><td>{$x}</td><td>{$f}</td></tr>";
          break;
        case 'E':
          echo "<div class='function-block'>f({$x})={$f}</div>";
          break;
      }
      $x += $step;
    }

    switch ($type) {
      case 'B':
        echo '</ul>';
        break;
      case 'C':
        echo '</ol>';
        break;
      case 'D':
        echo "</table>";
        break;
    }
    ?>
  </main>

  <footer class="footer-container">
    <div class="footer-icon-container">
      <a class="footer-social-icon" href="https://github.com/oofavor">
        <img src="static/icon/social-github.svg" alt="github">
      </a>
      <a class="footer-social-icon" href="#">
        <img src="static/icon/social-reddit.svg" alt="reddit">
      </a>
      <a class="footer-social-icon" href="#">
        <img src="static/icon/social-twitter.svg" alt="twitter">
      </a>
      <a class="footer-social-icon" href="#">
        <img src="static/icon/social-facebook.svg" alt="facebook">
      </a>
    </div>
    <div>
      Phone:
      <a href="tel:+79999999999" class="footer-link">+79999999999</a>
      | Email:
      <a href="mailto:favorxog@gmail.com" class="footer-link">favorxog@gmail.com</a>
      | Type:
      <?php echo $type ?>
    </div>
    <div>© 2023 Andrey Glushkov | All Rights Reserved</div>
  </footer>
</body>

</html>