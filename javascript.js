let hora = parseInt(prompt("Hora:"));
let minuto = parseInt(prompt("Minuto:"));

let hora_espejo, minuto_espejo;

if (minuto === 0) {
    hora_espejo = 12 - hora;
    minuto_espejo = 0;
} else {
    minuto_espejo = 60 - minuto;
    hora_espejo = 11 - hora;
}

if (hora_espejo < 0) {
    hora_espejo += 12;
}

alert(hora_espejo + ":" + minuto_espejo);