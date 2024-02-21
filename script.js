let pass1jourDate = document.getElementById('pass1jourDate');
let pass2joursDate = document.getElementById('pass2joursDate');
let tarifReduitCase = document.getElementById("tarifReduit");
let tarifNormal = document.getElementById("tarifNormal");

console.log('coucou');


if(tarifReduitCase.checked){
    tarifNormal.style.backgroundColor = "green";
}