// $(window).load(function(){
//     $('.loader').fadeOut("fast");
//   // document.getElementById("loader").style.display = "none";
//   document.getElementById("outer").style.display = "block";

// });

setInterval(function(){
  $('.loader').fadeOut("fast");
  document.getElementById("bottom").style.display = "block";
  document.getElementById("outer").style.display = "block";
},3000);

 var r = document.getElementsByClassName('poster');
 for(var i=0;i<r.length;i++){
    r[i].onclick = function() {
        var id = this.id;
        document.location.href='./php/trailer.php?ide='+id;
    };
}

 var r = document.getElementsByClassName('poster1');
 for(var i=0;i<r.length;i++){
    r[i].onclick = function() {
        var id = this.id;
        document.location.href='../php/trailer.php?ide='+id;
    };
}

 var r = document.getElementsByClassName('genre');
 for(var i=0;i<r.length;i++){
    r[i].onclick = function() {
        var id = this.id;
        var name = this.attributes["name"].value;
        document.location.href='./php/genre.php?ide='+id+'&name='+name;
    };
}

 var r = document.getElementsByClassName('genre1');
 for(var i=0;i<r.length;i++){
    r[i].onclick = function() {
        var id = this.id;
        var name = this.attributes["name"].value;
        document.location.href='./genre.php?ide='+id+'&name='+name;
    };
}

 var r = document.getElementsByClassName('genremore');
 for(var i=0;i<r.length;i++){
    r[i].onclick = function() {
        document.location.href='./php/genres.php';
    };
}
