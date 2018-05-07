<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- local styles -->
    <link rel="stylesheet" href="app.css">

    <title>Ale & Leo wedding!</title>
  </head>
  <body>
    <div class="container-fluid">

        <!-- header -->
        <div class="row">
        <div class="col-lg-3 col-sm-12">
            <!-- date -->
            <h5>May 10, 2018</h5>
            <!-- /date -->
        </div>
        <div class="col-lg-6 col-sm-12">
            <!-- title -->
            <h1>Ale & Leo wedding</h1>
            <!-- /title -->
        </div>
        <div class="col-lg-3 col-sm-12">
            <!-- logo -->
            <img src="img/logo.png" alt="Logo" height="50" class="pull-right" />
            <!-- /logo -->
        </div>
        </div>
        <!-- /header -->

        <hr/>

<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ceremony.html">Ceremony</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reception.html">Reception</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="photos.html">Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="guests.php">Guests</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="story.html">Story</a>
      </li>
    </ul>
  </div>
</nav>
<!-- /nav -->

        <!-- subtitle -->
        <div class="row page-title">
        <div class="col-lg-12 col-sm-12 centered">
            <h4>Who's attending?</h4>
        </div>
        </div>
        <!-- /subtitle -->

        <!-- grid -->
        <div class="row data-header">
            <div class="col-lg-4 col-sm-6">Name</div>
            <div class="col-lg-4 col-sm-6">From</div>
            <div class="col-lg-4 col-sm-12">Email</div>
        </div>


<?php
include_once("db.php");

$sql = "select firstname, lastname, city, state, email from $dbName.guests limit 20";
$result = mysqli_query($dbConn, $sql);

if (mysqli_num_rows($result) > 0) {
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $i++;
        $style = ($i % 2 == 0) ? 'data-row-dark' : 'data-row-light';
        echo "<div class='row ".$style."'>
            <div class='col-lg-4 col-sm-6'>".$row['firstname'].' '.$row['lastname']."</div>
            <div class='col-lg-4 col-sm-6'>".$row['city'].', '.$row['state']."</div>
            <div class='col-lg-4 col-sm-12'>".$row['email']."</div>
            </div>";
    }
} else {
    echo "<td colspan='3'>No confirmed guests yet!</td>";
}

mysqli_close($dbConn);

?>
        <!-- </tbody>
        </table> -->

      <!-- footer -->
      <div class="app-home-footer">
        <p>Guests</p>
      </div>
      <!-- /footer -->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
