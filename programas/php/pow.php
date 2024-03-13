<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expressão exponencial</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    

  <div class="quadro">

    <form method="get">
      <h1 class="h1php">Expressão Exponencial</h1>
      <p class="pphp">Na Expressão exponencial Multiplicamos um número uma quantia de veses de acordo com seu expoente.</p>
      <br>
      <label class="nacphp" for="numero">Número:</label>
      <br>
      <input class="inputnumero" type="mixed" name="numero" id="numerojs">
      <br>
      <label class="nacphp" for="expoente">Expoente:</label>
      <br>
      <input class="inputnumero" type="mixed" name="expoente" id="expoentejs">
      <br><br>
      <input class="btncalc" type="submit" value="Calcular">
      
    </form>

    <div class="divphp">
      <?php
        if (isset($_GET["numero"]) && isset($_GET["expoente"])) {
          $numero = $_GET["numero"];
          $expoente = $_GET["expoente"];
          $resultado = pow($numero, $expoente);

          echo "<p>Seu resultado é $resultado.</p>";
        } else {
          echo "<p>Por favor, declare um número para calcular o valor absoluto.</p>";
        }
      ?>
      <a class="aa" href="../index.html"><<</a>
    </div>
  </div>
</body>
</html>