// Function to autofill temporary address same as permanent address
document.getElementById("same_as_permanent").addEventListener("change", function() {
    if (this.checked) {
        document.getElementById("temporary_district").value = document.getElementById("permanent_district").value;
        document.getElementById("temporary_municipality").value = document.getElementById("permanent_municipality").value;
        document.getElementById("temporary_ward").value = document.getElementById("permanent_ward").value;
        document.getElementById("temporary_province").value = document.getElementById("permanent_province").value;
        document.getElementById("temporary_tole").value = document.getElementById("permanent_tole").value;
    } else {
        // Clear temporary address fields if not checked
        document.getElementById("temporary_district").value = "";
        document.getElementById("temporary_municipality").value = "";
        document.getElementById("temporary_ward").value = "";
        document.getElementById("temporary_province").value = "";
        document.getElementById("temporary_tole").value = "";
    }
});
// Function to autofill temporary address same as permanent address
document.getElementById("same_as_permanent").addEventListener("change", function() {
if (this.checked) {
document.getElementById("temporary_district").value = document.getElementById("permanent_district").value;
document.getElementById("temporary_municipality").value = document.getElementById("permanent_municipality").value;
document.getElementById("temporary_ward").value = document.getElementById("permanent_ward").value;
document.getElementById("temporary_province").value = document.getElementById("permanent_province").value;
document.getElementById("temporary_tole").value = document.getElementById("permanent_tole").value;
} else {
// Clear temporary address fields if not checked
document.getElementById("temporary_district").value = "";
document.getElementById("temporary_municipality").value = "";
document.getElementById("temporary_ward").value = "";
document.getElementById("temporary_province").value = "";
document.getElementById("temporary_tole").value = "";
}
});

// Function to update temporary address when permanent address fields are edited
document.getElementById("permanent_district").addEventListener("input", function() {
if (document.getElementById("same_as_permanent").checked) {
document.getElementById("temporary_district").value = this.value;
}
});
document.getElementById("permanent_municipality").addEventListener("input", function() {
if (document.getElementById("same_as_permanent").checked) {
document.getElementById("temporary_municipality").value = this.value;
}
});
document.getElementById("permanent_ward").addEventListener("input", function() {
if (document.getElementById("same_as_permanent").checked) {
document.getElementById("temporary_ward").value = this.value;
}
});
document.getElementById("permanent_province").addEventListener("input", function() {
if (document.getElementById("same_as_permanent").checked) {
document.getElementById("temporary_province").value = this.value;
}
});
document.getElementById("permanent_tole").addEventListener("input", function() {
if (document.getElementById("same_as_permanent").checked) {
document.getElementById("temporary_tole").value = this.value;
}
});

// Function to validate address details form fields

function validateAddressDetails() {
var permanentDistrict = document.getElementById("permanent_district").value.trim();
var permanentMunicipality = document.getElementById("permanent_municipality").value.trim();
var permanentWard = document.getElementById("permanent_ward").value.trim();
var permanentProvince = document.getElementById("permanent_province").value.trim();
var permanentTole = document.getElementById("permanent_tole").value.trim();
var temporaryDistrict = document.getElementById("temporary_district").value.trim();
var temporaryMunicipality = document.getElementById("temporary_municipality").value.trim();
var temporaryWard = document.getElementById("temporary_ward").value.trim();
var temporaryProvince = document.getElementById("temporary_province").value.trim();
var temporaryTole = document.getElementById("temporary_tole").value.trim();

// Clear any previous error messages
var errorMessages = document.getElementsByClassName("error-message");
for (var i = 0; i < errorMessages.length; i++) {
errorMessages[i].textContent = "";
}

// Check if any required field is empty
if (
permanentDistrict === "" || permanentMunicipality === "" || permanentWard === "" || permanentProvince === "" || permanentTole === "" ||
temporaryDistrict === "" || temporaryMunicipality === "" || temporaryWard === "" || temporaryProvince === "" || temporaryTole === ""
) {
insertErrorMessage("permanent_district_error", "Please fill in all required fields.");
insertErrorMessage("temporary_district_error", "Please fill in all required fields.");
return false;
}

// Check if the first letter of each input except Ward Number is uppercase
if (
!isFirstLetterUppercase(permanentDistrict) ||
!isFirstLetterUppercase(permanentMunicipality) ||
!isFirstLetterUppercase(permanentProvince) ||
!isFirstLetterUppercase(permanentTole) ||
!isFirstLetterUppercase(temporaryDistrict) ||
!isFirstLetterUppercase(temporaryMunicipality) ||
!isFirstLetterUppercase(temporaryProvince) ||
!isFirstLetterUppercase(temporaryTole)
) {
insertErrorMessage("permanent_district_error", "Please ensure that the first letter of each input is uppercase.");
insertErrorMessage("temporary_district_error", "Please ensure that the first letter of each input is uppercase.");
return false;
}

// Check if the fields contain special characters
if (
containsSpecialCharacters(permanentDistrict) ||
containsSpecialCharacters(permanentMunicipality) ||
containsSpecialCharacters(permanentProvince) ||
containsSpecialCharacters(permanentTole) ||
containsSpecialCharacters(temporaryDistrict) ||
containsSpecialCharacters(temporaryMunicipality) ||
containsSpecialCharacters(temporaryProvince) ||
containsSpecialCharacters(temporaryTole)
) {
insertErrorMessage("permanent_district_error", "Please ensure that the fields do not contain special characters.");
insertErrorMessage("temporary_district_error", "Please ensure that the fields do not contain special characters.");
return false;
}


// Function to check if the first letter of a string is uppercase
function isFirstLetterUppercase(string) {
    return /^[A-Z]/.test(string);
}

if (!isOneOrTwoDigits(permanentWard)) {
insertErrorMessage("permanent_ward_error", "Ward Number should be 1 or 2 digits.");
return false;
}

if (!isOneOrTwoDigits(temporaryWard)) {
insertErrorMessage("temporary_ward_error", "Ward Number should be 1 or 2 digits.");
return false;
}
// Check if the Ward Number is at least 1 or 2 digits
if (!isOneOrTwoDigits(permanentWard) || !isOneOrTwoDigits(temporaryWard)) {
alert("Ward Number should be 1 or 2 digits.");
return false;
}

// Function to check if the Ward Number is at least 1 or 2 digits
function isOneOrTwoDigits(input) {
return /^\d{1,2}$/.test(input);
}


// All validations passed
return true;
}






// Function to load family details section after validating address details
function showFamilyDetails() {
    // Validate address details
    if (validateAddressDetails()) {
        // If validation passes, proceed to load family details
        $('#addressDetailsContainer').slideUp(200); // Hide address details section
        $('#familyDetailsContainer').slideDown(200); // Show family details section
    }
}

// Function to navigate back to the contact details section
function showContactDetails() {
    // Add logic to navigate back to the contact details section if needed
}

function containsSpecialCharacters(str) {
var regex = /[!@#$%^&*()_+={}\[\]|\\:;"'<>,.?/~`]/;
return regex.test(str);
}