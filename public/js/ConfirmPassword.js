
document.addEventListener('DOMContentLoaded', function () {
    var passwordInputs = document.querySelectorAll('input[type="password"]');
   var eyeIcons = document.querySelectorAll('.icon');
    function togglePassword(index) {
        passwordInputs[index].type = (passwordInputs[index].type === "password") ? "text" : "password";
    }
    eyeIcons.forEach(function (icon, index) {
        icon.addEventListener('click', function () {
            togglePassword(index);
            var iconName = (passwordInputs[index].type === "password") ? "eye-off-outline" : "eye-outline";
            icon.querySelector('ion-icon').setAttribute('name', iconName);
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const newPasswordInput = document.getElementById('MyInput1');
    const confirmPasswordInput = document.getElementById('MyInput2');
    const errorMessage = document.getElementById('error-message');

    confirmPasswordInput.addEventListener('input', function () {
        const newPassword = newPasswordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        if (newPassword !== confirmPassword) {
            errorMessage.style.display = 'block';
        } else {
            errorMessage.style.display = 'none';
        }
    });
});
