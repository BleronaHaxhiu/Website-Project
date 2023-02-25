const LoginForm = document.getElementById("LoginForm")
const RegisterForm = document.getElementById("RegisterForm")
const indicator = document.getElementById("indicator")

function register() {
    RegisterForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    indicator.style.transform = "translateX(100px)";
}

function login() {
    RegisterForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";
    indicator.style.transform = "translateX(0px)";
}   

const error = document.querySelector(".error")
function validate() {
    let validEmail = !(email.value.trim().length === 0 || !email.value.includes("@")  || !email.value.includes("."))
    let validPass = password.value.trim().length >= 6;
    if (!validEmail && !validPass) {
        error.innerText = "Please provide an email and a password!";
        error.style.display = "block"
    } else if (!validEmail) {
        error.innerText = "Please provide a valid email!";
        error.style.display = "block"
    } else if (!validPass) {
        error.innerText = "Please provide a password with 6 or more characters!";
        error.style.display = "block"
    } else {
        error.style.display = "none"
        return true;
    }
}
submit.addEventListener("click", validate)



const error2 = document.querySelector(".error2")
function validate2() {
    let validUsername = username.value.trim().length > 0
    let validEmail = !(email2.value.trim().length === 0 || !email2.value.includes("@")  || !email2.value.includes("."))
    let validPass = password2.value.trim().length >= 6;
    if (!validUsername) {
        error2.innerText = "Please provide a valid username!";
        error2.style.display = "block"
    } else if (!validEmail) {
        error2.innerText = "Please provide a valid email!";
        error2.style.display = "block"
    } else if (!validPass) {
        error2.innerText = "Please provide a password with 6 or more characters!";
        error2.style.display = "block"
    } else {
        error2.style.display = "none"
        return true;
    }
}

submit2.addEventListener("click", validate2)