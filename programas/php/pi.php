<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PI</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    


  <div class="quadro">

    <form method="get">
      <h1 class="h1php">PI</h1>
      <p class="pphp">Exibe o valor de PI que é: </p>
      <br>
      
    </form>

    <div class="divphp">
      <?php

          echo pi();
       
      ?>
      <a class="aa" href="../index.html"><<</a>
    </div>
  </div>
</body>
</html>