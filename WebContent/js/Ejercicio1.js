/**
 * 
 */

function CantidadMayusculas(){
var cadena = document.getElementById("sEjericio1").value
var contar = 0;
var mayusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

for (var i = 0; i < mayusculas.length; i++) {
 for (var x = 0; x < cadena.length; x++) {
 if(cadena[x]==mayusculas[i]){
 contar+=1;
     }
   }
 }

	
	alert("El numero de mayusculas es: "+contar);
}