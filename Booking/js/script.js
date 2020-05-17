var days = document.getElementsByClassName('day');

localStorage.setItem('day',"1");
localStorage.setItem("name",localStorage.getItem("name"));
[].forEach.call(days, function(el) {
   el.onclick = function(){
		document.getElementById('active').removeAttribute("id");
		el.setAttribute("id","active");
		localStorage.setItem("day",el.getAttribute("name"));
		var d = parseInt(el.getAttribute("name"));
		var time = document.getElementsByClassName('tbut');
		switch(d)
		{
			case 1 : {
				time[0].innerHTML="10:30 AM";
				time[1].innerHTML="12:45 PM";
				time[2].innerHTML="02:40 PM";
				time[3].innerHTML="04:30 PM";
				time[4].innerHTML="08:30 PM";
				time[5].innerHTML="11:00 PM";
				break;
			}
			case 2 : {
				time[0].innerHTML="09:30 AM";
				time[1].innerHTML="11:45 AM";
				time[2].innerHTML="01:40 PM";
				time[3].innerHTML="03:30 PM";
				time[4].innerHTML="06:30 PM";
				time[5].innerHTML="10:00 PM";
				break;
			}
			case 3 : {
				time[0].innerHTML="10:00 AM";
				time[1].innerHTML="12:05 PM";
				time[2].innerHTML="02:30 PM";
				time[3].innerHTML="05:00 PM";
				time[4].innerHTML="07:30 PM";
				time[5].innerHTML="11:20 PM";
				break;
			}
			case 4 : {
				time[0].innerHTML="09:00 AM";
				time[1].innerHTML="11:00 AM";
				time[2].innerHTML="01:30 PM";
				time[3].innerHTML="03:50 PM";
				time[4].innerHTML="07:30 PM";
				time[5].innerHTML="10:30 PM";
				break;
			}
		}
	}
});

var time = document.getElementsByClassName("tbut");
[].forEach.call(time, function(el){
	el.onclick = function(){
		localStorage.setItem("time",el.innerHTML);
		window.location = "../html/booking.html";
	}
});
