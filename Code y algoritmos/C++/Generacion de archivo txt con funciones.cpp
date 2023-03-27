#include <iostream>
#include <fstream>
#include <string>
using namespace std;

// Función para solicitar el nombre del archivo
string pedirNombreArchivo(){
    string nombre;
    cout << "Introduzca el nombre del archivo: ";
    cin >> nombre;
    return nombre;
}

// Función para escribir el archivo
void escribirArchivo(string nombre, string contenido){
    ofstream archivo;
    archivo.open(nombre + ".txt");
    archivo << contenido << endl;
    archivo.close();
    cout << "El archivo se ha guardado con exito" << endl;
}

// Función para leer el archivo
void leerArchivo(string nombre){
    ifstream archivo;
    string linea;
    archivo.open(nombre + ".txt");
    
    if(archivo.fail()){
        cout << "Error al leer el archivo" << endl;
    }
    else {
        while(!archivo.eof()){
            getline(archivo, linea);
            cout << linea << endl;
        }
    }
    archivo.close();
}

int main(){
    string nombreArchivo;
    string contenido;
    nombreArchivo = pedirNombreArchivo();
    cout << "\nIntroduzca contenido para el archivo: " << endl;
    cin.ignore();
    getline(cin, contenido);
    
    // Escribir el archivo
    escribirArchivo(nombreArchivo, contenido);
    
    // Leer el archivo
    cout << "\n\nLeyendo el archivo " << nombreArchivo << ".txt" << endl;
    leerArchivo(nombreArchivo);
    
    cin.get();
    return 0;
}

//WILSBER HERRERA 282A4
