<!DOCTYPE html>
<html>
<head>
<title>Relogio</title>
<style type="text/css">
*
{
  margin:0;
  padding:0;
  box-sizing: border-box;
  font-family: 'Poopins' , sans-serif;
  color: white;
}
body 
{
  display:grid;
  justify-content: center;
  align-items: center;
  min-height: 80vh;
  background: #091921;
  font-size: 50px;
  text-align: center;
  text-shadow: 0 0 3px black, 0 0 5px black;
}
.clock
{
  width: 350px;
  height: 350px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: url(clock.png);
  background-size: cover;
  border: 4px solid #091921;
  border-radius: 50%;
  box-shadow: 0 -15px 15px rgba(255,255,255,0.05),
             inset 0 -15px 15px rgba(225,255,255,0.05),
             0 15px 15px rgba(0,0,0,0.3),
             inset 0 15px 15px rgba(0,0,0,0.05);
}
.clock:before
{
  content: '';
  position: absolute;
  width: 15px;
  height: 15px;
  background: #fff;
  border-radius: 50%;
  z-index: 10000;
}
.clock .hour,
.clock .min,
.clock .sec
{
  position: absolute;
}
.clock .hour, .hr
{
  width: 160px;
  height: 160px;
}
.clock .min, .mn
{
  width: 190px;
  height: 190px;
}
.clock .sec, .sc
{
  width: 2300px;
  height: 230px;
}
.hr, .mn, .sc
{
  display: flex;
  justify-content: center;
  /*align-items: center;*/
  position: absolute;
  border-radius: 50%;
}
.hr:before
{
  content: '';
  position: absolute;
  width: 8px;
  height: 80px;
  background: #ff105e;
  z-index: 10;
  border-radius: 6px 6px 0 0;

}
.mn:before
{
  content: '';
  position: absolute;
  width: 4px;
  height: 90px;
  background: #ffF;
  z-index: 11;
  border-radius: 6px 6px 0 0;

}
.sc:before
{
  content: '';
  position: absolute;
  width: 2px;
  height: 150px;
  background: #ffF;
  z-index: 12;
  border-radius: 6px 6px 0 0;

}
</style>
</head>
<body>

<div id = "relo" onload="currentTime()"></div>
<div class='clock'>
   <div class='hour'>
      <div class ='hr' id='hr'></div>
</div>
<div class='min'>
      <div class ='mn' id='mn'></div>
</div>
<div class='sec'>
      <div class ='sc' id='sc'></div>
</div>
</div>

<script type="text/javascript">
//javascript 1//
   const deg = 6;
   const hr = document.querySelector('#hr');
   const mn = document.querySelector('#mn');
   const sc = document.querySelector('#sc');

  setInterval(() => {

    let day = new Date();
    let hh = day.getHours() * 30;
    let mm = day.getMinutes() * deg;
    let ss = day.getSeconds() * deg;

    hr.style.transform = `rotateZ(${(hh)+(mm/12)}deg)`;
    mn.style.transform = `rotateZ(${mm}deg)`;
    sc.style.transform = `rotateZ(${ss}deg)`;

  })
</script>

<script type="text/javascript">


//relogio 2

function currentTime() {
  let date = new Date(); 
  let h = date.getHours();
  let m = date.getMinutes();
  let s = date.getSeconds();
  let part = "Manhã";

    
  if(h > 12){
      part = "Tarde";
   }

   h = (h < 10) ? "0" + h : h;
   m = (m < 10) ? "0" + m : m;
   s = (s < 10) ? "0" + s : s;
    
   let time = h + ":" + m + ":" + s + " " + part;

  document.getElementById("relo").innerText = time; 
  let t = setTimeout(function(){ currentTime() }, 500); 

}

currentTime();

	
</script>

</body>
</html>