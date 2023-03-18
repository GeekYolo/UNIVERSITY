Algoritmo CICLO_PARA_1
	Definir n1,n2,n3 Como Entero;
	Escribir "A continuacion podra definir la cantidad de tablas de multiplicar que desea visualizar"
	Escribir "ingrese el inicio de la tabla que desea multiplicar"
	Leer num1
	Escribir "ingrese el final de la tabla que desea multiplicar"
	Leer num2
	Para n1<-num1 Hasta num2 con paso 1 Hacer
		Escribir "La tabla del", n1;
		Para n2 <-1 hasta 10 con paso 1 Hacer
			n3<-n1*n2;
			Escribir n1,"x",n2,"=",n3;
		FinPara
	FinPara
FinAlgoritmo
