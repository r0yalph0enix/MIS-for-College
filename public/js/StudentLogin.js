document.addEventListener('DOMContentLoaded', function () {
    // Get password input element
    var passwordInput = document.getElementById('MyInput');

    // Get eye icon element
    var eyeIcon = document.querySelector('.pass-icon ion-icon');

    // Function to toggle password visibility and change the eye icon
    function togglePassword() {
        // Toggle the type attribute between "password" and "text"
        passwordInput.type = (passwordInput.type === "password") ? "text" : "password";

        // Toggle the eye icon between "eye-off-outline" and "eye-outline"
        var iconName = (passwordInput.type === "password") ? "eye-off-outline" : "eye-outline";
        eyeIcon.setAttribute('name', iconName);
    }

    // Add click event listener to the eye icon
    eyeIcon.addEventListener('click', function () {
        togglePassword();
    });
});
//email validation
function validateEmail() {
    var emailInput = document.getElementById("emailInput");
    var emailError = document.getElementById("emailError");
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[com]{2,}$/;

    if (emailPattern.test(emailInput.value)) {
        // Additional logic or form submission can be added here
        emailError.innerHTML = ""; // Clear error message if email is valid
    } else {
        emailError.innerHTML = "Invalid email address. Please enter a valid email.";
    }
}