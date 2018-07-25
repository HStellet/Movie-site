var img = document.getElementsByClassName('img');

[].forEach.call(img, function(el){
	el.onclick = function(){
		localStorage.setItem('name',el.getAttribute('name'));
		window.location = "./html/timing.html";
	}
});

