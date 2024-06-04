function showErrorMessage() {
    var inputField = document.getElementById("inputField");
    var errorContainer = document.getElementById("errorContainer");

    // Your validation logic here
    var errorMessage = "This is an error message.";
    var isError = true; // Set this to true if error occurs

    // Display error message
    if (isError) {
        errorContainer.innerHTML = '<div class="error-message">' + errorMessage + '</div>';
        inputField.classList.add('error-input'); // Add error class to input field
    } else {
        errorContainer.innerHTML = ''; // Clear error message container
        inputField.classList.remove('error-input'); // Remove error class from input field
    }
}
// Function to update the file name and hide "No file chosen" text
function updateFileName(input) {
    var fileSpan = document.getElementById("file-name");
    if (input.files.length > 0) {
        fileSpan.textContent = input.files[0].name;
    } else {
        fileSpan.textContent = "No file chosen";
    }
}

// Function to validate the first letter of the name to be capital
function validateName(inputId) {
    var input = document.getElementById(inputId);
    var name = input.value.trim();
    var errorElement = document.getElementById("error-" + inputId);
    var alphaRegex = /^[A-Za-z]+$/;

    if (name.length === 0) {
        errorElement.textContent = " " + input.placeholder + ".";
        errorElement.style.display = "block";
        input.focus();
        return false;
    }

    if (!alphaRegex.test(name)) {
        errorElement.textContent = "Please enter only alphabetic characters for name.";
        errorElement.style.display = "block";
        input.focus();
        return false;
    }

    if (name[0] !== name[0].toUpperCase()) {
        errorElement.textContent = "First letter of the name should be capital.";
        errorElement.style.display = "block";
        input.focus();
        return false;
    }

    

    // If validation passed, hide the error message
    errorElement.style.display = "none";
    return true;
}
// Function to validate program field before proceeding
function validateProgramAndLevel() {
    var isValid = true;

    // Validate last name field
    var lastNameInput = document.getElementById('lname').value.trim();
    var errorLastName = document.getElementById('error-lname');

    if (lastNameInput === '') {
        errorLastName.textContent = 'Last Name field is required.';
        errorLastName.style.display = 'block';
        isValid = false;
    } else {
        errorLastName.style.display = 'none';

        // Validate program field only if last name is filled
        var programInput = document.getElementById('program').value.trim();
        var errorProgram = document.getElementById('error-program');

        // Capitalize first letter of program input
        programInput = programInput.charAt(0).toUpperCase() + programInput.slice(1);

        if (programInput === '') {
            errorProgram.textContent = 'Program field is required.';
            errorProgram.style.display = 'block';
            isValid = false;
        } else if (programInput.charAt(0) !== programInput.charAt(0).toUpperCase()) {
            errorProgram.textContent = 'First letter of the program should be capital.';
            errorProgram.style.display = 'block';
            isValid = false;
        } else {
            errorProgram.style.display = 'none';

            // Validate level field only if program is filled and last name is filled
            if (lastNameInput !== '') {
                var levelInput = document.getElementById('level').value.trim();
                var errorLevel = document.getElementById('error-level');

                // Capitalize first letter of level input
                levelInput = levelInput.charAt(0).toUpperCase() + levelInput.slice(1);

                if (levelInput === '') {
                    errorLevel.textContent = 'Level field is required.';
                    errorLevel.style.display = 'block';
                    isValid = false;
                } else if (levelInput.charAt(0) !== levelInput.charAt(0).toUpperCase()) {
                    errorLevel.textContent = 'First letter of the level should be capital.';
                    errorLevel.style.display = 'block';
                    isValid = false;
                } else {
                    errorLevel.style.display = 'none';
                }
            }
        }
    }

    return isValid;
}


// Function to validate email format
function validateEmail() {
    var emailInput = document.getElementById("email");
    var email = emailInput.value.trim();
    var errorElement = document.getElementById("error-email");
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
        errorElement.textContent = "Please enter a valid email address.";
        errorElement.style.display = "block";
        emailInput.focus();
        return false;
    }

    // If validation passed, hide the error message
    errorElement.style.display = "none";
    return true;
}

