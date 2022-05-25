/* CAMBIAR BASES DE DATOS */
function muestraOculta(e) {
    var origen = e.target.id;
    origen = origen.split("_");
    console.log(origen[1]);

    var cont = document.getElementById("section_" + origen[1]);
    for (let i = 1; i < 3 ; i++){
        document.getElementById("section_" + i).style.display = "none";
    }

    cont.style.display = "block";

}

window.onload = function() {
    document.getElementById("tabla_1").onclick = muestraOculta;
    document.getElementById("tabla_2").onclick = muestraOculta;
}
 