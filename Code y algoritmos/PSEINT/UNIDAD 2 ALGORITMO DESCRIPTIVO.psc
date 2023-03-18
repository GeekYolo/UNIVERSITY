Algoritmo COMO_HACER_CAFÉ
	Escribir "Responder con si o con no dependiendo de su situación"
	Escribir "por favor, evitar las mayúsculas"
	Escribir '¿Desea realizar café?'
	Leer realizar
	Si realizar='si' Entonces
		Escribir "¡hagamos café!"
		Escribir '¿Tiene café molido?'
		Leer cafe
		Si cafe='si' Entonces
			Escribir '¡Excelente!'
			Escribir 'Por favor, coloque a hervir agua para realizar el café'
			Escribir '¿Hirvió el agua?'
			Leer Hervir
			Si Hervir='si' Entonces
				Escribir 'por favor, coloque el café molido en el colador de café'
			SiNo
				Escribir 'Espere por favor'
				Escribir 'por favor, coloque el café molido en el colador de café'
				Escribir "Una vez termine de hervir el agua"
				Escribir 'coloque el agua hervida en el colador"
				Escribir 'Espere mientras el café se cuela"
			FinSi
			Si Hervir="si" entonces
				Escribir 'coloque el agua hervida en el colador'
				Escribir 'Espere mientras el café se cuela'
			FinSi
			Escribir '¿Terminó de colarse el café?'
			Leer colar
			Si colar='si' Entonces
				Escribir 'Sirva el café caliente en su taza favorita'
				Escribir 'Disfrute su café'
				Escribir "¡Muchas gracias!"
			SiNo
				Escribir 'espere por favor mientras el café termina de colarse'
				Escribir 'Sirva café en su taza favorita'
				Escribir 'Disfrute su café'
				Escribir "¡Muchas gracias!"
			FinSi
		SiNo
			Escribir 'Vuelva cuando tenga café molido'
			Escribir "¡Hasta luego!"
			Escribir "¡Muchas gracias!"
		FinSi
	SiNo
		Escribir "Hasta luego, vuelva cuando desee hacer café"
		Escribir "¡Muchas gracias!"
FinSi
FinAlgoritmo
