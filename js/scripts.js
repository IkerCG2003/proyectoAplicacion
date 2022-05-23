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

/* CAMBIAR FORMULARIOS */
function cambioFormulario(f) {
    var cambio = f.target.id;
    cambio = cambio.split("_");
    console.log(cambio[1]);

    var form = document.getElementById("contenidos_" + cambio[1]);
    for (let j = 1; j < 3; j++) {
        document.getElementById("contenidos_" + j).style.display = "none";
    }

    form.style.display = "block";
}

window.onload = function() {
    document.getElementById("enlace_1").onclick = cambioFormulario;
    document.getElementById("enlace_2").onclick = cambioFormulario;
}

/* CAMBIAR BASES DE DATOS */
// function cambioBBDD(q) {
//     var next = q.target.id;
//     next = next.split("_");
//     console.log(next[1]);

//     var bbdd = document.getElementById("base_" + next[1]);
//     for (let a = 1; a < 3 ; a++) {
//         document.getElementById("base_" + a).style.display = "none";
//     }

//     bbdd.style.display = "block";
// }

// window.onload = function() {
//     document.getElementById("tabla_1").onclick = cambioBBDD;
//     document.getElementById("tabla_2").onclick = cambioBBDD;
// }

/* VALIDACIÓN FORMULARIO */

 