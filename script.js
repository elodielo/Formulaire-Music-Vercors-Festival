let pass1jourDate = document.getElementById("pass1jourDate");
let pass2joursDate = document.getElementById("pass2joursDate");
let tarifReduitCase = document.getElementById("tarifReduit");
let tarifNormal = document.getElementById("tarifNormal");
let tarifReduitdiv = document.getElementById("tarifReduitdiv");
let boutonTarifReduit = document.getElementById("tarifReduit");
let bouton1jour = document.getElementById("pass1jour");
let bouton2jours = document.getElementById("pass2jours");
let bouton3jours = document.getElementById("pass3jours");
let bouton1jourReduit = document.getElementById("pass1jourreduit");
let bouton2joursReduit = document.getElementById("pass2joursreduit");
let bouton3joursReduit = document.getElementById("pass3joursreduit");
let choixJour1 = document.getElementById("choixJour1");
let choixJour2 = document.getElementById("choixJour2");
let choixJour3 = document.getElementById("choixJour3");
let choixJour12 = document.getElementById("choixJour12");
let choixJour23 = document.getElementById("choixJour23");

let reserv = document.getElementById("reservation");
let option = document.getElementById("options");
let coordonnee = document.getElementById("coordonnees");

const button = document.querySelectorAll(".bouton");
// mettre la reservation en premier
Reservation();
//Changer form1 à form2
button[0].addEventListener("click", (event) => {
  if (
    bouton1jour.checked ||
    bouton1jourReduit.checked ||
    bouton2jours.checked ||
    bouton2joursReduit.checked ||
    bouton3jours.checked ||
    bouton3joursReduit.checked
  ) {
    if (
      choixJour1.checked ||
      choixJour12.checked ||
      choixJour2.checked ||
      choixJour23.checked ||
      choixJour3.checked
    ) {
      options();
    } else {
      alert("veuillez compléter un des champs");
    }
  } else {
    alert("veuillez compléter un des champs");
  }
});
//Changer form2 à form3
button[1].addEventListener("click", (event) => {
  coordonnees();
});

function Reservation() {
  reserv.style.display = "inline-block";
  option.style.display = "none";
  coordonnee.style.display = "none";
}

function options() {
  reserv.style.display = "none";
  option.style.display = "inline-block";
  coordonnee.style.display = "none";
}

function coordonnees() {
  reserv.style.display = "none";
  option.style.display = "none";
  coordonnee.style.display = "inline-block";
}

document.getElementById("NombrePlaces").addEventListener("change", function () {
  let nombre = parseInt(this.value);
  if (nombre < 1) this.value = 1;
  if (nombre > 50) this.value = 50;
});

document
  .getElementById("NombreLugesEte")
  .addEventListener("change", function () {
    let luge = parseInt(this.value);
    if (luge < 0) this.value = 0;
    if (luge > 50) this.value = 50;
  });
document
  .getElementById("nombreCasquesEnfants")
  .addEventListener("change", function () {
    let nombre = parseInt(this.value);
    if (nombre < 0) this.value = 0;
    if (nombre > 50) this.value = 50;
  });
boutonTarifReduit.addEventListener("click", (event) => {
  if (boutonTarifReduit.checked) {
    tarifReduitdiv.classList.replace("invisible", "visible");
    tarifNormal.classList.replace("visible", "invisible");
    pass2joursDate.classList.replace("visible", "invisible");
    pass1jourDate.classList.replace("visible", "invisible");
    bouton1jour.checked = false;
    bouton2jours.checked = false;
    bouton3jours.checked = false;
    choixJour1.checked = false;
    choixJour2.checked = false;
    choixJour3.checked = false;
    choixJour12.checked = false;
    choixJour23.checked = false;
  } else {
    tarifReduitdiv.classList.replace("visible", "invisible");
    tarifNormal.classList.replace("invisible", "visible");
    pass2joursDate.classList.replace("visible", "invisible");
    pass1jourDate.classList.replace("visible", "invisible");
    bouton1jourReduit.checked = false;
    bouton2joursReduit.checked = false;
    bouton3joursReduit.checked = false;
    choixJour1.checked = false;
    choixJour2.checked = false;
    choixJour3.checked = false;
    choixJour12.checked = false;
    choixJour23.checked = false;
  }
});

boutonTarifReduit.addEventListener("click", () =>
  tarifNormal.classList.add("invisible")
);

bouton1jour.addEventListener("click", (event) => {
  if (bouton1jour.checked) {
    pass1jourDate.classList.replace("invisible", "visible");
  } else {
    pass1jourDate.classList.replace("visible", "invisible");
  }
});

bouton1jourReduit.addEventListener("click", (event) => {
  if (bouton1jourReduit.checked) {
    pass1jourDate.classList.replace("invisible", "visible");
  } else {
    pass1jourDate.classList.replace("visible", "invisible");
  }
});

bouton2jours.addEventListener("click", (event) => {
  if (bouton2jours.checked) {
    pass2joursDate.classList.replace("invisible", "visible");
  } else {
    pass2joursDate.classList.replace("visible", "invisible");
  }
});

