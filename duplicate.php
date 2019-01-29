 <?php
 session_start();
if(!isset($_SESSION['check'])){
  header('Location:'.'index.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Error</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>


  <div  class="jumbotron jumbotron-fluid" style="background-color:black;">
    <div class="container">

      <h1 class="display-4">Duplicate Data Found</h1>
      <p class="lead" style="color:white;">An entry has been found containing similar details. Please register again by clicking <a href="index.php">here</a> or contact the developer</p>

    </div>
  </div>
</body>

</html>
