specialChars =/[`!@#$%^&*()_\-+=\[\]{};':"\\|,.<>\/?~ ]/;
import { 
    isValid, 
    isExpirationDateValid, 
    isSecurityCodeValid, 
    getCreditCardNameByNumber 
} from 'creditcard.js';
function emailValidation(input){
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (input.value.match(validRegex)) {
        document.form1.text1.focus();
        return true;
    } else {
        document.form1.text1.focus();
        return false;
    }
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
