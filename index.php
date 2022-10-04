 <!DOCTYPE html>
<html>
<head>
<style type="text/css">
*
{
  margin: 0;
  padding: 0;
  font-family: 'Poopins' , sans-serif;
}
body 
{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  flex-direction: column;
  background: #040d15;
  font-size: 100px;
  overflow: hidden;
}
ul
{
  position: relative;
  display: flex;
  flex-direction: column;
}
ul li
{
  list-style: none;
}
ul li a
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
ul:hover li a
{
  opacity: 0;
}
ul li a:hover
{
  transform: scale(1.4);
  z-index: 1000;
  background: #ff3f81;
  opacity: 1;
}
ul li:before
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
ul li:hover:before
{
  opacity: 0.05;
  letter-spacing: 0px;
}
</style>
<meta=charset="utf-8">
  <meta name="viewport" content="width=divice-width, inicial-scale=1">
  <title>exemplos da aula</title>
</head>
<body>
   <ul>
     <li data-text="Data" > <a href="data.php">Data atual </a>
     <li data-text="Relogio" ><a href="reloginho.php">Relogio</a>
	   <li data-text="Polindromo" ><a href="pp.php">Polindromos</a>
	   <li data-text="Carros" ><a href="concesionaria.php">Carros</a>
	   <li data-text="Tabela" ><a href="exibirtabela.php">Tabela</a>
  </ul>
</body>
</html> 