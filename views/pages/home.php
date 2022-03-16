<style>
    *
{
margin: 0;
padding: 0;
box-sizing: border-box;
}
body
{

justify-content: center;
align-items: center;
min-height: 100vh;
background: #fff;
}
</style>
<br>
<br>
<br>
<br>
<!DOCTYPE html>
<html><center>
<h2><font size = "10" color = #fff face = "cursive">INTERSHIP SYSTEM</font></h2><br>
<meta charset="utf-8">
<title>Javascript Clock UI Dark Mode</title>
<link rel="stylesheet" href="style.css">

<body >
<div class="clock">
<div class="hour">
<div class="hr" id="hr"></div>
</div>
<div class="min">
<div class="mn" id="mn"></div>
</div>
<div class="sec">
<div class="sc" id="sc"></div>
</div>
</div>

<script type="text/Javascript">
const deg = 6;
const hr = document.querySelector('#hr');
const mn = document.querySelector('#mn');
const sc = document.querySelector('#sc');
setInterval(() => {
let day = new Date();
let hh = day.getHours() * 30;
let mm = day.getMinutes() * deg;
let ss = day.getSeconds() * deg;
hr.style.transform = `rotateZ(${hh+(mm/12)}deg)`;
mn.style.transform = `rotateZ(${mm}deg)`;
sc.style.transform = `rotateZ(${ss}deg)`;
})
</script>
</body>
</html>
<center><img class="avatar" src="https://cdn.iconscout.com/icon/free/png-256/welcome-1889958-1600748.png" alt="avatar" width = "200"   ></center>


