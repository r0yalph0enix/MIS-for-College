
            <!-- yaha se hatan hey -->
            @extends('layouts.master_teacherdashboard')

            @push('title')
            <h2 class="fs-2 m-0">Teacher Dashboard</h2>
            @endpush
            @section('main-section')
            <div class="body" id="contentBody">
                <h2 class="px-4 hpart">Summary Report</h2>
        </div>


            <!-- login form -->
            <div class="login-box">
        
                <form action="studentdashboard.html">
                    <h2>Reset Password </h2>
                    <p class="msg">Enter your new password below</p>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="eye-off-outline">
                        </ion-icon></span>
                        <input type="password" required id="">
                        <label>Current Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="eye-off-outline">
                        </ion-icon></span>
                        <input type="password" required id="MyInput1">
                        <label>New Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="eye-off-outline">
                            </ion-icon></span>
                        <input type="password" required id="MyInput2">
                        <label>Confirm New Password</label>
                    </div>
                    <div id="error-message" style="display: none; color: red; text-align: center;">Passwords do not match!</div>
                    <button  class="button_1"  type="submit" >Reset Password</button>
                   
        
                </form>
            </div>
    

    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

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
    </script>
            @endsection
