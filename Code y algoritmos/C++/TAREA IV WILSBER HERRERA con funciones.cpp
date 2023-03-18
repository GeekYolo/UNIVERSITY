#include <iostream>
using namespace std;

//Funcion para solicitar los numeros
void solicitarNumeros(int numeros[], int tamanio){
    for(int i=0; i<tamanio; i++){
        cout<<"Ingrese un numero a la vez ["<<i<<"]: ";
        cin>>numeros[i];
    }
}

//Funcion para mostrar los numeros
void mostrarNumeros(int numeros[], int tamanio){
    cout<<"Los numeros ingresados son: "<<endl;
    for(int i=0; i<tamanio; i++){
        cout<<numeros[i]<<" "<<endl;
    }
}

//Funcion para calcular la suma de los numeros
int sumarNumeros(int numeros[], int tamanio){
    int suma=0;
    for(int i=0; i<tamanio; i++){
        suma+=numeros[i];
    }
    return suma;
}

//Funcion para calcular el promedio de los numeros
float calcularPromedio(int numeros[], int tamanio){
    float promedio;
    int suma = sumarNumeros(numeros, tamanio);
    promedio=(float)suma/tamanio;
    return promedio;
}

int main(){
    int numeros[5];
    float promedio;
    int suma=0;
    
    cout<<"a continuacion ingrese 5 numeros para conocer:"<<endl;
    cout<<"la suma de los mismos"<<endl;
    cout<<"el promedio de los mismo"<<endl;
   
    //Solicitando
    solicitarNumeros(numeros, 5);
   
    //Mostrando
    mostrarNumeros(numeros, 5);

    //Sumando
    suma = sumarNumeros(numeros, 5);
    promedio = calcularPromedio(numeros, 5);
    
    cout<<"La suma de los numeros es: "<< suma <<endl;
    cout<<"El promedio es:"<<promedio <<endl;
    return 0;
}

//WILSBER HERRERA 282A4