/**
 * 
 */

function Ejercicio3(){
var text = document.getElementById("sEjericio3").value;
var array = text.split(',');

Array.prototype.sortNumbers = function(){
    return this.sort(
        function(a,b){
            return a - b
        }
    );
}


	
	alert("Tu array ordenado es: "+array.sortNumbers());
}