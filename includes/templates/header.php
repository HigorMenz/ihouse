<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IHouse</title>
    <link rel="stylesheet" href="/ihouse/build/css/app.css" />
  </head>
  <body>
    <header class="header <?php echo $home ? 'home' : ''; ?>">
      <div class="container header-content">
        <div class="bar">
          <a class="logot" href="/ihouse/index.php">I<strong>House</strong></a>

          <div class="mobile-menu">
            <img src="/ihouse/build/img/barras.svg" alt="mobile menu">

          </div>

          <div class="right">
            <img  class="dark-mode-button" src="/ihouse/build/img/dark-mode.svg" alt="dark-mode">

            <nav class="navbar">
              <a href="about.php">About Us</a>
              <a href="listings.php">Listings</a>
              <a href="blog.php">Blog</a>
              <a href="contact.php">Contact</a>
            </nav>
          </div>

        </div>

        <?php if($home) { ?>

          <h1>Discover extraordinary properties Curated for you.</h1>
          <?php  } ?>
      </div>
    </header>