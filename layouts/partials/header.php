</html>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SISTEM INFORMASI 2 | <?= $data['nav_aktif'] ?></title>

      <link rel="shortcut icon" href="layouts/assets/img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="<?php echo AST . "/css/style.css"; ?>">
</head>

<body>

    <aside>
        <header>
            <img src="<?= AST; ?>/img/DSC.JPG" class="brand">
            <div class="user"><?= AUTHOR; ?></div>
        </header>
	  	<?php
			require "navbar.php";
		?>

    </aside>

    <main>
        <article>