var time = localStorage.getItem('time');
var day = parseInt(localStorage.getItem('day'));
var days=["Monday","Tueday","Wednesday","Thursday"];


document.getElementById('movtime').innerHTML=time;
document.getElementById('movday').innerHTML=days[day-1];
var name2=["IT","Judwaa 2","American Assassin","Home Again","American Made","Bailaras","Chef","Newton","Spiderman: Homecomming","Blade Runner"];
var id=parseInt(localStorage.getItem('name'));
document.getElementById('movname').innerHTML=name2[id-1];

var seat=document.getElementsByTagName('td');
var num=0;
var price=0;
[].forEach.call(seat,function(el){
	el.onclick = function(){
		var parent = parseInt(el.parentNode.getAttribute('class'));
		if(el.getAttribute('class')!="space"){
			if(el.getAttribute('style')=="" || !el.getAttribute('style')){
			price+=parent;
			num++;
			el.setAttribute('style',"background-color:#27ae60;");
			}
			else{
				el.setAttribute('style',"");
				num--;
				price-=parent;
			}
			document.getElementById("price").innerHTML="Total: Rs."+price;
	}
	}
});

document.getElementById('proceed').onclick=function(){
	if(price!=0){
	localStorage.setItem('total',price);
	window.location="./payment.html";
}
};

