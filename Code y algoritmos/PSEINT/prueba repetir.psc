Algoritmo EJERCICIO_CICLO_REPETIR_1
	Escribir "ESTE ALGORITMO REALIZA RESTAS SUCESIVAS"
	Definir num1, num2, resto, cuenta Como Entero
	Escribir  "Inserte Numerador"
	Leer num1
	Escribir "Inserte Denominador"
	Leer num2
	Repetir
		num1 <- num1-num2
		resto <- num1
		cuenta <- cuenta+1
	Hasta Que num1<mun2
	Escribir "El resto es: " resto
	Escribir "El cociente es: " cuenta
FinAlgoritmo
