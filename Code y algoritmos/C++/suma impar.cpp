#include <iostream>
using namespace std;

main(){
	int num1=1;
	int suma=0;
	
	cout<<"se mostrara en pantalla el conteo de los numeros del 0 al 20"<<endl;
	cout<<""<<endl;
	
	for (num1=1;num1<=10;num1++){		
	if(num1%2!=0){
		
		suma=suma+num1;
		}
	}
	
	cout<<""<<endl;
	cout<<suma<<endl;
		
	cout<<""<<endl;
	cout<<"hasta luego"<<endl;
	
	
	cin.get();
	return 0;
}

//sume numeros impares
// WILSBER HERRERA 282A4
