<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maior Valor</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    


  <div class="quadro">

    <form method="get">
      <h1 class="h1php">Maior valor</h1>
      <p class="pphp">Exibe o maior valor dentre os apresentados.</p>
      <br>
      <label class="nacphp" for="valor1">Valor 1:</label>
      <br>
      <input class="inputnumero" type="mixed" name="valor1" id="valor1">
      <br>
      <label class="nacphp" for="valor2">Valor 2:</label>
      <br>
      <input class="inputnumero" type="mixed" name="valor2" id="valor2">
      <br>
      <label class="nacphp" for="valor3">Valor 3:</label>
      <br>
      <input class="inputnumero" type="mixed" name="valor3" id="valor3js">
      <br>
      <label class="nacphp" for="valor4">Valor 4:</label>
      <br>
      <input class="inputnumero" type="mixed" name="valor4" id="valor4js">
      <br><br>
      <input class="btncalc" type="submit" value="Calcular">
    </form>

    <div class="divphp">
      <?php
        if (isset($_GET["valor1"]) && isset($_GET["valor2"]) && isset($_GET["valor3"]) && isset($_GET["valor4"])) {
          $valor1 = $_GET["valor1"];
          $valor2 = $_GET["valor2"];
          $valor3 = $_GET["valor3"];
          $valor4 = $_GET["valor4"];
          $resultado = max($valor1, $valor2, $valor3, $valor4);

          echo "<p>O maior valor é $resultado.</p>";
        } else {
          echo "<p>Por favor, declare um número para calcular o valor absoluto.</p>";
        }
      ?>
      <a class="aa" href="../index.html"><<</a>
    </div>
  </div>
</body>
</html>