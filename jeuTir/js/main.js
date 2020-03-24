
var cibleNoire = document.getElementById("cibleNoire");
var cibleRouge = document.getElementById("cibleRouge");
var cibleVerte = document.getElementById("cibleVerte");
var cibleBleue = document.getElementById("cibleBleue");
var cibleOr = document.getElementById("cibleOr");
var start = document.getElementById("start");
var clic = false;


var timeoutSpawn;
var timeoutReset;
var totalPoints = 0;

start.onclick = function () {
    spawnCible();
}

/**
 * @description Processus quand le joueur clic sur une cible noire
 *  - On ajoute un point
 *  - Destruction de l'ancienne cible
 *  - Créatio d'une nouvelle
 */
cibleNoire.onclick = function () {
    totalPoints+=5;
    disparitionNoire();
    spawnCible();
    console.log(totalPoints);
    $("#compteurDePoints").html(totalPoints);
}

/**
 * @description Processus de création d'une cible noire
 *  - Suppression des anciens timers
 *  - Nouveau delais random
 *  - Creation d'une cible
 *  - Process en cas de fail sur le clic dans le délais imparti
 */
function spawnCible() {
    // Important de détruire les timeouts, car sinon ils restent et se multiplient
    clearTimeout(timeoutSpawn);
    clearTimeout(timeoutReset);

    delay = resetRandom(2000);

    // Deuxième timeout : déclenché uniquement si la cible n'a pas été cliquée dans le délai imparti ==> 5000
    timeoutSpawn = setTimeout(apparitionRandomNoire, delay);
    timeoutReset = setTimeout(notClickedProcess, delay + 5000);
}

/**
 * @description Processus quand le joueur ne clique pas sur une cible
 *  - Destruction de l'ancienne cible
 *  - Retour au process de création d'une nouelle cible
 */
function notClickedProcess() {
    disparitionNoire();
    spawnCible();
}

/**
 * @description Je ne vais pas texpliquer ta propre fonction ;)
 */
function apparitionRandomNoire() {
    cibleNoire.style.display = "flex";
    cibleNoire.style.left = Math.floor(Math.random() * 590) + "px";
    cibleNoire.style.top = Math.floor(Math.random() * 590) + "px";
}

/**
 * @description Celle là non plus
 */
function disparitionNoire() {
    cibleNoire.style.display = "none";
}

/**
 * @description celle là te génère un nombre rando dans l'intervalle donnée
 * @param {number} [maxDelay=2000] Paramètre optionnel. Si tu ne mets rien, il utilise la valeur par défaut ==> 2000
 * @returns retourne un nombre random
 */
function resetRandom(maxDelay = 2000) {
    return Math.random() * maxDelay;
}

cibleVerte.style.display = "flex";
cibleVerte.style.left = Math.floor(Math.random() * 595) + "px";
cibleVerte.style.top = Math.floor(Math.random() * 595) + "px";

cibleBleue.style.display = "flex";
cibleBleue.style.left = Math.floor(Math.random() * 600) + "px";
cibleBleue.style.top = Math.floor(Math.random() * 600) + "px";

cibleOr.style.display = "flex";
cibleOr.style.left = Math.floor(Math.random() * 610) + "px";
cibleOr.style.top = Math.floor(Math.random() * 610) + "px";

