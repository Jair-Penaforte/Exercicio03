



<?php
	
	/* substituindo $x por um número de 0 a 100
	
	


	
	for($j=0; $j<100; $j++){
		
		echo " o numero de 0 a 100, estamos no número: $j";

	}	*/	
		
		
		
		
		
		
	
	/*quantidade de repetição será determina pela variável total informada na URL
		
	$x = $_GET["total"]; 
	
	
	/*for($d=1; $d<=$x; $d++){
		
		echo "É possível repetir várias linhas no PHP. Esta linha foi repetida $d vezes <br>";
		
	}
	
	
	
	
	
	
	/* Exibição de todos os numeros de 0 a 100
	
	for($j=0; $j<=100; $j++){
		
		echo " o numero de 0 a 100, estamos no número: $j <br>";

	}	
	
*/

	


/* numeros pares de 0 a 100

	for($j=0; $j<=100; $j++){
		
		$k=2;
		
		if(($j%2)==0){
		echo " os numeros pares de 0 a 100, estamos no número: $j <br>";
		}
	}	
*/



/* NUMEROS PARES DE 500 a 10
for($j=500; $j>=10; $j--){
	
	if(($j%2)==0){
		echo "Os numeros pares entre 500 e 10 são: $j <br>" ;
	}
	
	else if(($j%2)==1){
		echo "<b> Os numeros impares entre 500 e 10 são: $j<br>";
	}

}
*/




/* SOMA DE TODOS OS NUMEROS ÍMPARES ENTRE 0 A 100

$soma=0;

for($j=0; $j<=100; $j++){
	
	
		
	if(($j%2)==1){
		
		$soma= $j+$soma;
		
	}

}

echo "A soma dos numeros impares é $soma";


*/






?>