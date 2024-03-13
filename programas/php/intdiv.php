<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Divisão</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    

  <div class="quadro">

    <form method="get">
      <h1 class="h1php">Divisão por Inteiros</h1>
      <p class="pphp">A divisão de inteiros é uma operação matemática que divide um número inteiro (dividendo) por outro número inteiro (divisor) e retorna o resultado como um número inteiro.</p>
      <br>
      <label class="nacphp" for="dividendo">Dividendo:</label>
      <br>
      <input class="inputnumero" type="int" name="dividendo" id="dividendojs">
      <br>
      <label class="nacphp" for="divisor">Divisor:</label>
      <br>
      <input class="inputnumero" type="int" name="divisor" id="divisorjs">
      <br><br>
      <input class="btncalc" type="submit" value="Calcular">
      
    </form>

    <div class="divphp">
      <?php
        if (isset($_GET["dividendo"]) && isset($_GET["divisor"])) {
          $dividendo = $_GET["dividendo"];
          $divisor = $_GET["divisor"];
          $resultado = intdiv($dividendo, $divisor);

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