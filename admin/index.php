<?php

//bd connection
require '../includes/config/db.php';
$db = connectDB();

//query
$query = "SELECT * FROM realestates";

//request bd info
$resultQuery = mysqli_query($db, $query);




$result = $_GET['result'] ?? null;

require '../includes/functions.php';
templateInclude('header');
?>
<main class="container section">
  <h1>Admin</h1>

  <?php if (intval($result) === 1) : ?>
    <p class="alert success"> Property successfully registered </p>

  <?php endif; ?>


  <a href="/ihouse/admin/realestates/create.php" class="button green-button"> Create </a>

  <table class="props">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Price</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody> <!-- Show results -->
      <?php while ($properties = mysqli_fetch_assoc($resultQuery)) : ?>


        <tr>
          <td><?php echo $properties['id']; ?></td>
          <td><?php echo $properties['title']; ?></td>
          <td> <img src="../images/<?php echo $properties['image']; ?>" class="td-image" alt=""></td>
          <td><?php echo $properties['price'] ?></td>
          <td>
            <a class="green-button-block" href="">Update</a>
            <a class="red-button-block" href="">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>



</main>

<?php

msqli_close($db);

templateInclude('footer');
?>