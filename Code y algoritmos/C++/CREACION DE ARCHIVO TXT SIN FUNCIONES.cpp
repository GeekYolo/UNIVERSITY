#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main()
{
    string texto;

    cout << "Introduce un texto: ";
    getline(cin, texto);

    ofstream archivo("texto.txt");

    if (archivo.is_open())
    {
        archivo << texto;
        archivo.close();
    }
    else
        cout << "Error al crear el archivo";

    ifstream leer("texto.txt");

    if (leer.is_open())
    {
        string linea;
        while (getline(leer, linea))
            cout << linea << endl;
        leer.close();
    }
    else
        cout << "Error al leer el archivo";

    return 0;
}