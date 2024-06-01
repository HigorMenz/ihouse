<?php
//bd
require '../../includes/config/db.php';
$db = connectDB();


//form validation
$err = [];

//get brokers
$brokers= "SELECT * FROM brokers";
$res = mysqli_query($db,$brokers);
//
$title  ="";
$price ="";
$description ="";
$bedroom ="";
$bathroom ="";
$parking ="";
$brokerId ="";


//insert info in bd
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //echo "<pre>";
  //v0ar_dump($_POST);
  //echo "</pre>";

  $title  = mysqli_real_escape_string($db, $_POST['title']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $bedroom = mysqli_real_escape_string($db, $_POST['bedroom']);
  $bathroom = mysqli_real_escape_string($db, $_POST['bathroom']);
  $parking = mysqli_real_escape_string($db, $_POST['parking']);
  $brokerId = mysqli_real_escape_string($db, $_POST['brokers']);
  $created = date('Y/m/d');


  if (!$title) {
    $err[] = "You need to insert a title.";
  }
  if (!$price) {
    $err[] = "You need to insert a price.";
  }
  if (strlen($description) < 50) {
    $err[] = "You need to insert a description of at least 50 characters.";
  }
  if (!$bedroom) {
    $err[] = "The number of bedrooms is required.";
  }
  if (!$bathroom) {
    $err[] = "The number of bathrooms is required.";
  }
  if (!$parking) {
    $err[] = "The number of parking slots is required.";
  }
  if (!$brokerId) {
    $err[] = "You need to select a broker.";
  }


  //Review if the array of errors is empty.

  if (empty($err)) {
    //insert on bd
    $query = " INSERT INTO realestates (title, price, description, bedrooms, bathrooms, parkingslots,created, brokers_id ) VALUES ('$title','$price','$description','$bedroom','$bathroom','$parking', ' $created', '$brokerId')";

    $result = mysqli_query($db, $query);

    if ($result) {
      //Redirect
     
      header('Location: /ihouse/admin/index.php');
    }
  }
}






require '../../includes/functions.php';
templateInclude('header');
?>
<main class="container section">
  <h1>create</h1>
  <a href="/ihouse/admin/index.php" class="button green-button"> Return </a>

  <?php foreach ($err as $error) : ?>
    <div class="alert error">

      <?php echo $error; ?>
    </div>

  <?php endforeach; ?>

  <form class="form" method="POST" action="../../admin/realestates/create.php">
    <fieldset>
      <legend>General info</legend>
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" placeholder="Title" value="<?php echo $title; ?>">

      <label for="price">Price:</label>
      <input type="number" id="price" name="price" placeholder="Price" value="<?php echo $price; ?>">

      <label for="image">Image:</label>
      <input type="file" id="image" name="image" accept="image/jpeg, image/png">

      <label for="description">Description:</label>
      <textarea name="description" name="description" id="description" value="<?php echo $description; ?>"></textarea>

    </fieldset>

    <fieldset>
      <legend>Property Information</legend>

      <label for="bedroom">Bedrooms:</label>
      <input type="number" id="bedroom" name="bedroom" placeholder="E.g: 5" min="1" max="9" value="<?php echo $bedroom; ?>">

      <label for="bathroom">Bathrooms:</label>
      <input type="number" id="bathroom" name="bathroom" placeholder="E.g: 2" min="1" max="9" value="<?php echo $bathroom; ?>">

      <label for="parking">Parking Slots:</label>
      <input type="number" id="parking" name="parking" placeholder="E.g: 4" min="1" max="9" value="<?php echo $parking; ?>">


    </fieldset>

    <fieldset>
      <legend>Broker</legend>

      <select name="brokers" value="">
        <option value="" disabled selected>--- Select --- </option>
        <?php while($row = mysqli_fetch_assoc($res)) : ?>
          <option <?php echo $brokerId === $row['id'] ? 'selected' : ""; ?> value="<?php echo $row['id']; ?>"> <?php echo $row['name'] ." ". $row['surname']; ?></option>
          <?php endwhile; ?>
      </select>
    </fieldset>

    <input type="submit" value="Submit Listing" class="button green-button">
  </form>
</main>

<?php
templateInclude('footer');
?>