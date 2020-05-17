<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="../js/jQuery.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
  <title>Genres</title>
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

<div class="gen">
      <button class="genre1" id="28" name="ACTION">Action</button>
      <button class="genre1" id="12" name="ADVENTURE">Adventure</button>
      <button class="genre1" id="35" name="COMEDY">Comedy</button>
      <button class="genre1" id="27" name="HORROR">Horror</button>
      <button class="genre1" id="80" name="CRIME">Crime</button>
      <button class="genre1" id="16" name="ANIMATION">animation</button>
      <button class="genre1" id="878" name="FICTION">Fiction</button>
      <button class="genre1" id="99" name="DOCUMENTARY">Documentary</button>
      <button class="genre1" id="18" name="DRAMA">Drama</button>
      <button class="genre1" id="10751" name="FAMILY">Family</button>
      <button class="genre1" id="14" name="FANTASY">Fantasy</button>
      <button class="genre1" id="36" name="HISTORY">History</button>
      <button class="genre1" id="10749" name="ROMANCE">Romance</button>
      <button class="genre1" id="53" name="THRILLER">Thriller</button>
      <button class="genre1" id="10752" name="WAR">War</button>
      <button class="genre1" id="9648" name="MYSTERY">Mystery</button>
      <button class="genre1" id="10402" name="MUSIC">Music</button>
      <button class="genre1" id="10770" name="TV">Tv Movie</button>


    </div>

</div>
<div id="bottom"></div>

<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
