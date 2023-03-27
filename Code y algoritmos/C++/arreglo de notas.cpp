#include <iostream>
using namespace std;

void imprimir(int num1[3]){
	cout<<"las notas ingresadas son:"<<endl;
	for (int i=0; i<3; i++){
		cout<<num1[i]<<"  ";
	}
}

int main (){
	int num1 [3];
	
	
	for (int i=0; i<3; i++){
		cout<<"ingrese la nota"<<endl;
		cin>>num1[i];
	}
	imprimir(num1);
	
	cin.get();
	return 0;
}

//WILSBER HERRERA 282A4
//hacer un programa que me permitaingresar notas en un arreglo
