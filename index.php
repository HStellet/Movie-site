<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./css/bootstrap.css">
  <script src="./js/jQuery.js"></script>
  <script src="./js/bootstrap.js"></script>
    <title>Movie Trailers | Home</title>
    <title></title>
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
  <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
    <div class="loader">
    <div id="largeBox"></div>
    <div id="smallBox"></div>
    </div>
<div id="outer">
    <nav id="nav" style="height:60px;">
       <center><a href="./index.php"><img src="./Booking/images/logo.png" height="50px" width="100px"></a></center>
    </nav>

    <div id="form">
    <form class="formwrap fw" id="main" action=./php/result.php method=POST>
        <input id="input" type="text" name='input' placeholder="Search here..." required>
          <button id="button" type="submit">Search</button>
    </form>
    </div>
    <div class="heading">Choose By Genres</div>
    <div>
    	<button class="genre" id="28" name="ACTION">Action</button>
    	<button class="genre" id="12" name="ADVENTURE">Adventure</button>
    	<button class="genre" id="35" name="COMEDY">Comedy</button>
    	<button class="genre" id="27" name="HORROR">Horror</button>
    	<button class="genre" id="80" name="CRIME">Crime</button>
    	<button class="genremore">More>></button>


    </div>

  <?php
 function query($url)
 {
  $curl = curl_init();

  curl_setopt($curl, CURLOPT_URL, $url);

      //return the transfer as a string
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    $dat = json_decode($response);

    // echo ($dat);
    if ($err) {
    	header("Location: ./php/error.php");

    } else {
      ?><div class="scroll">
      <div class="wrap" id="slide">
      <?php

      foreach ($dat -> results as $i) {
        $y=$i->poster_path;
        $r=$i->id;
        $t=$i->title;
        if($y!=NULL){
        ?><div class="poster spa" id= <?php echo($r) ?>><?php
        echo("<img class = 'image'  height='300px' src= 'http://image.tmdb.org/t/p/w185/$y'>");
        echo("\t"."\t"."<br>"."<center><p  class='image ima' > <br>$t </p></center>");
        ?></div><?php
      }
      }
      ?></div></div><?php
    }
 }
    ?>
      <?php
    ?> <div class="heading"> <?php
      echo "LATEST";
      ?></div><?php
      query("https://api.themoviedb.org/3/movie/now_playing?page=1&language=en-US&api_key=8448903d151180f7e5b479d58032281a");
    ?> <div class="heading"> <?php
      echo "TRENDING";
      ?></div><?php
      query("https://api.themoviedb.org/3/movie/popular?api_key=8448903d151180f7e5b479d58032281a&language=en-US&page=1");
    ?>

    </div><div id="bottom"></div>
  <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>
