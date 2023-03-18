#include <iostream>
using namespace std;

main(){
    int num1;
    cout<<"Por favor introduzca un numero del 1 al 9 para conocer su tabla de multiplicar :"<<endl;
    cin>>num1;
    if (num1>=1 & num1<=9) {
	
    for(int num2=1;num2<=10;num2++){
        int multiplicacion = num2 * num1;
        cout<<num1 <<" x "<< num2 <<"="<< multiplicacion <<endl;
    }
}else{
	cout<<"el numero introducido es mayor a 9 o menor que 1"<<endl;
}
    return 0;
}

//WILSBERHERRERA_282A3