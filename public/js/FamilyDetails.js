function validateFamilyDetails() {
    var fatherName = document.getElementById("father_name").value.trim();
    var motherName = document.getElementById("mother_name").value.trim();
    var fatherPhone = document.getElementById("father_phone").value.trim();
    var motherPhone = document.getElementById("mother_phone").value.trim();

    // Clear any previous error messages
    var errorMessages = document.getElementsByClassName("error-message");
    for (var i = 0; i < errorMessages.length; i++) {
        errorMessages[i].textContent = "";
    }

    if (fatherName === "") {
        insertErrorMessage("father_name_error", "Please fill in father's name.");
        return false;
    }

    // Check if mother's name is empty
    if (motherName === "") {
        insertErrorMessage("mother_name_error", "Please fill in mother's name.");
        return false;
    }

    // Check if father's phone number is empty
    if (fatherPhone === "") {
        insertErrorMessage("father_phone_error", "Please fill in father's phone number.");
        return false;
    }

    // Check if mother's phone number is empty
    if (motherPhone === "") {
        insertErrorMessage("mother_phone_error", "Please fill in mother's phone number.");
        return false;
    }

    // Validate first letter of father's name
    if (fatherName[0] !== fatherName[0].toUpperCase()) {
        insertErrorMessage("father_name_error", "First letter of father's name should be uppercase.");
        return false;
    }

    // Validate first letter of mother's name
    if (motherName[0] !== motherName[0].toUpperCase()) {
        insertErrorMessage("mother_name_error", "First letter of mother's name should be uppercase.");
        return false;
    }

    // Check if father's name contains special characters
    if (containsSpecialCharacters(fatherName)) {
        insertErrorMessage("father_name_error", "Father's name should not contain special characters.");
        return false;
    }

    // Check if mother's name contains special characters
    if (containsSpecialCharacters(motherName)) {
        insertErrorMessage("mother_name_error", "Mother's name should not contain special characters.");
        return false;
    }

    // Validate father's phone number format
    if (!validatePhoneNumber(fatherPhone)) {
        insertErrorMessage("father_phone_error", "Please enter a valid phone number for father.");
        return false;
    }

    // Validate mother's phone number format
    if (!validatePhoneNumber(motherPhone)) {
        insertErrorMessage("mother_phone_error", "Please enter a valid phone number for mother.");
        return false;
    }

    // All validations passed
    return true;
}

// Function to insert error messages into the DOM
function insertErrorMessage(fieldId, message) {
    var field = document.getElementById(fieldId);
    if (field) {
        var errorMessage = document.createElement("div");
        errorMessage.className = "error-message";
        errorMessage.textContent = message;
        field.appendChild(errorMessage);
    }
}

// Function to check if a string contains special characters
function containsSpecialCharacters(str) {
    var regex = /[!@#$%^&*()_+={}\[\]|\\:;"'<>,.?/~`]/;
    return regex.test(str);
}

// Function to validate phone number format (starting with '98' and containing exactly 10 digits)
function validatePhoneNumber(phoneNumber) {
    var regex = /^98\d{8}$/; // Regular expression to match phone number starting with '98' and having 10 digits
    return regex.test(phoneNumber);
}
   
   // Function to load education details section after validating family details
   function loadEducationDetails() {
       // Validate family details
       if (validateFamilyDetails()) {
           // If validation passes, proceed to load education details
           $('#familyDetailsContainer').slideUp(200); // Hide family details section
           $('#educationDetailsContainer').slideDown(200); // Show education details section
       }
   }
   
   // Function to navigate back to the address details section
   function showAddressDetails() {
       // Add logic to navigate back to the address details section if needed
   }