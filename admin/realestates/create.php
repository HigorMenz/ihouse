<?php
//bd
require '../../includes/config/db.php';
$db = connectDB();


//form validation
$err = [];


//insert info in bd
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";

  $title  = $_POST['title'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $bedroom = $_POST['bedroom'];
  $bathroom = $_POST['bathroom'];
  $parking = $_POST['parking'];
  $brokerId = $_POST['brokers'];


  if(!$title){
    $err[] = "You need to insert a title.";
  }
  if(!$price){
    $err[] = "You need to insert a price.";
  }
  if(strlen($description) < 50){
    $err[] = "You need to insert a description of at least 50 characters.";
  }
  if(!$bedroom){
    $err[] = "The number of bedrooms is required.";
  }
  if(!$bathroom){
    $err[] = "The number of bathrooms is required.";
  }
  if(!$parking){
    $err[] = "The number of parking slots is required.";
  }
  if(!$brokerId){
    $err[] = "You need to select a broker.";
  }


  //insert in to bd
  $query = " INSERT INTO realestates (title, price, description, bedrooms, bathrooms, parkingslots, brokers_id ) VALUES ('$title','$price','$description','$bedroom','$bathroom','$parking','$brokerId')";

  echo $query;

  $result = mysqli_query($db, $query);
  if ($result) {
    echo "inserted successfully";
  }
}






require '../../includes/functions.php';
templateInclude('header');
?>
<main class="container section">
  <h1>create</h1>
  <a href="/ihouse/admin/index.php" class="button green-button"> Return </a>

  <form class="form" method="POST" action="../../admin/realestates/create.php">
    <fieldset>
      <legend>General info</legend>
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" placeholder="Title">

      <label for="price">Price:</label>
      <input type="number" id="price" name="price" placeholder="Price">

      <label for="image">Image:</label>
      <input type="file" id="image" name="image" accept="image/jpeg, image/png">

      <label for="description">Description:</label>
      <textarea name="description" name="description" id="description"></textarea>

    </fieldset>

    <fieldset>
      <legend>Property Information</legend>

      <label for="bedroom">Bedrooms:</label>
      <input type="number" id="bedroom" name="bedroom" placeholder="E.g: 5" min="1" max="9">

      <label for="bathroom">Bathrooms:</label>
      <input type="number" id="bathroom" name="bathroom" placeholder="E.g: 2" min="1" max="9">

      <label for="parking">Parking Slots:</label>
      <input type="number" id="parking" name="parking" placeholder="E.g: 4" min="1" max="9">


    </fieldset>

    <fieldset>
      <legend>Broker</legend>

      <select name="brokers">
        <option value="" disabled selected>--- Select --- </option>
        <option value="1">Higor</option>
        <option value="2">Jhon</option>
      </select>
    </fieldset>

    <input type="submit" value="Submit Listing" class="button green-button">
  </form>
</main>

<?php
templateInclude('footer');
?>