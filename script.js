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
