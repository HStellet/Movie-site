var name=localStorage.getItem("name");
var movday = parseInt(localStorage.getItem('day'));
var days=["Monday","Tueday","Wednesday","Thursday"];
var movtime = localStorage.getItem('time');
var movprice = localStorage.getItem('total');
document.getElementById('data1').innerHTML=name;
document.getElementById('data2').innerHTML=days[movday-1];
document.getElementById('data3').innerHTML=movtime;
document.getElementById('data4').innerHTML='Amount Payable: Rs.'+movprice;