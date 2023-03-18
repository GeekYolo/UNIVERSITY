#include <iostream>
#include <string>

using namespace std;

int main(){
	
	int num=0;
	int suma=0;
	char respuesta;
	
	do{
		cout<<"ingrese un numero a sumar"<<endl;
		cin>>num;
		suma=suma+num;
		cout<<"desea ingresar otro numero?"<<endl;
		cout<<""<<endl;
		cout<<"escriba S para realizar otra suma"<<endl;
		cout<<"escriba N para NO realizar otra suma"<<endl;
		cout<<""<<endl;
		cout<<"S/N"<<endl;
		cin>>respuesta;
	}while(respuesta=='s'|| respuesta=='s');
	cout<<""<<endl;
	cout<<"la suma es="<<suma<<endl;
	
	return 0;
}

	//WILSBER HERRERA 282A4
	//hacer un programa que sume N numero hasta que el usuario presione la tecla s y con N se detiene el ciclo