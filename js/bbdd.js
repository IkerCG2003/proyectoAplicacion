/* CAMBIAR BASES DE DATOS */
function cambioBBDD(q) {
    var next = q.target.id;
    next = next.split("_");
    console.log(next[1]);

    var bbdd = document.getElementById("base_" + next[1]);
    for (let a = 1; a < 3 ; a++) {
        document.getElementById("base_" + a).style.display = "none";
    }

    bbdd.style.display = "block";
}

window.onload = function() {
    document.getElementById("tabla_1").onclick = cambioBBDD;
    document.getElementById("tabla_2").onclick = cambioBBDD;
}


 