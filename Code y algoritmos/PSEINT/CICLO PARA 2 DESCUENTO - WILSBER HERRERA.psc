Algoritmo Ciclo_Para_2
	Para Cons <- 1 Hasta 5 Con Paso 1 Hacer		
        Escribir "Ingrese Consumo ", Cons , " : "
        Leer CONSUMO		
        TOTAL = TOTAL + CONSUMO				
    Fin Para
    Si TOTAL > 50 Entonces
        DESC = TOTAL * 0.07
    SiNo
        DESC = 0
    Fin Si		
    Escribir "CONSUMO TOTAL : ", TOTAL
    Escribir "DESCUENTO     : ", DESC
    Escribir "PAGO TOTAL    : ", (TOTAL - DESC)
FinAlgoritmo
