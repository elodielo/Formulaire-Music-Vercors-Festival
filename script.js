let pass1jourDate = document.getElementById("pass1jourDate");
let pass2joursDate = document.getElementById("pass2joursDate");
let tarifReduitCase = document.getElementById("tarifReduit");
let tarifNormal = document.getElementById("tarifNormal");
let tarifReduitdiv = document.getElementById("tarifReduitdiv");
let boutonTarifReduit = document.getElementById("tarifReduit");
let bouton1jour = document.getElementById("pass1jour");
let bouton2jours = document.getElementById("pass2jours");
let bouton1jourReduit = document.getElementById("pass1jourreduit")
let bouton2joursReduits = document.getElementById("pass2joursreduit")


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
boutonTarifReduit.addEventListener("click", (event) => {
  if(boutonTarifReduit.checked){
  tarifReduitdiv.classList.replace("invisible", "visible")
  tarifNormal.classList.replace("visible", "invisible")}
else{
  tarifReduitdiv.classList.replace("visible", "invisible")
  tarifNormal.classList.replace("invisible", "visible")
}}
);

boutonTarifReduit.addEventListener("click", () =>
  tarifNormal.classList.add("invisible")
);


bouton1jour.addEventListener("click", (event) => {
  if(bouton1jour.checked){
  pass1jourDate.classList.replace("invisible", "visible");}
  else{pass1jourDate.classList.replace("visible", "invisible");}
});

bouton1jourReduit.addEventListener("click", (event) => {
  if(bouton1jourReduit.checked){
  pass1jourDate.classList.replace("invisible", "visible");}
  else{pass1jourDate.classList.replace("visible", "invisible");}
});

bouton2jours.addEventListener("click", (event) => {
  if(bouton2jours.checked){
  pass2joursDate.classList.replace("invisible", "visible");}
  else{pass2joursDate.classList.replace("visible","invisible")}
});

bouton2joursReduits.addEventListener("click", (event) => {
    if(bouton2joursReduits.checked){
    console.log('coucou');
    pass2joursDate.classList.replace("invisible", "visible")}
  else{pass2joursDate.classList.replace("visible", "invisible")}
});


// function verifierFormulaire{
//   let nom = document.getElementById('nom').value;
//   let prenom = document.getElementById('prenom').value;
//   let email = document.getElementById('email').value;
//   let telephone = document.getElementById('telephone').value;
//   let adresse = document.getElementById('adressePostale').value;

// }
