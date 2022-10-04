<!DOCTYPE html>
<html>
<head>
<title>Palindromo</title>
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
</style>
</head>
<body>
<script type="text/javascript">
     var string = prompt ("digite uma palavra");
	 var len = string.length;
	 var mens = 0;
	 for (var i = 0; i < len/2 ; i++){
		 if(string[i] != string[len - 1 - i]){
			 mens = 1;
	     if (mens = 0 ){
			 alert("é um polindromo");
		 }else{
		     alert("não é um palindromo");	
        }	 
		
		}
	}	
	

     
</script>
</body>
</html>