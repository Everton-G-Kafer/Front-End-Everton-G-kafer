<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raiz quadrada</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    


  <div class="quadro">

    <form method="get">
      <h1 class="h1php">Raiz Quadrada</h1>
      <p class="pphp">A raiz quadrada de um número é um número que, multiplicado por si mesmo, resulta no número original.</p>
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
          $resultado = sqrt($numero);

          echo "<p>A raiz é $resultado.</p>";
        } else {
          echo "<p>Por favor, declare um número para calcular o valor absoluto.</p>";
        }
      ?>
      <a class="aa" href="../index.html"><<</a>
    </div>
  </div>
</body>
</html>