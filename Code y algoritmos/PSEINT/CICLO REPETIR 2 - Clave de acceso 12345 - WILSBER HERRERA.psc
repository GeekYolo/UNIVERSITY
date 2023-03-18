Algoritmo Repetir_hastaQue2
	Escribir "Bienvenido, para acceder por favor introduzca su contraseña de 5 digitos sucesivos"
	Repetir
		Escribir "Ingrese su contraseña de acceso"
		Leer contraseña
		si contraseña <> 12345 
			Escribir "contraseña incorreta, intente nuevamente"
		FinSi
	Hasta Que contraseña = 12345
	Escribir "Contraseña correcta, Bienvenido!"
FinAlgoritmo
