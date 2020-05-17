<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="../js/jQuery.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
  <title>Genre | Search Results</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">

</head>
<body>

<div class="loader" id="loader">
  <div id="largeBox"></div>
  <div id="smallBox"></div>
</div>

<div id="outer">
<nav id="nav2" style="height:60px;">
    <a href="../index.php"><img src="../Booking/images/logo.png" height="50px" width="100px"></a>
  <form class="formwrap fw" id="main" action=./result.php method=POST>
        <input id="input" type="text" name='input' placeholder="Search here..." required>
          <button id="button" type="submit">Search</button>
    </form>
</nav>


<?php


$curl = curl_init();

 $w = $_GET['ide'];
 $name = $_GET['name'];

 ?> <div class="titl res"> <?php
      echo "Genre: ".$name;
      ?></div><?php


curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.themoviedb.org/3/discover/movie?with_genres=$w&page=1&include_video=false&include_adult=false&sort_by=popularity.desc&language=en-US&api_key=8448903d151180f7e5b479d58032281a",
  CURLOPT_RETURNTRANSFER => true,

));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$dat = json_decode($response);
if ($err) {
      header("Location: ./error.php");

}
else if($dat->results == NULL){
  echo("Nothimg found :( ");
}
else {


  foreach ($dat -> results as $i) {

    $y=$i->poster_path;
    $r=$i->id;
    $t=$i->title;
    if($y!=NULL){


    ?><div class="poster1 spa1" id= <?php echo($r) ?>><?php

    echo("<img class = 'image'  height='300px' width='200px' src= 'http://image.tmdb.org/t/p/w185/$y'>");
    echo("\t"."\t"."<br>"."<center><p  class='image ima' > <br>$t </p></center>");
    ?></div><?php
  }
  }

}
?>
  </div><div id="bottom"></div><?php
?>

<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
