Algoritmo ciclo_mientras02
	Escribir "con este algoritmo podemos identificar la cantidad de numeros negativos y sumar los numeros positivos"
	Escribir "para detener la operación el numero ingresado debe ser igual a cero (0)"
	num=1 
	Mientras num <> 0 hacer 
		Escribir "indique un numero" 
		leer num    
		si num < 0 entonces
			negativo = negativo + 1
		SiNo
			positivo = positivo + num
		FinSi    
	FinMientras
	Escribir "El total de negativos es: ",negativo 
	Escribir "La suma de positivos es: ",positivo 
FinAlgoritmo
