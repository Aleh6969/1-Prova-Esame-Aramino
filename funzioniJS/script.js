specialChars =/[`!@#$%^&*()_\-+=\[\]{};':"\\|,.<>\/?~ ]/;
function emailValidation(input){ //sembra funzionare
    console.log("EmailValidation");
    let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(input.value!=""){
        if (input.value.match(validRegex)) {
            console.log("Email valida");
            return true;
        } else {
            console.log("Email non valida");
            alert("Inserire una mail valida");
            return false;
        }
    }
}
function toggleRegLog(){//sembra funzionare
    //console.log("toggleRegLog function called");
    let divBase = document.getElementById("divBase");
    let divRegLog = document.getElementById("divRegLog");
    //console.log("divBase:", divBase);
    //console.log("divRegLog:", divRegLog);
    if(divBase){
        //console.log("Removing divBase");
        divBase.remove();
        showRegLog();
        //console.log(showRegLog());
    } else {
        //console.log("Removing divRegLog");
        divRegLog.remove();
        showBase();
    }
}
function showBase(){//sembra funzionare
    // Crea un nuovo elemento div
let newDiv = document.createElement("div");

// Aggiungi le classi al nuovo elemento div
newDiv.className = "container";
newDiv.id = "divBase";

// Aggiungi del testo al nuovo elemento div
let newText = document.createElement("h1")
newText.innerHTML="Benvenuti nel Consorzio Stabilimenti Balneari!";
newDiv.appendChild(newText)

// Aggiungi paragrafi al nuovo elemento div
let paragraphs = [
    "Qui potrete trovare tutte le informazioni riguardanti i nostri stabilimenti balneari, i servizi offerti, le tariffe e come contattarci.",
    "Esplora le varie sezioni attraverso la barra di navigazione sopra.",
    "ADD SHIT HERE/********************/"
];

paragraphs.forEach(function(text) {
    let paragraph = document.createElement("p");
    paragraph.textContent = text;
    newDiv.appendChild(paragraph);
});
// Trova il body del documento
let body = document.body;

// Aggiungi il nuovo elemento div al body
body.appendChild(newDiv);

}
function showRegLog(){//sembra funzionare
// Creazione dell'elemento div container
let containerDiv = document.createElement("div");
containerDiv.className = "container2";
containerDiv.id = "divRegLog";

// Aggiunta del titolo "Login" e del form di login
let loginTitle = document.createElement("h2");
loginTitle.textContent = "Login";
containerDiv.appendChild(loginTitle);

let loginForm = document.createElement("form");
loginForm.action = "../funzioniPHP/Login.php";
loginForm.method = "POST";

let loginUsernameLabel = document.createElement("label");
loginUsernameLabel.textContent = "Username:";
loginForm.appendChild(loginUsernameLabel);
loginForm.appendChild(document.createElement("br"));

let loginUsernameInput = document.createElement("input");
loginUsernameInput.type = "text";
loginUsernameInput.id = "username";
loginUsernameInput.name = "username";
loginForm.appendChild(loginUsernameInput);
loginForm.appendChild(document.createElement("br"));

let loginPasswordLabel = document.createElement("label");
loginPasswordLabel.textContent = "Password:";
loginForm.appendChild(loginPasswordLabel);
loginForm.appendChild(document.createElement("br"));

let loginPasswordInput = document.createElement("input");
loginPasswordInput.type = "password";
loginPasswordInput.id = "password";
loginPasswordInput.name = "password";
loginForm.appendChild(loginPasswordInput);
loginForm.appendChild(document.createElement("br"));
loginForm.appendChild(document.createElement("br"));

let loginSubmitInput = document.createElement("input");
loginSubmitInput.type = "submit";
loginSubmitInput.value = "Login";
loginForm.appendChild(loginSubmitInput);

containerDiv.appendChild(loginForm);

// Aggiunta del titolo "Registrazione" e del form di registrazione
let registrationTitle = document.createElement("h2");
registrationTitle.textContent = "Registrazione";
containerDiv.appendChild(registrationTitle);

let registrationForm = document.createElement("form");
registrationForm.name = "form1";
registrationForm.action = "../FunzioniPHP/Registration.php";
registrationForm.method = "POST";

let newUsernameLabel = document.createElement("label");
newUsernameLabel.textContent = "Username:";
registrationForm.appendChild(newUsernameLabel);
registrationForm.appendChild(document.createElement("br"));

let newUsernameInput = document.createElement("input");
newUsernameInput.type = "text";
newUsernameInput.id = "new_username";
newUsernameInput.name = "new_username";
newUsernameInput.required = true;
registrationForm.appendChild(newUsernameInput);
registrationForm.appendChild(document.createElement("br"));

let newEmailLabel = document.createElement("label");
newEmailLabel.textContent = "E-mail";
registrationForm.appendChild(newEmailLabel);
registrationForm.appendChild(document.createElement("br"));

let newEmailInput = document.createElement("input");
newEmailInput.type = "email";
newEmailInput.id = "new_email";
newEmailInput.name = "new_email";
newEmailInput.setAttribute("onchange", "emailValidation(this)");
newEmailInput.required = true;
registrationForm.appendChild(newEmailInput);
registrationForm.appendChild(document.createElement("br"));

let newPasswordLabel = document.createElement("label");
newPasswordLabel.textContent = "Password:";
registrationForm.appendChild(newPasswordLabel);
registrationForm.appendChild(document.createElement("br"));

let newPasswordInput = document.createElement("input");
newPasswordInput.type = "password";
newPasswordInput.id = "new_password";
newPasswordInput.name = "new_password";
newPasswordInput.required = true;
registrationForm.appendChild(newPasswordInput);
registrationForm.appendChild(document.createElement("br"));
registrationForm.appendChild(document.createElement("br"));

let registrationSubmitInput = document.createElement("input");
registrationSubmitInput.type = "submit";
registrationSubmitInput.value = "Registrati";
registrationForm.appendChild(registrationSubmitInput);

containerDiv.appendChild(registrationForm);

// Aggiunta del div container alla pagina HTML
document.body.appendChild(containerDiv);
return "fatto";
}
function updateProfile() {//WIP
    // Ottenere i valori dei campi di input
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;
            if (response === "success") {
                alert("Profilo utente aggiornato con successo!");
            } else {
                alert("Si è verificato un errore durante l'aggiornamento del profilo utente.");
            }
        }
    };
    xhr.open("POST", "../funzioniPHP/updateProfile.php", true);
    var username = encodeURIComponent(document.getElementById("username").value);
    var email = encodeURIComponent(document.getElementById("email").value);
    var password = encodeURIComponent(document.getElementById("password").value);
    var data = "username=" + username + "&email=" + email + "&password=" + password;
    xhr.send(data);
}
function getSessionData(callback) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            sessionData = JSON.parse(xhr.responseText);
            callback(sessionData); // Chiamata al callback con i dati della sessione
        }
    };
    xhr.open("GET", "../funzioniPHP/getSessionData.php", true);
    xhr.send();
}
function checkLoginStatus() {
    console.log("check login")
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;
            //console.log(response);
            if (response === "ok") {
                getSessionData(function(sessionData) {
                    document.getElementById("UserProfile").innerHTML = sessionData.username;
                    document.getElementById("UserProfile").style.visibility = 'visible';
                });
                logoutButton();
            }
            else{
                console.log("L'utente non è loggato.");
            }
        }
    };
    xhr.open("GET", "../funzioniPHP/check_login.php", true);
    xhr.send();
}
function logoutButton(){ //da finire
    let button = document.getElementById("LogRegOut");
    button.innerHTML = "Logout";
    button.onclick = Logout;
}
function Logout(){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            window.location.href = "../PagineWeb/index.php";
            localStorage.clear();
            document.getElementById("LogRegOut").innerHTML="Login/Registrati";
            document.getElementById("UserProfile").style.visibility="hidden";
        }
    };
    xhr.open("POST", "../funzioniPHP/logout.php", true);
    xhr.send();
}
function CCValidate(CCNum, ExpDate, CVC, HolderName){
    isValid('4916108926268679'); // returns true
    isExpirationDateValid('02', '2027'); // returns true
    isSecurityCodeValid('4556603578296676', '250'); // returns true
    getCreditCardNameByNumber('4539578763621486'); // returns 'Visa'
    if(specialChars.test(HolderName)){
        alert("inserire un nome valido");
    }
}
/*Useless shit
function loadProfile(){
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200){
            //DO Something
            profileData = JSON.parse(xhr.responseText);
            document.getElementById("PFP.username").value = profileData.username;
            document.getElementById("PFP.email").value = profileData.email;
        }
    };
    xhr.open("POST", "../funzioniPHP/loadProfile.php", true);
    xhr.send();
}*/