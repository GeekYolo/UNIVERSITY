#include <iostream>
#include <string>

using namespace std;

int main(){

    int cantidadEdades;
	int edad;
	int contadorEdades = 0;
	int sumaEdades = 0;
	int contadorRango = 0;
    float promedio;

    cout << "Ingresa la cantidad de edades que quieres ingresar: ";
    cin >> cantidadEdades;

    for(int i = 0; i < cantidadEdades; i++){
        cout << "Ingresa la edad: ";
        cin >> edad;
        sumaEdades = sumaEdades + edad;
        contadorEdades++;

        if(edad >= 25 && edad <= 46){
            contadorRango++;
        }
    }
    promedio = float(sumaEdades / contadorEdades);
    cout << "Se ingresaron " << contadorEdades << " edades" << endl;
    cout << "Se encontraron " << contadorRango << " edades entre 25 y 46" << endl;
    cout << "El promedio de edades ingresadas es: " << promedio << endl;
    
    getchar();
	
    cin.get();
    return 0;
}

//WILSBER HERRERA 282A4
