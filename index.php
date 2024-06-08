

<?php
require 'includes/functions.php';
templateInclude('header', $home = true);
?>

<main class="container section">
  <h1>More about us</h1>

  <div class="our-icons">
    <div class="icon">
      <img src="/ihouse/build/img/icono1.svg" alt="security logo" loading="lazy" />
      <h3>Security</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est beatae
        enim ullam inventore incidunt aspernatur rem sequi eius voluptatem
        reiciendis nobis suscipit, aperiam harum unde minima, perspiciatis
        iste quo. Corporis.
      </p>
    </div>
    <div class="icon">
      <img src="/ihouse/build/img/icono2.svg" alt="security price" loading="lazy" />
      <h3>Price</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est beatae
        enim ullam inventore incidunt aspernatur rem sequi eius voluptatem
        reiciendis nobis suscipit, aperiam harum unde minima, perspiciatis
        iste quo. Corporis.
      </p>
    </div>
    <div class="icon">
      <img src="/ihouse/build/img/icono3.svg" alt="security time" loading="lazy" />
      <h3>Time</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est beatae
        enim ullam inventore incidunt aspernatur rem sequi eius voluptatem
        reiciendis nobis suscipit, aperiam harum unde minima, perspiciatis
        iste quo. Corporis.
      </p>
    </div>
  </div>
</main>

<section class="section container">
  <h2>Last Properties</h2>

  <?php
    $limit = 6;
    include './includes/templates/ads.php'
  ?>

  <div class="align-right">
    <a href="listings.php" class="green-button">More</a>
  </div>
</section>

<section class="contact-img">
  <h2>Discover your dream home</h2>
  <p>
    Please fill out the form and we will get in touch with you as soon as
    possible.
  </p>
  <a href="contact.php" class="yellow-button">Contact Us</a>
</section>

<div class="container section lower-section">
  <section class="blog">
    <h3>Our blog</h3>
    <article class="blog-entry">
      <div class="blog-img">
        <picture>
          <source srcset="/ihouse/build/img/blog1.webp" type="image/webp" />
          <source srcset="/ihouse/build/img/blog1.jpg" type="image/jpeg" />
          <img loading="lazy" src="/ihouse/build/img/blog1.jpg" alt="post image" />
        </picture>
      </div>
      <div class="blog-description">
        <a href="blog.php">
          <h4>Lorem ipsum dolor sit.</h4>
          <p class="mta-info"><span>08/24/2024</span> by: <span>Admin</span></p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            pariatur enim sapiente dolorem fugiat mollitia fuga
          </p>
        </a>
      </div>
    </article>

    <article class="blog-entry">
      <div class="blog-img">
        <picture>
          <source srcset="/ihouse/build/img/blog2.webp" type="image/webp" />
          <source srcset="/ihouse/build/img/blog2.jpg" type="image/jpeg" />
          <img loading="lazy" src="/ihouse/build/img/blog2.jpg" alt="post image" />
        </picture>
      </div>
      <div class="blog-description">
        <a href="blog.php">
          <h4>Lobis laboriosam .</h4>
          <p class="mta-info"><span>08/24/2024</span> by: <span>Admin</span></p>
          <p>
            dolores excepturi nobis laboriosam quisquam quis vitae delectus,
            laudantium optio. Nostrum, consequuntur.
          </p>
        </a>
      </div>
    </article>
  </section>

  <section class="testimonials">
    <h3>testimonial</h3>
    <div class="testimonial">
      <blockquote>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere ex
        saepe, quis eius incidunt ratione numquam quas voluptatum nisi error
      </blockquote>
      <p>-admim</p>
    </div>
  </section>
</div>

<?php
templateInclude('footer');
?>