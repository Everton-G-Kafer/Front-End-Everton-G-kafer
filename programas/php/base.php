<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Base</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    


  <div class="quadro">

    <form method="get">
      <h1 class="h1php">Converter base</h1>
      <p class="pphp">A Conversão de base é usada para converter um número dado em uma base arbitrária para uma base desejada. 
Ambas as bases devem estar entre 2 e 32 e as bases com dígitos maiores que 10 são representadas com letras az, ou seja, 10 é representado como a, 11 é representado como be 35 é representado como z. </p>
      <br>
      <label class="nacphp" for="numero">Número a calcular:</label>
      <br>
      <input class="inputnumero" type="string" name="numero" id="numerojs">
      
      <br>
      <br>
      <label class="nacphp" for="baseme">Da base:</label>
      <br>
      <label class="nacphp" for="2a">02 </label>
      <input class="radio1" type="radio" name="ra1" id="2ajs" value="2">
      <br>
      <label class="nacphp" for="8a">08</label>
      <input class="radio1" type="radio" name="ra1" id="8ajs" value="8">
      <br>
      <label class="nacphp" for="10a">10</label>
      <input class="radio1" type="radio" name="ra1" id="10ajs" value="10">
      <br>
      <label class="nacphp" for="16a">16</label>
      <input class="radio1" type="radio" name="ra1" id="16ajs" value="16">
      <br>
      <label class="nacphp" for="60a">60</label>
      <input class="radio1" type="radio" name="ra1" id="60ajs" value="60">
      
      <br>
      <br>
      <label class="nacphp" for="basema">Para a base:</label>
      <br>
      <label class="nacphp" for="2b">02 </label>
      <input class="radio1" type="radio" name="ra2" id="2bjs" value="2">
      <br>
      <label class="nacphp" for="8b">08</label>
      <input class="radio1" type="radio" name="ra2" id="8bjs" value="8">
      <br>
      <label class="nacphp" for="10b">10</label>
      <input class="radio1" type="radio" name="ra2" id="10bjs" value="10">
      <br>
      <label class="nacphp" for="16b">16</label>
      <input class="radio1" type="radio" name="ra2" id="16bjs" value="16">
      <br>
      <label class="nacphp" for="60b">60</label>
      <input class="radio1" type="radio" name="ra2" id="60bjs" value="60">
      
      <br><br>
      <input class="btncalc" type="submit" value="Calcular">
    </form>

    <div class="divphp">
      <?php
        if (isset($_GET["numero"]) && isset($_GET["ra1"]) && isset($_GET["ra2"])) {
          $numero = $_GET["numero"];
          $baseme = $_GET["ra1"];
          $basema = $_GET["ra2"];
          $resultado = base_convert($numero, $baseme, $basema);

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