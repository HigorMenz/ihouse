<?php

//bd connection
require '../includes/config/db.php';
$db = connectDB();

//query
$query = "SELECT * FROM realestates";

//request bd info
$resultQuery = mysqli_query($db, $query);




$result = $_GET['result'] ?? null;


if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $id = $_POST['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);

  if($id){

    //DELETE REGISTRY
    $query ="SELECT image FROM realestates WHERE id = {$id}";

    $result = mysqli_query($db, $query);
    $properties = mysqli_fetch_assoc($result);
    unlink('../images/' . $properties['image']);
    //DELETE PROPERTIE
     $query = "DELETE FROM realestates WHERE id = {$id}";

     $results = mysqli_query ($db, $query);
     if($results){
      header( 'LOCATION: /ihouse/admin/index.php');
     }
  }
}

require '../includes/functions.php';
templateInclude('header');
?>
<main class="container section">
  <h1>Admin</h1>

  <?php if (intval($result) === 1) : ?>
    <p class="alert success"> Property Successfully Registered </p>
  <?php elseif (intval($result) === 2) : ?>
    <p class="alert success"> Property Successfully Updated </p>

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
            <a class="green-button-block" href="./realestates/update.php?id=<?php echo $properties['id'] ?>">Update</a>
            <form method="POST" class="W-100" >
              <input type="hidden" name="id" value="<?php echo $properties['id'];?>">
              <input type="submit" class="red-button-block" value="Delete">
            </form>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>



</main>

<?php



templateInclude('footer');
msqli_close($db);
?>