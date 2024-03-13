<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valor Absoluto</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
  


  <div class="quadro">
    <form method="get">
      <h1 class="h1php">Valor Absoluto</h1>
      <p class="pphp">O valor absoluto de um número é a sua distância do zero na reta numérica, ou seja, é o seu valor sem considerar se ele é positivo ou negativo.</p>
      <br>
      <label class="nacphp" for="numero">Número a calcular:</label>
      <br>
      <input class="inputnumero" type="number" name="numero" id="numerojs">
      <br><br>
      <input class="btncalc" type="submit" value="Calcular">
    </form>

    <div class="divphp">
      <?php
        if (isset($_GET["numero"])) {
          $numero = $_GET["numero"];
          $resultado = abs($numero);

          echo "<p>O Valor Absoluto é $resultado.</p>";
        } else {
          echo "<p>Por favor, declare um número para calcular o valor absoluto.</p>";
        }
      ?>
      <a class="aa" href="../index.html"><<</a>
    </div>
  </div>
</body>
</html>