<?php
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Swooosh Website</title>

  <?php
    include 'layout/head.php';
  ?>
</head>

<body>

  <?php
    include 'layout/header.php';
  ?>
  
  <main id="main">

    <?php
      include 'pages/about.php';
    ?>

  </main><!-- End #main -->

  <?php
      include 'layout/footer.php';
      include 'layout/script.php';
  ?>

</body>

</html>