// Function to validate image size
function validateImageSize() {
    var fileInput = document.getElementById("photo");
    var errorElement = document.getElementById("error-photo");

    if (fileInput.files.length === 0) {
        errorElement.textContent = "Please select an image first.";
        errorElement.style.display = "block";
        return false;
    }

    var fileSize = fileInput.files[0].size; // Size in bytes
    var maxSize =  300 * 1024; // Maximum size (300KB in this example)

    if (fileSize > maxSize) {
        errorElement.textContent = "Image size should not exceed 300KB.";
        errorElement.style.display = "block";
        fileInput.value = ""; // Clear the file input
        return false;
    }

    // If validation passed, hide the error message
    errorElement.style.display = "none";
    return true;
}

// Function to validate gender selection
function validateGender() {
    var genderOptions = document.getElementsByName("gender");
    var errorElement = document.getElementById("error-gender");
    var selected = false;

    for (var i = 0; i < genderOptions.length; i++) {
        if (genderOptions[i].checked) {
            selected = true;
            break;
        }
    }

    if (!selected) {
        errorElement.textContent = "Please select a gender.";
        errorElement.style.display = "block";
        return false;
    }

    // If validation passed, hide the error message
    errorElement.style.display = "none";
    return true;
}



// Function to validate date of birth
function validateDOB() {
    var dobInput = document.getElementById("dob");
    var selectedDate = new Date(dobInput.value);
    var currentDate = new Date();
    var minDOB = new Date(currentDate.getFullYear() - 16, currentDate.getMonth(), currentDate.getDate());
    var maxDOB = new Date();
    currentDate.setHours(0,0,0,0);
    var errorElement = document.getElementById("error-dob");

    if (!dobInput.value) {
        errorElement.textContent = "Please select your date of birth.";
        errorElement.style.display = "block";
        return false;
    }

    if (selectedDate > minDOB) {
        errorElement.textContent = "You must be at least 16 years old to register.";
        errorElement.style.display = "block";
        return false;
    }

    if (selectedDate > maxDOB || selectedDate.getTime() === currentDate.getTime()) {
        errorElement.textContent = "Please select a valid date of birth.";
        errorElement.style.display = "block";
        return false;
    }

    // If validation passed, hide the error message
    errorElement.style.display = "none";
    return true;
}

// Function to perform all validations before proceeding to the next step
function validateAndProceed() {
    var isValid = true;

    // Validate first name, middle name, and last name
    isValid = isValid && validateName("fname");
    isValid = isValid && validateName("lname");
    isValid = isValid && validateProgramAndLevel();
    // Validate date of birth
    isValid = isValid && validateDOB(); 

    // Validate email, image, and gender
    isValid = isValid && validateEmail();
    isValid = isValid && validateImageSize();
    isValid = isValid && validateGender();

    if (!isValid) {
        return;
    }

    loadContactDetails(); // Proceed to the next step
}








 // Initialize Bootstrap Datepicker
 $(document).ready(function () {
    $('#dob').datepicker({
      format: 'dd/mm/yyyy', // Set the date format
      autoclose: true, // Close the datepicker when a date is selected
      todayHighlight: true, // Highlight today's date
      orientation: 'bottom' // Set the date picker orientation
    }).on('show', function (e) {
      // Get the position of the calendar icon
      var iconPosition = $('#calendar-icon').offset();
      // Get the height of the calendar icon
      var iconHeight = $('#calendar-icon').outerHeight();
      // Set the position of the date picker relative to the calendar icon
      $('.datepicker').css({
        top: iconPosition.top + iconHeight + 'px',
        left: iconPosition.left + 'px',
        fontSize: '14px', // Decrease font size for table cells
        height: '2px' // Decrease width of table cells
      });

      $('.datepicker').find('.datepicker-days th, .datepicker-months th, .datepicker-years th').css({
        fontWeight: 'bold'
      });
    });

    $('#calendar-icon').click(function () {
      $('#dob').datepicker('show');
    });
  });
