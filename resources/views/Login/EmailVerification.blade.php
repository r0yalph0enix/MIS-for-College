<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href={{asset('css/EmailVerification.css')}}>
</head>

<header>
  <div class="logo">
    <img src="{{asset('img/logo.png')}}" alt="College Logo">
  </div>
  <div class="college-info">
    <h1>Ratna Rajyalaxmi Campus</h1>
    <p>Pradashanimarga, Kathmandu</p>
  </div>
</header>

<body>
  <div class="container">
    <div class="box-container" id="box1">
      <div class="heading">Forgot Password</div>
      <div class="college-info">Please enter your e-mail address below. <br> (You will receive a link to create a new password via email)</div>
      <br>
      <div class="row">
        <div class="input-box">
          <label for="email">E-mail Address</label>
          <input type="text" id="email" placeholder="E-mail Address" required>
        </div>
      </div>
      <div class="button-container">
        <input type="button" class="back-button" onclick="toggleBox()" value="Next" id="nextButton" disabled>
      </div>
    </div>

    <!-- OTP Form -->
    <div class="box-container" id="box2" style="display: none;">
      <div class="heading">Enter OTP</div>
      <div class="college-info">Please enter the OTP sent to your email.</div>
      <div class="row">
        <div class="input-box">
          <label for="otp">OTP</label>
          <input type="text" id="otp" placeholder="Enter OTP" required>
        </div>
      </div>
      <div class="button-container">
        <input type="button" class="back-button" onclick="validateOTP()" value="Submit OTP" id="submitOTPButton" disabled>
      </div>
    </div>
  </div>

  <script>
    function toggleBox() {
      var email = document.getElementById('email').value;
      if (email.trim() === '') {
        alert('Please enter your email address.');
        return;
      }
      
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return;
      }
      
      var box1 = document.getElementById('box1');
      var box2 = document.getElementById('box2');
      
      if (box1.style.display === 'none') {
        box1.style.display = 'block';
        box2.style.display = 'none';
      } else {
        box1.style.display = 'none';
        box2.style.display = 'block';
      }
    }

    function validateOTP() {
      var otp = document.getElementById('otp').value;
      // Regular expression to match numeric OTP
      var numericRegex = /^[0-9]+$/;
      
      if (otp.trim() === '') {
        alert('Please enter the OTP.');
        return;
      } else if (otp.length !== 6) {
        alert('OTP should be exactly 6 characters long.');
        return;
      } else if (!numericRegex.test(otp)) {
        alert('Please enter a valid OTP containing only numeric characters.');
        return;
      }
      
      // Assuming a valid OTP is entered
      window.location.href = '/ConfirmPassword'; // Redirect to resetpassword.html
    }


    document.getElementById('email').addEventListener('input', function() {
      var email = document.getElementById('email').value;
      var nextButton = document.getElementById('nextButton');
      if (email.trim() !== '') {
        nextButton.disabled = false;
      } else {
        nextButton.disabled = true;
      }
    });

    document.getElementById('otp').addEventListener('input', function() {
      var otp = document.getElementById('otp').value;
      var submitOTPButton = document.getElementById('submitOTPButton');
      if (otp.trim() !== '') {
        submitOTPButton.disabled = false;
      } else {
        submitOTPButton.disabled = true;
      }
    });
  </script>
</body>

</html>
