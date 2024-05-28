<?php
require 'includes/functions.php';
templateInclude('header');
?>

    <main class="container section">
      <h1><strong>Learn more about us</strong></h1>

      <div class="about-container">
        <div class="blog-img">
          <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp" />
            <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/nosotros.jpg" alt="post image" />
          </picture>
        </div>
        <div class="about-text">
          <blockquote>25 years of experience</blockquote>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam
            adipisci a quam iusto pariatur sint veritatis provident quod dolore,
            perferendis itaque deleniti hic neque? Rerum exercitationem possimus
            libero ratione molestiae. Doloribus assumenda, modi, illum commodi
            cumque molestiae alias illo voluptatum a nemo rem facilis quisquam
            quod dolorem laudantium, eos rerum quos adipisci veritatis mollitia
            corrupti nihil consectetur totam. Magnam, nihil.
          </p>
          <p>
            Quas vel assumenda ab sit sunt eaque neque et repellendus maxime?
            Tenetur vitae quas voluptatibus laborum? Ipsa similique impedit,
            incidunt doloribus facilis, sapiente modi quas non odit, aperiam
            natus ea. Culpa cumque ab ullam voluptas voluptatum sapiente dolore
            adipisci repudiandae cupiditate fugit harum, et molestiae a sint
            iure deserunt magni neque dolor! Quisquam consequuntur, quaerat
            adipisci dolor corrupti cumque impedit?
          </p>
        </div>
      </div>
    </main>
    
    <section class="container section">
      <h1>More about us</h1>

      <div class="our-icons">
        <div class="icon">
          <img src="build/img/icono1.svg" alt="security logo" loading="lazy" />
          <h3>Security</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est beatae
            enim ullam inventore incidunt aspernatur rem sequi eius voluptatem
            reiciendis nobis suscipit, aperiam harum unde minima, perspiciatis
            iste quo. Corporis.
          </p>
        </div>
        <div class="icon">
          <img src="build/img/icono2.svg" alt="security price" loading="lazy" />
          <h3>Price</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est beatae
            enim ullam inventore incidunt aspernatur rem sequi eius voluptatem
            reiciendis nobis suscipit, aperiam harum unde minima, perspiciatis
            iste quo. Corporis.
          </p>
        </div>
        <div class="icon">
          <img src="build/img/icono3.svg" alt="security time" loading="lazy" />
          <h3>Time</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est beatae
            enim ullam inventore incidunt aspernatur rem sequi eius voluptatem
            reiciendis nobis suscipit, aperiam harum unde minima, perspiciatis
            iste quo. Corporis.
          </p>
        </div>
      </div>
    </section>

    <?php
templateInclude('footer');
?>