<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>concessionária</title>
  
</head>

<body>

  
<div class="card-body">
<h4 class="card-title text-center">Formulário</h4>
</div>
                    
<form class="row p-2">          
<div class="col-md-4">
<label for="campoMarca">Marca</label>
<input type="text" id="campoMarca" class="form-control mt-2 mb-3" placeholder></input>
</div>

<div class="col-md-4">
    <label for="campoCor">Cor</label>
    <input type="text" id="campoCor" class="form-control mt-2 mb-3" placeholder></input>
    </div>
            
<div class="col-md-4">
<label for="campoModelo">Modelo</label>
<input type="text" id="campoModelo" class="form-control mt-2 mb-3" placeholder></input>
</div>  
            
<div class="col-md-4">
<label for="campoAno">Ano</label>
<input type="number" id="campoAno" class="form-control mt-2 mb-3" placeholder></input>
</div>
     
<div class="col-md-4">
<label for="campoKm">Quilometragem</label>
<input type="number" id="campoKm" class="form-control mt-2 mb-3" min=0 step=0.1 placeholder></input>
</div>  

<div class="col-md-4">
    <label for="campoValor">Valor FIPE</label>
    <input type="number" id="campoValor" class="form-control mt-2 mb-4" min=0 step=0.1 placeholder></input>
    </div>  
   
<input type="submit" value="Enviar" id="" class="btn btn-primary">
</form>
</div>
  
<div class="col"></div>

</div>   
 
<script type="text/javascript">
document.getElementById("").addEventListener("click",function(){

var mv = document.getElementById('campoMarca').value;
var mov = document.getElementById('campoModelo').value;
var anov = document.getElementById('campoAno').value;
var cov = document.getElementById('campoCor').value;
var KMV = document.getElementById('campoKm').value;
var valva = document.getElementById('campoValor').value;

            var carro = {
                marca: mv,
                model: mov,
                ano: anov,
                cor: cov,
                km: KMV,
                valor: valva,

         
                anosUtilizacao: function(){
                    var data = new Date();
                    var tempoUti = data.getFullYear();
                    tempoUti -= this.ano;
        
                    return tempoUti;
                },

                valorMercado: function(){
                    var tUti = this.anosUtilizacao();
                    var kmAno = this.km/tUti;

                    if(kmAno <= 30.000){
                        this.valor = (this.valor*110)/100;
                        return this.valor;
                    }

                    else if(kmAno > 30.000 && kmAno <= 50.000){
                        return this.valor;
                    }

                    else{
                        this.valor = (this.valor*90)/100;
                        return this.valor;
                    }
                },
            };      

        
            var formatter = new Intl.NumberFormat('pt-BR', {
                style: 'currency',
                currency: 'BRL',
            })
            
    
            alert("Tempo de Utilização: " + carro.anosUtilizacao() + " ano(s)" +
                    "\nValor de Mercado: " + formatter.format(carro.valorMercado()));
        });
    </script>
   
</body>
</html>