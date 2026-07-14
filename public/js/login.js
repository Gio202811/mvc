document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("loginForm");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const togglePassword = document.getElementById("togglePassword");

    // Mostrar u ocultar contraseña
    togglePassword.addEventListener("click", function () {

        if (password.type === "password") {
            password.type = "text";
            togglePassword.textContent = "🙈";
        } else {
            password.type = "password";
            togglePassword.textContent = "👁";
        }

    });

    // Validación del formulario
    form.addEventListener("submit", function (e) {

        if (email.value.trim() === "") {
            alert("Ingrese su correo electrónico.");
            email.focus();
            e.preventDefault();
            return;
        }

        if (password.value.trim() === "") {
            alert("Ingrese su contraseña.");
            password.focus();
            e.preventDefault();
            return;
        }

        if (password.value.length < 6) {
            alert("La contraseña debe tener al menos 6 caracteres.");
            password.focus();
            e.preventDefault();
            return;
        }

    });

});