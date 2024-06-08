<?php
//bd
require '../../includes/config/db.php';


$db = connectDB();
$id = $_GET['id'];
$id = filter_Var($id, FILTER_VALIDATE_INT);

if (!$id) {
  header('Location: /ihouse/admin/index.php');
}


//get properties info
$queryR = "SELECT * FROM realestates WHERE id = {$id} ";
$resultQuery = mysqli_query($db, $queryR);
$prop = mysqli_fetch_assoc($resultQuery);




//form validation
$err = [];

//get brokers
$brokers = "SELECT * FROM brokers";
$res = mysqli_query($db, $brokers);
//
$title  = $prop['title'];
$price = $prop['price'];
$description = $prop['description'];
$bedroom = $prop['bedrooms'];
$bathroom = $prop['bathrooms'];
$parking = $prop['parkingslots'];
$brokerId = $prop['brokers_id'];
$imgProps = $prop['image'];


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

  $image = $_FILES['images'];


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


  //image size only 100kb
  $size = 1000 * 1000;
  if ($image['size'] > $size) {
    $err[] = "The image is very large.
    ";
  }
  //Review if the array of errors is empty.

  if (empty($err)) {

    $imageFolder = './../../images/';

    if (!is_dir($imageFolder)) {
      mkdir($imageFolder);
    }

    $imageName = '';

    if ($image['name']) {
      //delete current image
      unlink($imageFolder . $prop['image']);
      //generate image name

      $imageName = md5(uniqid(rand(), true)) . ".jpg";
      //upload files 
      move_uploaded_file($image['tmp_name'], $imageFolder . $imageName);
    } else{
      $imageName = $prop['image'];
    }






    //insert on bd
    $query = " UPDATE realestates SET title = '{$title}', price = '{$price}', image = '{$imageName}', description = '{$description}', bedrooms = {$bedroom},bathrooms = {$bathroom},parkingslots = {$parking},brokers_id = {$brokerId} WHERE id = {$id}";

    $result = mysqli_query($db, $query);

    if ($result) {
      //Redirect

      header('Location: /ihouse/admin/index.php?result=2');
    }
  }
}






require '../../includes/functions.php';
templateInclude('header');
?>
<main class="container section">
  <h1>Update Propertie</h1>
  <a href="/ihouse/admin/index.php" class="button green-button"> Return </a>

  <?php foreach ($err as $error) : ?>
    <div class="alert error">

      <?php echo $error; ?>
    </div>

  <?php endforeach; ?>

  <form class="form" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>General info</legend>
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" placeholder="Title" value="<?php echo $title; ?>">

      <label for="price">Price:</label>
      <input type="number" id="price" name="price" placeholder="Price" value="<?php echo $price; ?>">

      <label for="image">Image:</label>
      <input type="file" id="image" name="images" accept="image/jpeg, image/png">

      <img class="img-small" src="../../images/<?php echo $imgProps; ?>">

      <label for="description">Description:</label>
      <textarea name="description" name="description" id="description"><?php echo $description; ?></textarea>

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
        <?php while ($row = mysqli_fetch_assoc($res)) : ?>
          <option <?php echo $brokerId === $row['id'] ? 'selected' : ""; ?> value="<?php echo $row['id']; ?>"> <?php echo $row['name'] . " " . $row['surname']; ?></option>
        <?php endwhile; ?>
      </select>
    </fieldset>

    <input type="submit" value="Submit Listing" class="button green-button">
  </form>
</main>

<?php
templateInclude('footer');
?>