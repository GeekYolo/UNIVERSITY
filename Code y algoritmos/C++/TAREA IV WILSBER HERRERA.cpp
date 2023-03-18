#include <iostream>
using namespace std;

int main(){
    int numeros[5];
    float promedio;
    int suma=0;
    
    cout<<"a continuacion ingrese 5 numeros para conocer:"<<endl;
    cout<<"la suma de los mismos"<<endl;
    cout<<"el promedio de los mismo"<<endl;
   
    //Solicitando
    for(int i=0; i<5; i++){
        cout<<"Ingrese un numero a la vez ["<<i<<"]: ";
        cin>>numeros[i];
    }
    
    //Mostrando
    cout<<"Los numeros ingresados son: "<<endl;
    for(int i=0; i<5; i++){
        cout<<numeros[i]<<" "<<endl;
    }
    
    //Sumando
    for(int i=0; i<5; i++){
        suma+=numeros[i];
    }
    promedio=(float)suma/5;
    
    cout<<"La suma de los numeros es: "<< suma <<endl;
    cout<<"El promedio es:"<<promedio <<endl;
    return 0;
}

//WILSBERHERRERA 282A4