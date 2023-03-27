#include <iostream>
using namespace std;

void encabezado(){
	cout<<"IUTA"<<endl;
	cout<<"CARRERA INFORMATICA"<<endl;
	cout<<"LENGUAJE DE PROGRAMACION"<<endl;
	cout<<"282A4"<<endl;
	cout<<"WILSBER HERRERA"<<endl;
	cout<<""<<endl;
	cout<<""<<endl;
}

int suma (int num1, int num2){
	int suma=0;
	suma=num1+num2;
	
	return suma;
}

int main(){
	int num1=0;
	int num2=0;
	encabezado();
	cout<<"ingrese un numero a sumar"<<endl;
	cin>>num1;
	cout<<""<<endl;
	cout<<"ingrese un segundo numero a sumar"<<endl;
	cin>>num2;
	cout<<""<<endl;
	cout<<"la suma de ambos numeros es ="<<suma (num1, num2)<<endl;
	
	cin.get();
	return 0;
}

//WILSBER HERRERA 282A4
//ingrese 2 valores a la funcion y que imprima los valores en el programa, agregar encabezado
