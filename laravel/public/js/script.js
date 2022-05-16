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

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

document.getElementById('myText').isContentEditable;

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    // toggle the icon
    this.classList.toggle("bi-eye");
});

function myFunction() {
  var txt;
  if (confirm("Wollen Sie den Termin wirklich absagen?")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}