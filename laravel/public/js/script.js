const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    // toggle the icon
    this.classList.toggle("bi-eye");
});

const togglePasswordwiederholen = document.querySelector("#togglePasswordwiederholen");
const passwordwiederholen = document.querySelector("#passwordwiederholen");

togglePasswordwiederholen.addEventListener("click", function () {
    // toggle the type attribute
    const type = passwordwiederholen.getAttribute("type") === "password" ? "text" : "password";
    passwordwiederholen.setAttribute("type", type);

    // toggle the icon
    this.classList.toggle("bi-eye");
});


function validatePassword(){
    passwordwiederholen.setCustomValidity( password.value != 
    passwordwiederholen.value ? "Die Passwörter stimmen nicht überein" : '');
}

password.onchange = validatePassword;
passwordwiederholen.onkeyup = validatePassword;