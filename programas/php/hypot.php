<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hipotenusa</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    


  <div class="quadro">

    <form method="get">
      <h1 class="h1php">Hipotenusa</h1>
      <p class="pphp">O método mais conhecido para calcular a hipotenusa é o Teorema de Pitágoras, que afirma que o quadrado da hipotenusa é igual à soma dos quadrados dos outros dois lados (catetos). </p>
      <br>
      <label class="nacphp" for="cateto1">Cateto 1:</label>
      <br>
      <input class="inputnumero" type="float" name="cateto1" id="cateto1js">
      <br>
      <label class="nacphp" for="cateto2">Cateto 2:</label>
      <br>
      <input class="inputnumero" type="float" name="cateto2" id="cateto2js">
      <br><br>
      <input class="btncalc" type="submit" value="Calcular">
      
    </form>

    <div class="divphp">
      <?php
        if (isset($_GET["cateto1"]) && isset($_GET["cateto2"])) {
          $numero = $_GET["cateto1"];
          $numero2 = $_GET["cateto2"];
          $resultado = sqrt($numero * $numero + $numero2 * $numero2);

          echo "<p>Sua HIpotenusa é $resultado.</p>";
        } else {
          echo "<p>Por favor, declare um número para calcular o valor absoluto.</p>";
        }
      ?>
      <a class="aa" href="../index.html"><<</a>
    </div>
  </div>
</body>
</html>