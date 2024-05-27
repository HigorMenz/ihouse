<?php
include './includes/templates/header.php'
?>

    <main class="container section center-content">
      <h3>Our Blog</h3>
      <article class="blog-entry">
        <div class="blog-img">
          <picture>
            <source srcset="build/img/blog1.webp" type="image/webp" />
            <source srcset="build/img/blog1.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/blog1.jpg" alt="post image" />
          </picture>
        </div>
        <div class="blog-description">
          <a href="posts.html">
            <h4>Lorem ipsum dolor sit.</h4>
            <p><span>08/24/2024</span> by: <span>Admin</span></p>
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
            <source srcset="build/img/blog2.webp" type="image/webp" />
            <source srcset="build/img/blog2.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/blog2.jpg" alt="post image" />
          </picture>
        </div>
        <div class="blog-description">
          <a href="posts.html">
            <h4>Lobis laboriosam .</h4>
            <p><span>08/24/2024</span> by: <span>Admin</span></p>
            <p>
              dolores excepturi nobis laboriosam quisquam quis vitae delectus,
              laudantium optio. Nostrum, consequuntur.
            </p>
          </a>
        </div>
      </article>
      <article class="blog-entry">
        <div class="blog-img">
          <picture>
            <source srcset="build/img/blog3.webp" type="image/webp" />
            <source srcset="build/img/blog3.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/blog3.jpg" alt="post image" />
          </picture>
        </div>
        <div class="blog-description">
          <a href="posts.html">
            <h4>Lorem ipsum dolor sit.</h4>
            <p><span>08/24/2024</span> by: <span>Admin</span></p>
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
            <source srcset="build/img/blog4.webp" type="image/webp" />
            <source srcset="build/img/blog4.jpg" type="image/jpeg" />
            <img loading="lazy" src="build/img/blog4.jpg" alt="post image" />
          </picture>
        </div>
        <div class="blog-description">
          <a href="posts.html">
            <h4>Lobis laboriosam .</h4>
            <p><span>08/24/2024</span> by: <span>Admin</span></p>
            <p>
              dolores excepturi nobis laboriosam quisquam quis vitae delectus,
              laudantium optio. Nostrum, consequuntur.
            </p>
          </a>
        </div>
      </article>

    </main>

    <?php
include './includes/templates/footer.php';
?>