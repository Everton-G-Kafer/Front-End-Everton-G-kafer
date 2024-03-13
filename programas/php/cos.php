<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cosseno</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    


  <div class="quadro">

    <form method="get">
      <h1 class="h1php">Cosseno</h1>
      <p class="pphp">O cosseno é uma função trigonométrica que relaciona o ângulo de um triângulo retângulo com a razão entre o lado adjacente ao ângulo e a hipotenusa.</p>
      <br>
      <label class="nacphp" for="numero">Número a calcular:</label>
      <br>
      <input class="inputnumero" type="float" name="numero" id="numerojs">
      <br><br>
      <input class="btncalc" type="submit" value="Calcular">
    </form>

    <div class="divphp">
      <?php
        if (isset($_GET["numero"])) {
          $numero = $_GET["numero"];
          $resultado = cos($numero);

          echo "<p>O cosseno é $resultado.</p>";
        } else {
          echo "<p>Por favor, declare um número para calcular o valor absoluto.</p>";
        }
      ?>
      <a class="aa" href="../index.html"><<</a>
    </div>
  </div>
</body>
</html>