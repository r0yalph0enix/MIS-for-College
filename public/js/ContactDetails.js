// Function to validate contact details form fields and display error messages
function validateContactDetails() {
    var citizenNum = document.getElementById("citizen_num").value.trim();
    var citizenCopy = document.getElementById("citizen_copy").value.trim();
    var contactNum = document.getElementById("contact_num").value.trim();
    var landlineNum = document.getElementById("landline_num").value.trim();

    // Clear any previous error messages
    var errorMessages = document.getElementsByClassName("error-message");
    for (var i = 0; i < errorMessages.length; i++) {
        errorMessages[i].textContent = "";
    }

    // Check if any required field is empty
    if (citizenNum === "") {
        insertErrorMessage("citizen_num_error", "Please fill in the citizenship number field.");
        return false;
    }
    // Validate citizenship number format
    if (!validateCitizenshipNumber(citizenNum)) {
        insertErrorMessage("citizen_num_error", "Please enter a valid Nepal citizenship number.");
        return false;
    }
    if (citizenCopy === "") {
        insertErrorMessage("citizen_copy_error", "Please fill in the citizenship copy field.");
        return false;
    }
    if (contactNum === "") {
        insertErrorMessage("contact_num_error", "Please fill in the contact number field.");
        return false;
    }

    

    // Check if contact number contains only numbers
    if (!/^\d+$/.test(contactNum)) {
        insertErrorMessage("contact_num_error", "Please enter a valid contact phone number.");
        return false;
    }

    // Validate contact number format
    if (!validateContactNumber(contactNum)) {
        insertErrorMessage("contact_num_error", "Please enter a valid contact phone number starting with '98' and containing exactly 10 digits.");
        return false;
    }

    // Check if landline number is provided and contains only numbers
    if (landlineNum !== "" && !/^\d+$/.test(landlineNum)) {
        insertErrorMessage("landline_num_error", "Please enter a valid landline phone number.");
        return false;
    }

    // All validations passed
    return true;
}

      
      // Function to insert error messages into the DOM
      function insertErrorMessage(fieldId, message) {
          var field = document.getElementById(fieldId);
          if (field) {
              field.textContent = message;
          }
      }
      
      // Function to validate contact number format (starting with '98' and containing exactly 10 digits)
      function validateContactNumber(contactNum) {
          var regex = /^98\d{8}$/; // Regular expression to match contact number starting with '98' and having 10 digits
          return regex.test(contactNum);
      }
      
      // Function to validate Nepal citizenship number format
      function validateCitizenshipNumber(citizenNum) {
          // Regular expression to match the format of Nepal citizenship numbers
          var regex = /^([0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{5})$/;
          return regex.test(citizenNum);
      }
      
      // Function to load address details section after validating contact details
      function loadAddressDetails() {
          // Validate contact details
          if (validateContactDetails()) {
              // If validation passes, proceed to load address details
              $('#contactDetailsContainer').slideUp(200); // Hide contact details section
              $('#addressDetailsContainer').slideDown(200); // Show address details section
          }
      }
      
      // Function to navigate back to the registration form
      function showRegistrationForm() {
          // Add logic to navigate back to the registration form if needed
      }