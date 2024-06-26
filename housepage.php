<?php

//get id info
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);


//redirect
if(!$id){
  header("LOCATION: ./index.php");

}

require './includes/config/db.php';
$db = connectDB();

$query = "SELECT * FROM realestates WHERE id = {$id}";

$result = mysqli_query($db, $query);

if($result -> num_rows === 0){
  header("LOCATION: ./index.php");
}

$props = mysqli_fetch_assoc($result);



require 'includes/functions.php';
templateInclude('header');
?>

    <main class="container section center-content">
      <h1><?php echo $props['title'];?></h1>
      <picture class="">
        
        <img loading="lazy" src="./images/<?php echo $props['image'];?>" alt="house picture" />
      </picture>
      <div class="prop-summary">
        <p class="price"><?php echo $props['price'];?></p>
        <ul class="house-icons">
          <li>
            <img loading="lazy" src="build/img/icono_wc.svg" alt="wc" />
            <p><?php echo $props['bathrooms'];?></p>
          </li>
          <li>
            <img
              loading="lazy"
              src="build/img/icono_estacionamiento.svg"
              alt="parking spots"
            />
            <p><?php echo $props['parkingslots'];?></p>
          </li>
          <li>
            <img
              loading="lazy"
              src="build/img/icono_dormitorio.svg"
              alt="bedrooms"
            />
            <p><?php echo $props['bedrooms'];?></p>
          </li>
        </ul>
        <p>
          Contrary to popular belief, Lorem Ipsum is not simply random text. It
          has roots in a piece of classical Latin literature from 45 BC, making
          it over 2000 years old. Richard McClintock, a Latin professor at
          Hampden-Sydney College in Virginia, looked up one of the more obscure
          Latin words, consectetur, from a Lorem Ipsum passage, and going
          through the cites of the word in classical literature, discovered the
          undoubtable source. Lorem Ipsum comes from sections 1.10.32 and
          1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
          Evil) by Cicero, written in 45 BC. This book is a treatise on the
          theory of ethics, very popular during the Renaissance. The first line
          of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
          section 1.10.32. The standard chunk of Lorem Ipsum used since the
          1500s is reproduced below for those interested. Sections 1.10.32 and
          1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also
          reproduced in their exact original form, accompanied by English
          versions from the 1914 translation by H. Rackham.
        </p>
      </div>
    </main>

    <?php
templateInclude('footer');
?>