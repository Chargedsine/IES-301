<!DOCTYPE html>
<html>
<style type="text/css">
*
{
  margin:0;
  padding:0;
  box-sizing: border-box;
  font-family: 'Poopins' , sans-serif;
  color: white;
  background: #040d15;
  text-align: center;
  justify-content: center;
}
body 
{
  display:grid;
  justify-content: center;
  align-items: center;
  min-height: 80vh;
  font-size: 30px;
  text-align: center;
  text-shadow: 0 0 3px black, 0 0 5px black;
}
h1
{
  position: relative;
  display: inline-block;
  padding: 6px 15px;
  text-decoration: none;
  background: linear-gradient(90deg,#0162c8,#55e7fc);
  color: #fff;
  border-radius: 40px;
  text-transform: uppercase;
  letter-spacing: 3px;
  overflow: hidden;
  transition: 0.5s;
  z-index: 1;
}
h1:hover
{
  transform: scale(1.1);
  z-index: 100;
  background: #ff3f81;
  opacity: 1;
}
h1:before
{
  content: attr(data-text);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #fff;
  font-size: 3em;
  font-weight: 700;
  pointer-events: none;
  opacity:0;
  letter-spacing: 20px;
  transition: 0.5s;
  white-space: nowrap;
  
}

</style>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
<link rel="stylesheet"href="style.css">

</head>

<body>


<script language=javascript type="text/javascript">
    dayName = new Array ("domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado")
monName = new Array ("janeiro", "fevereiro", "março", "abril", "maio", "junho", "agosto", "outubro", "novembro", "dezembro")
now = new Date
document.write ("<h1> Hoje é " + dayName[now.getDay() ] + ", " + now.getDate () + " de " + monName [now.getMonth() ]   +  " de "  +     now.getFullYear () + ". </h1>")
</script>
</body>
</html>