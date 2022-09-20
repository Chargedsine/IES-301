<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>memorizar lista</title>
    <link rel="stylesheet" href="at1.css">
</head>
<body>
    <div class="pergunta">
    <label for="inf" class="label">Insira qualquer caractere para armazenar:</label>
    <input type="text" id="inf" class="digitavel">
    <button id="add" class="botaoverificar">enviar</button>
    </div>
    <ul id="minhaLista" class="tabela">

    </ul>



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