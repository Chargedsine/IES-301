<!DOCTYPE html>
<html>
<style type="text/css">

body
{
    overflow: hidden;
    background: #040d15;
    justify-content: grid;
    list-style: none;
    font-family: Arial;
}
.meio{
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    margin-top: 20%;
    /* height:50%; /
    width:100%;
    margin-top:15%; / previamente era 10% */
}
.coluna{
    width:100%;
    height:50%;
    display: flex;
    justify-content: center;
    flex-direction: row;
    align-items: center;
}
section
{
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(to bottom, #040d15, #040d21);
}
label{
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 30px;
}
form
{
    display: flex;
    justify-content: center;
    align-items: grid;
    color: blue;
    width: 100%;
    border: none;
    outline: none;
    padding: 10pc 20px;
    border-radius: 35px;
    border: 1px solid (gray);
    border-right: 2px solid(dark gray);
    border-bottom:2px solid rgba(255,255,255,0.2);
    box-shadow: 4px 15px rgba(0,0,0,0.05);
}
.form .inputbox input
{
    width: 100%;
    background: gray;
}
li{
    color: white;
}
.digitavel{
    margin-top: 20px;
    width: 100%;

}
.botaoverificar{
    margin-left: 25%;
    width: 50%;
    padding: 10px;
}
.pergunta{
    gap: 20px;
    border: 1px solid #040e50;
    box-shadow: 4px 15px rgba(0,0,0,0.05);
    border-radius: 35px;
    padding: 30px;
}
</style>
<head>
    <meta charset="utf-8">
    <title>memorizar lista</title>
    <link rel="stylesheet" href="at1.css">
</head>
<body>
<div class="meio">
        <div class="coluna">
            <p></p>

    <div class="pergunta">

    <label for="inf" class="label">Insira qualquer caractere para armazenar:</label>
    <input type="text" id="inf" class="digitavel">
    <button id="add" class="botaoverificar">enviar</button>
    <ul id="minhaLista" class="tabela">
    </div>


    </ul>
    </div>
    </div>


    <script type="text/javascript">
        var array = new Array();
        document.getElementById("add").addEventListener("click",function(){
           array.push(document.getElementById("inf").value);
           let x1 = document.createElement("li");
           let x2 = document.createTextNode(array[array.length-1]);
           x1.appendChild(x2);
           document.getElementById("minhaLista").appendChild(x1);
        });
    </script>


</body>