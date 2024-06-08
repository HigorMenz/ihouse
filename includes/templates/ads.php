<?php 
//bd connection
require './includes/config/db.php';
$db = connectDB();

//query
$query = "SELECT * FROM realestates LIMIT {$limit}";

//request bd info
$resultQuery = mysqli_query($db, $query);


?>


<div class="listings-container">
    <?php while($props = mysqli_fetch_assoc($resultQuery)): ?>
    <div class="ads">
      <picture class="bord">
        <img loading="lazy" src="./images/<?php echo $props['image'];?>" alt="house picture" />
      </picture>

      <div class="listings-content">
        <h3><?php echo $props['title'];?></h3>
        <p><?php echo $props['description'];?></p>
        <p class="price"><?php echo $props['price'];?></p>
        <ul class="house-icons">
          <li>
            <img loading="lazy" src="/ihouse/build/img/icono_wc.svg" alt="wc" />
            <p><?php echo $props['bathrooms'];?></p>
          </li>
          <li>
            <img loading="lazy" src="/ihouse/build/img/icono_estacionamiento.svg" alt="parking slots" />
            <p><?php echo $props['parkingslots'];?></p>
          </li>
          <li>
            <img loading="lazy" src="/ihouse/build/img/icono_dormitorio.svg" alt="bedrooms" />
            <p><?php echo $props['bedrooms'];?></p>
          </li>
        </ul>
        <a href="housepage.php?id=<?php echo $props['id'];?>" class="yellow-button-block"> View More </a>
      </div>
    </div>
    <?php endwhile; ?>
  </div>

  <?php 

?>