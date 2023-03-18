Algoritmo Ciclp_dowhile02
	Definir opcion Como Entero
	
	Repetir
		Escribir "MENU DE OPCIONES"
		Escribir "1. SUMAR 1+1"
		Escribir "2. MULTIPLICAR 5x5"
		Escribir "3. SALIR"
		
		Repetir
			Escribir "Ingrese opción: "
			Leer opcion
			Si (No(opcion = 1 o opcion = 2 o opcion = 3)) Entonces
				Escribir "Debe ingresar una opcion correcta"
			FinSi
		Hasta Que (opcion = 1 o opcion = 2 o opcion = 3)
		
		Segun opcion Hacer
			1:
				Escribir "2 + 2 = 4"
			2:
				Escribir "5 x 5 = 25"
			3:
				Escribir "Saliendo del programa"
		Fin Segun
		
	Hasta Que opcion = 3
FinAlgoritmo
