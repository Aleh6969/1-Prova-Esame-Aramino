specialChars =/[`!@#$%^&*()_\-+=\[\]{};':"\\|,.<>\/?~ ]/;
/*import { 
    isValid, 
    isExpirationDateValid, 
    isSecurityCodeValid, 
    getCreditCardNameByNumber 
} from 'creditcard.js';*/
function emailValidation(input){
    console.log("EmailValidation")
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(input.value!=""){
        if (input.value.match(validRegex)) {
            console.log("Email valida")
            return true;
        } else {
            console.log("Email non valida")
            alert("Inserire una mail valida")
            return false;
        }
    }
}
function toggleRegLog(){
    console.log("toggleRegLog function called");
    let divBase = document.getElementById("divBase");
    let divRegLog = document.getElementById("divRegLog");
    console.log("divBase:", divBase);
    console.log("divRegLog:", divRegLog);
    if(divBase){
        console.log("Removing divBase");
        divBase.remove();
        console.log(showRegLog());
    } else {
        console.log("Removing divRegLog");
        divRegLog.remove();
        showBase();
    }
}

function showBase(){
    // Crea un nuovo elemento div
var newDiv = document.createElement("div");

// Aggiungi le classi al nuovo elemento div
newDiv.className = "container";
newDiv.id = "divBase";

// Aggiungi del testo al nuovo elemento div
var newText = document.createElement("h1")
newText.innerHTML="Benvenuti nel Consorzio Stabilimenti Balneari!";
newDiv.appendChild(newText);

// Aggiungi paragrafi al nuovo elemento div
var paragraphs = [
    "Qui potrete trovare tutte le informazioni riguardanti i nostri stabilimenti balneari, i servizi offerti, le tariffe e come contattarci.",
    "Esplora le varie sezioni attraverso la barra di navigazione sopra.",
    "ADD SHIT HERE"
];

paragraphs.forEach(function(text) {
    var paragraph = document.createElement("p");
    paragraph.appendChild(document.createTextNode(text));
    newDiv.appendChild(paragraph);
});

// Trova il body del documento
var body = document.body;

// Aggiungi il nuovo elemento div al body
body.appendChild(newDiv);

}
function showRegLog(){
// Creazione dell'elemento div container
var containerDiv = document.createElement("div");
containerDiv.className = "container2";
containerDiv.id = "divRegLog";

// Aggiunta del titolo "Login" e del form di login
var loginTitle = document.createElement("h2");
loginTitle.textContent = "Login";
containerDiv.appendChild(loginTitle);

var loginForm = document.createElement("form");
loginForm.action = "Login.php";
loginForm.method = "POST";

var loginUsernameLabel = document.createElement("label");
loginUsernameLabel.textContent = "Username:";
loginForm.appendChild(loginUsernameLabel);
loginForm.appendChild(document.createElement("br"));

var loginUsernameInput = document.createElement("input");
loginUsernameInput.type = "text";
loginUsernameInput.id = "username";
loginUsernameInput.name = "username";
loginForm.appendChild(loginUsernameInput);
loginForm.appendChild(document.createElement("br"));

var loginPasswordLabel = document.createElement("label");
loginPasswordLabel.textContent = "Password:";
loginForm.appendChild(loginPasswordLabel);
loginForm.appendChild(document.createElement("br"));

var loginPasswordInput = document.createElement("input");
loginPasswordInput.type = "password";
loginPasswordInput.id = "password";
loginPasswordInput.name = "password";
loginForm.appendChild(loginPasswordInput);
loginForm.appendChild(document.createElement("br"));
loginForm.appendChild(document.createElement("br"));

var loginSubmitInput = document.createElement("input");
loginSubmitInput.type = "submit";
loginSubmitInput.value = "Login";
loginForm.appendChild(loginSubmitInput);

containerDiv.appendChild(loginForm);

// Aggiunta del titolo "Registrazione" e del form di registrazione
var registrationTitle = document.createElement("h2");
registrationTitle.textContent = "Registrazione";
containerDiv.appendChild(registrationTitle);

var registrationForm = document.createElement("form");
registrationForm.name = "form1";
registrationForm.action = "Registration.php";
registrationForm.method = "POST";

var newUsernameLabel = document.createElement("label");
newUsernameLabel.textContent = "Username:";
registrationForm.appendChild(newUsernameLabel);
registrationForm.appendChild(document.createElement("br"));

var newUsernameInput = document.createElement("input");
newUsernameInput.type = "text";
newUsernameInput.id = "new_username";
newUsernameInput.name = "new_username";
newUsernameInput.required = true;
registrationForm.appendChild(newUsernameInput);
registrationForm.appendChild(document.createElement("br"));

var newEmailLabel = document.createElement("label");
newEmailLabel.textContent = "E-mail";
registrationForm.appendChild(newEmailLabel);
registrationForm.appendChild(document.createElement("br"));

var newEmailInput = document.createElement("input");
newEmailInput.type = "email";
newEmailInput.id = "new_email";
newEmailInput.name = "new_email";
newEmailInput.setAttribute("onchange", "emailValidation(this)");
newEmailInput.required = true;
registrationForm.appendChild(newEmailInput);
registrationForm.appendChild(document.createElement("br"));

var newPasswordLabel = document.createElement("label");
newPasswordLabel.textContent = "Password:";
registrationForm.appendChild(newPasswordLabel);
registrationForm.appendChild(document.createElement("br"));

var newPasswordInput = document.createElement("input");
newPasswordInput.type = "password";
newPasswordInput.id = "new_password";
newPasswordInput.name = "new_password";
newPasswordInput.required = true;
registrationForm.appendChild(newPasswordInput);
registrationForm.appendChild(document.createElement("br"));
registrationForm.appendChild(document.createElement("br"));

var registrationSubmitInput = document.createElement("input");
registrationSubmitInput.type = "submit";
registrationSubmitInput.value = "Registrati";
registrationForm.appendChild(registrationSubmitInput);

containerDiv.appendChild(registrationForm);

// Aggiunta del div container alla pagina HTML
document.body.appendChild(containerDiv);
return "fatto";
}
/*function CCValidate(CCNum, ExpDate, CVC, HolderName){
    isValid('4916108926268679'); // returns true
    isExpirationDateValid('02', '2027'); // returns true
    isSecurityCodeValid('4556603578296676', '250'); // returns true
    getCreditCardNameByNumber('4539578763621486'); // returns 'Visa'
    if(specialChars.test(HolderName)){
        alert("inserire un nome valido");
    }
}*/