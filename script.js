let pass1jourDate = document.getElementById('pass1jourDate');
let pass2joursDate = document.getElementById('pass2joursDate');
let tarifReduitCase = document.getElementById("tarifReduit");
let tarifNormal = document.getElementById("tarifNormal");

console.log('coucou');


if (tarifReduitCase.checked) {
    tarifNormal.style.backgroundColor = "green";
}

let reserv = document.getElementById('reservation');
let option = document.getElementById('options');
let coordonnee = document.getElementById('coordonnees');

const button = document.querySelectorAll(".bouton");
// mettre la reservation en premier
Reservation();
//Changer form1 à form2
button[0].addEventListener("click", (event) => {
    options();

});
//Changer form2 à form3
button[1].addEventListener("click", (event) => {
    coordonnees();
});

function Reservation() {
    reserv.style.display = 'inline-block'
    option.style.display = 'none';
    coordonnee.style.display = 'none';
};


function options() {
    reserv.style.display = 'none';
    option.style.display = 'inline-block';
    coordonnee.style.display = 'none';
}

function coordonnees() {
    reserv.style.display = 'none';
    option.style.display = 'none';
    coordonnee.style.display = 'inline-block';
};

document.getElementById("NombrePlaces").addEventListener("change", function () {
    let nombre = parseInt(this.value);
    if (nombre < 1) this.value = 1;
    if (nombre > 50) this.value = 50;
});

document.getElementById("NombreLugesEte").addEventListener("change", function () {
    let luge = parseInt(this.value);
    if (luge < 0) this.value = 0;
    if (luge > 50) this.value = 50;
});
document.getElementById("nombreCasquesEnfants").addEventListener("change", function () {
    let nombre = parseInt(this.value);
    if (nombre < 0) this.value = 0;
    if (nombre > 50) this.value = 50;
});