bouton2joursReduit.addEventListener("click", (event) => {
  if (bouton2joursReduit.checked) {
    pass2joursDate.classList.replace("invisible", "visible");
  } else {
    pass2joursDate.classList.replace("visible", "invisible");
  }
});

// Si pass1jourCoché :
bouton1jour.addEventListener("click", (event) => {
  if (bouton1jour.checked) {
    bouton2jours.checked = false;
    bouton3jours.checked = false;
    pass2joursDate.classList.replace("visible", "invisible");
  }
});

bouton1jourReduit.addEventListener("click", (event) => {
  if (bouton1jourReduit.checked) {
    bouton2joursReduit.checked = false;
    bouton3joursReduit.checked = false;
    pass2joursDate.classList.replace("visible", "invisible");
  }
});

bouton2jours.addEventListener("click", (event) => {
  if (bouton2jours.checked) {
    bouton1jour.checked = false;
    bouton3jours.checked = false;
    pass1jourDate.classList.replace("visible", "invisible");
  }
});

bouton2joursReduit.addEventListener("click", (event) => {
  if (bouton2joursReduit.checked) {
    bouton1jourReduit.checked = false;
    bouton3joursReduit.checked = false;
    pass1jourDate.classList.replace("visible", "invisible");
  }
});

bouton3jours.addEventListener("click", (event) => {
  if (bouton3jours.checked) {
    bouton1jour.checked = false;
    bouton2jours.checked = false;
    pass1jourDate.classList.replace("visible", "invisible");
    pass2joursDate.classList.replace("visible", "invisible");
  }
});

bouton3joursReduit.addEventListener("click", (event) => {
  if (bouton3joursReduit.checked) {
    bouton1jourReduit.checked = false;
    bouton2joursReduit.checked = false;
    pass2joursDate.classList.replace("visible", "invisible");
    pass1jourDate.classList.replace("visible", "invisible");
  }
});

let btnEnfantOui = document.getElementById("enfantsOui");
let btnEnfantNon = document.getElementById("enfantsNon");
let sectionCasque = document.getElementById("divCasquesEnfants");

btnEnfantOui.addEventListener("change", (event) => {
  if (btnEnfantOui.checked) {
    sectionCasque.classList.replace("invisible", "visible");
  } else {
    sectionCasque.classList.replace("visible", "invisible");
  }
});

// Pour les tentes :
let btntenteNuit1 = document.getElementById("tenteNuit1");
let btntenteNuit2 = document.getElementById("tenteNuit2");
let btntenteNuit3 = document.getElementById("tenteNuit3");
let btntente3Nuits = document.getElementById("tente3Nuits");

btntente3Nuits.addEventListener("click", (event) => {
  if (btntente3Nuits.checked) {
    btntenteNuit1.disabled = true;
    btntenteNuit2.disabled = true;
    btntenteNuit3.disabled = true;
    btntenteNuit1.checked = false;
    btntenteNuit2.checked = false;
    btntenteNuit3.checked = false;
  }
  if (btntente3Nuits.checked == false) {
    btntenteNuit1.disabled = false;
    btntenteNuit2.disabled = false;
    btntenteNuit3.disabled = false;
  }
});

//Pour les vans :
let btnvanNuit1 = document.getElementById("vanNuit1");
let btnvanNuit2 = document.getElementById("vanNuit2");
let btnvanNuit3 = document.getElementById("vanNuit3");
let btnvan3Nuits = document.getElementById("van3Nuits");

btnvan3Nuits.addEventListener("click", (event) => {
  if (btnvan3Nuits.checked) {
    btnvanNuit1.disabled = true;
    btnvanNuit2.disabled = true;
    btnvanNuit3.disabled = true;
    btnvanNuit1.checked = false;
    btnvanNuit2.checked = false;
    btnvanNuit3.checked = false;
  }
  if (btnvan3Nuits.checked == false) {
    btnvanNuit1.disabled = false;
    btnvanNuit2.disabled = false;
    btnvanNuit3.disabled = false;
  }
});

choixJour1.addEventListener("click", (event) => {
  if (choixJour1.checked) {
    choixJour2.checked = false;
    choixJour3.checked = false;
  }
});

choixJour2.addEventListener("click", (event) => {
  if (choixJour2.checked) {
    choixJour1.checked = false;
    choixJour3.checked = false;
  }
});

choixJour3.addEventListener("click", (event) => {
  if (choixJour3.checked) {
    choixJour1.checked = false;
    choixJour2.checked = false;
  }
});

choixJour12.addEventListener("click", (event) => {
  if (choixJour12.checked) {
    choixJour23.checked = false;
  }
});

choixJour23.addEventListener("click", (event) => {
  if (choixJour23.checked) {
    choixJour12.checked = false;
  }
});

// function verifierFormulaire{
//   let nom = document.getElementById('nom').value;
//   let prenom = document.getElementById('prenom').value;
//   let email = document.getElementById('email').value;
//   let telephone = document.getElementById('telephone').value;
//   let adresse = document.getElementById('adressePostale').value;

// }
