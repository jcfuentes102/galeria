
window.onload=manejador;
function manejador(){
var fecha = new Date();
document.getElementById("fechainput").value = new Date().toJSON().slice(0,10);
document.getElementById("forget").addEventListener("click",visivilityOn);
}

function visivilityOn(){
    document.getElementById("forgetform").setAttribute('style', "visibility:visible;");
}