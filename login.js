let login = document.getElementById("login-button")
let signup = document.getElementById("signup-button")
let loginForm = document.querySelector(".login-form")
let signUpForm = document.querySelector(".signup-form")


login.onclick = function () {
    loginForm.classList.toggle("show")
    signUpForm.classList.remove("show")
}

signup.onclick = function () {
    signUpForm.classList.toggle("show")
    loginForm.classList.remove("show")
}

