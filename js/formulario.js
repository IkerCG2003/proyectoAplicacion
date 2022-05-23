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