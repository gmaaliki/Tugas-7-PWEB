<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK Coding</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <ul>
      <li><a href="index.php"><-</a></li>
    </ul>
</nav>   
<div id="status">
  <?php if (isset($_GET['status'])): ?>
    <p>
      <?php
        if ($_GET['status'] == 'sukses') {
          echo "Pendaftaran siswa baru berhasil!";
        } else {
          echo "Pendaftaran gagal!";
        }
      ?>
    </p>
  <?php endif; ?>
</div>
</body>
</html>