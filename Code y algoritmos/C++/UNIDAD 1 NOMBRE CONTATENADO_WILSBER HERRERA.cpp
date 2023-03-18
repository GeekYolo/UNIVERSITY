#include <iostream>
#include <string>

using namespace std;
string nom1;
string apell1;
string completo;
int main() {
	cout<<"Ingrese su nombre=";
	getline(cin,nom1);
	cout<<"ingrese su apellido=";
	getline(cin,apell1);
	completo = nom1 + " "+ apell1;
	cout<<"su nombre completo es="<<completo;
	return 0;
}
//WILSBER HERRERA 282A4