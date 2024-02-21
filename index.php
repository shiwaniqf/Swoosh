
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
    include 'layout/hero.php';
  ?>
  
  <main id="main">

    <?php
      include 'pages/cleaning-product.php';
      include 'pages/about_banner.php';
      include 'pages/whyswooosh.php';
    ?>

    <?php
      include 'pages/index_product.php';
    ?>

  </main><!-- End #main -->

  <?php
      include 'layout/footer.php';
      include 'layout/script.php';
  ?>

</body>

</html>