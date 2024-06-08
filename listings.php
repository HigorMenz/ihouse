<?php
require 'includes/functions.php';
templateInclude('header');
?>
</header>

<main class="container section">
  <h2>Last Properties</h2>

  <?php
  $limit = 9;
  include './includes/templates/ads.php'
  ?>
</main>

<?php
templateInclude('footer');
?>