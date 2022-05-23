/* SELECCION ALUMNO - PROFESOR - ADMINISTRADOR */
function muestraOculta(e) {
    var origen = e.target.id;
    origen = origen.split("_");
    console.log(origen[1]);

    var cont = document.getElementById("cont_" + origen[1]);
    for (let i = 1; i < 4 ; i++){
        document.getElementById("cont_" + i).style.display = "none";
    }

    cont.style.display = "block";

}

window.onload = function() {
    document.getElementById("user_1").onclick = muestraOculta;
    document.getElementById("user_2").onclick = muestraOculta;
    document.getElementById("user_3").onclick = muestraOculta;
}