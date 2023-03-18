Algoritmo COMPRA_CON_DESCUENTO
	Mostrar  "si su compra supera la cantidad de 900bs puede recibir un descuento del 20% de su compra"
	Mostrar "autor: WILSBER HERRERA"
	Mostrar	"Introducir el valor de compra:"
	Leer compra
		si (compra>900) Entonces
			DESC=compra*0.20
		SiNo
			DESC=0
		FinSi
			TPAGO=COMPRA-DESC
			Mostrar "Descuento :" (DESC) "bs"
			Mostrar "valor de compra :" (COMPRA) "bs"
			Mostrar "Total a cancelar"
			Mostrar ":" (TPAGO) "bs"
FinAlgoritmo
