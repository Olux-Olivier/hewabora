<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>HB Club - Grand Opening</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>

body{
background: #000;
color:white;
font-family: Arial, Helvetica, sans-serif;
}

.overlay{
background: rgba(0,0,0,0.75);
}

.page-load{
animation: pageLoad 1.5s ease-out;
}

@keyframes pageLoad{
0%{opacity:0; transform: translateY(30px) scale(0.95);}
100%{opacity:1; transform: translateY(0) scale(1);}
}

.title{
font-size:60px;
color:red;
font-weight:bold;
text-shadow:0 0 20px red;
animation: glowPulse 2s infinite alternate;
}

@keyframes glowPulse{
from{ text-shadow:0 0 10px red,0 0 20px red;}
to{ text-shadow:0 0 30px red,0 0 60px red;}
}

.subtitle{
font-size:26px;
letter-spacing:3px;
}

.timer-box{
background:#111;
border:1px solid red;
padding:20px;
border-radius:10px;
width:120px;
}

.timer-number{
font-size:40px;
color:red;
font-weight:bold;
}

/* message ouverture */

.open-message{
display:none;
font-size:45px;
font-weight:bold;
color:red;
text-shadow:0 0 25px red;
animation: glowPulse 2s infinite alternate;
}

</style>

</head>

<body>

<div class="overlay min-h-screen flex items-center justify-center">

<div class="text-center px-4 page-load">

<h1 class="subtitle mb-2">HB CLUB</h1>

<h2 class="title mb-8">
GRAND OPENING
</h2>

<p class="mb-10 text-gray-300">
R-BACK • DJ BOMB'H • DJ NZINZI • TASHIRO
</p>

<!-- compteur -->

<div id="countdown" class="flex justify-center gap-4 flex-wrap">

<div class="timer-box">
<div id="days" class="timer-number">00</div>
<div>JOURS</div>
</div>

<div class="timer-box">
<div id="hours" class="timer-number">00</div>
<div>HEURES</div>
</div>

<div class="timer-box">
<div id="minutes" class="timer-number">00</div>
<div>MIN</div>
</div>

<div class="timer-box">
<div id="seconds" class="timer-number">00</div>
<div>SEC</div>
</div>

</div>

<!-- message ouverture -->

<div id="openMessage" class="open-message mt-10">
WELCOME TO HB CLUB <br>
THE PARTY HAS STARTED 🔥
</div>

<p class="mt-8 text-lg text-red-400 font-semibold">
Ouverture officielle à 21h00
</p>

<a href="{{ url('/lounge/foods') }}"
class="inline-block mt-6 px-8 py-3 border-2 border-yellow-400 text-yellow-400 rounded-full
hover:bg-yellow-400 hover:text-black transition duration-300 shadow-lg">
Menu
</a>

<p class="mt-10 text-gray-400">
3ᵉ Niveau Bâtiment Hypnose<br>
826 Av Mama Yemo, Lubumbashi
</p>

<p class="mt-6 text-gray-500">
0990867502 • 0992499384
</p>

<p class="mt-10 text-gray-600 text-sm">
© {{ date('Y') }} Synergie UP. Tous droits réservés.
</p>

</div>

</div>

<script>

let now = new Date();

let target = new Date();
target.setDate(now.getDate()+1);
target.setHours(21,0,0,0);

function updateTimer(){

let now = new Date();
let diff = target - now;

if(diff <= 0){

document.getElementById("countdown").style.display="none";
document.getElementById("openMessage").style.display="block";

return;
}

let days = Math.floor(diff/(1000*60*60*24));
let hours = Math.floor((diff%(1000*60*60*24))/(1000*60*60));
let minutes = Math.floor((diff%(1000*60*60))/(1000*60));
let seconds = Math.floor((diff%(1000*60))/1000);

document.getElementById("days").innerText = days;
document.getElementById("hours").innerText = hours;
document.getElementById("minutes").innerText = minutes;
document.getElementById("seconds").innerText = seconds;

}

updateTimer();
setInterval(updateTimer,1000);

</script>

</body>
</html>
