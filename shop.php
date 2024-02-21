<?php
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shop</title>

  <?php
    include 'layout/head.php';
  ?>
</head>

<body>

  <?php
    include 'layout/header.php';
    // include 'layout/hero.php';
  ?>
  
  <main id="main">

    <?php
      // include 'pages/cleaning-product.php';
      include 'pages/shop_product.php';
    ?>

  </main><!-- End #main -->

  <?php
      include 'layout/footer.php';
      include 'layout/script.php';
  ?>

</body>

</html>