<html>
<head>
  <title>
    Paris
  </title>
</head>

  <body class="p-5">
    <?php for($i = 0; $i < 5; $i++) { ?>
      <h2><?= $i == 0 ? "Ajd" : "J+".$i ?></h2>
      <img src="https://www.prevision-meteo.ch/uploads/widget/paris_<?= $i ?>.png" />
    <?php } ?>
  </body>
</html>