<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <title>Edit Profile</title>
  <link rel="stylesheet" href="{{asset('css/registration.css')}}">
</head>

<body style="background-image:url({{asset('img/blur_tu.png')}}) ">
  <header>
    <div class="logo"><a href="/studentdashboard_edit_profile">
      <img src="{{asset('img/logo.png')}}" alt="College Logo">
    </div></a>
    <div class="college-info">
      <h1>Ratna Rajyalaxmi Campus</h1>
      <p>Pradashanimarga, Kathmandu</p>
    </div>
    
  </header>
  <!-- Registration Form -->
 
  <div id="registrationFormContainer" class="containerregistration">
    <div class="box-containerregistration">
      <div class="headingregistration">Edit Basic Information</div>
      <div class="rowregistration">
        <div class="input-boxregistration">
          <label for="fname">First Name<span class="mandatory">*</span></label>
          <input type="text" id="fname" placeholder="Enter your First Name" required>
        </div>
        <div class="input-boxregistration">
          <label for="mname">Middle </label>
          <input type="text" id="mname" placeholder="Enter your Middle Name" required>
        </div>
        <div class="input-boxregistration">
          <label for="lname">Last Name<span class="mandatory">*</span></label>
          <input type="text" id="lname" placeholder="Enter your Last Name" required>
        </div>
      </div>
<!--       
      <div class="input-boxregistration">
        <label for="fname">Program</label>
        <input type="text" id="fname" placeholder="Choose Program" required>
      </div>
      <div class="input-boxregistration">
        <label for="mname">Level </label>
        <input type="text" id="mname" placeholder="Choose Level" required>
      </div> -->
      <div class="input-boxregistration">
        <label for="dob">Date of Birth<span class="mandatory">*</span></label>
        <div class="dob-containerreg">
          <input type="dobreg" id="dob" placeholder="DD/MM/YYYY" required>
          <i class="bi bi-calendar calendar-icon" id="calendar-icon"></i> <!-- Calendar icon -->
        </div>
      <div class="input-boxregistration">
        <label for="email">Email<span class="mandatory">*</span></label>
        <input type="emailreg" id="email" placeholder="Enter your Email" required>
      </div>
      </div>
      <div class="photo-box">
        <!-- <label for="photo">Upload Photo</label> -->
        <!-- <div class="photo-upload-container"> -->
          <!-- <label for="photo" class="upload-button">Choose File</label>
          <input type="file" id="photo" accept="image/*" onchange="updateFileName(this)" required> -->
          <!-- <span id="file-name">No file chosen</span> -->
          <label for="citizen_copy">Student Photo<span class="mandatory">*</span></label>
            <input type="file" id="photo" accept="image/*" onchange="updateFileName(this)" required>
        </div>

          
        
      
        <div class="gender-box">
          <label for="gender" class="Tgender">Gender<span class="mandatory">*</span></label>
          <div class="gender-options">
            <div class="gender-option">
              <input type="radio" id="male" name="gender" value="male">
              <label for="male">Male</label>
            </div>
            <div class="gender-option">
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label>
            </div>
            <div class="gender-option">
              <input type="radio" id="other" name="gender" value="other">
              <label for="other">Others</label>
            </div>
          </div>
        </div>
   
        <div class="button" style="display: flex; justify-content: flex-end;">
          <input type="button" class="next-button" onclick="validateAndProceed()" value="Next">
        </div>
        

</div>
</div>
<script>
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
    
    // Regular expression to match only alphabetic characters
    var alphaRegex = /^[A-Za-z]+$/;

    if (name.length === 0) {
        alert("Please enter " + input.placeholder + ".");
        input.focus();
        return false;
    }
    
    // Check if the name contains only alphabetic characters
    if (!alphaRegex.test(name)) {
        alert("Please enter only alphabetic characters for name.");
        input.focus();
        return false;
    }

    // Check if the first letter of the name is capital
    if (name[0] !== name[0].toUpperCase()) {
        alert("First letter of the name should be capital.");
        input.focus();
        return false;
    }

    return true;
}



  // Function to validate email format
  function validateEmail() {
      var emailInput = document.getElementById("email");
      var email = emailInput.value.trim();
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
          alert("Please enter a valid email address.");
          emailInput.focus();
          return false;
      }
      return true;
  }


  // Function to validate image size
  function validateImageSize() {
      var fileInput = document.getElementById("photo");
      if (fileInput.files.length === 0) {
          alert("Please select an image first.");
          return false;
      }
      var fileSize = fileInput.files[0].size; // Size in bytes
      var maxSize =  300 * 1024; // Maximum size (5MB in this example)

      if (fileSize > maxSize) {
          alert("Image size should not exceed 300KB.");
          fileInput.value = ""; // Clear the file input
          return false;
      }
      return true;
  }

  // Function to validate gender selection
  function validateGender() {
      var genderOptions = document.getElementsByName("gender");
      var selected = false;
      for (var i = 0; i < genderOptions.length; i++) {
          if (genderOptions[i].checked) {
              selected = true;
              break;
          }
      }
      if (!selected) {
          alert("Please select a gender.");
          return false;
      }
      return true;
  }

  // Function to validate date of birth
  // Function to validate date of birth
function validateDOB() {
    var dobInput = document.getElementById("dob");
    var selectedDate = new Date(dobInput.value);
    var currentDate = new Date();
    var minDOB = new Date(currentDate.getFullYear() - 16, currentDate.getMonth(), currentDate.getDate());
  var maxDOB = new Date();
    currentDate.setHours(0,0,0,0);
    if (!dobInput.value) {
        alert("Please select your date of birth.");
        return false;
    }
    if (selectedDate > minDOB) {
        alert("You must be at least 16 years old to register.");
        return false;
    }
    if (selectedDate > maxDOB || selectedDate.getTime() === currentDate.getTime()) {
        alert("Please select a valid date of birth.");
            return false;
        }
        if(selectedDate > minDOB){
          alert("You must be atleast 16 years old to register.");
          return false;
        }
        return true;
    }

// Function to perform all validations before proceeding to the next step
function validateAndProceed() {
    var isValid = true;

    // Validate first name, middle name, and last name
    isValid = isValid && validateName("fname");
    isValid = isValid && validateName("lname");
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
</script>

  
    <!-- Contact details -->
    <link rel="stylesheet" href="{{asset('css/ContactDetails.css')}}">
    <div id="contactDetailsContainer" class="containercon" style="display: none;">
      <div class="box-containercon">
        <div class="headingcon">Edit Contact Details</div>
        <div class="rowcon">
          <div class="input-boxcon">
            <label for="citizen_num">Citizenship Number<span class="mandatory">*</span></label>
            <input type="text" id="citizen_num" placeholder="Citizenship Number" required>
          </div>
          <div class="input-boxcon">
            <label for="citizen_copy">Citizenship Copy<span class="mandatory">*</span></label>
            <input type="file" id="citizen_copy" accept="image/*" required>
          </div>
        </div>
        <div class="row">
          <div class="input-boxcon">
            <label for="contact_num">Contact Phone Number<span class="mandatory">*</span></label>
            <input type="text" id="contact_num" placeholder="Enter Contact Phone Number" required>
          </div>
          <div class="input-boxcon">
            <label for="landline_num">Contact Landline Number</label>
            <input type="text" id="landline_num" placeholder="Enter Contact Landline Number" required>
          </div>
        </div>
        <div class="button-containercon">
          <input type="button" class="back-button" onclick="showRegistrationForm()" value="Back">
          <input type="button" class="next-button" onclick="if(validateContactDetails()) loadAddressDetails()" value="Next">
  
        </div>
      </div>
    </div>
    <!-- Contact Details Js -->
    <script>
   // Function to validate contact details form fields
function validateContactDetails() {
    var citizenNum = document.getElementById("citizen_num").value.trim();
    var citizenCopy = document.getElementById("citizen_copy").value.trim();
    var contactNum = document.getElementById("contact_num").value.trim();
    var landlineNum = document.getElementById("landline_num").value.trim();

    // Check if any required field is empty
    if (citizenNum === "" || citizenCopy === "" || contactNum === "") {
        alert("Please fill in all required fields.");
        return false;
    }

    // Check if contact number contains only numbers
    if (!/^\d+$/.test(contactNum)) {
        alert("Please enter a valid contact phone number.");
        return false;
    }

    // Validate contact number format
    if (!validateContactNumber(contactNum)) {
        alert("Please enter a valid contact phone number starting with '98' and containing exactly 10 digits.");
        return false;
    }

    // Check if landline number is provided and contains only numbers
    if (landlineNum !== "" && !/^\d+$/.test(landlineNum)) {
        alert("Please enter a valid landline phone number.");
        return false;
    }

    // Validate citizenship number format
    if (!validateCitizenshipNumber(citizenNum)) {
        alert("Please enter a valid Nepal citizenship number.");
        return false;
    }

    // All validations passed
    return true;
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
 
    </script>
    
    
    
    <!-- Address Details -->
    <link rel="stylesheet" href="{{asset('css/AddressDetails.css')}}">
    <div id="addressDetailsContainer" class="container address-details-container" style="display: none;">
      <!-- Add the "address-details-container" class to uniquely identify this section -->
      <div class="box-containeradd">
        <div class="headingadd">Edit Address Details</div>
        <div class="input-box">
          <label for="permanent_address">Permanent Address<span class="mandatory">*</span></label>
          <div class="row">
            <input type="text" id="permanent_district" placeholder="District" required>
            <input type="text" id="permanent_municipality" placeholder="VDC/Municipality" required>
            <input type="text" id="permanent_ward" placeholder="Ward Number" required>
          </div>
          <div class="row">
            <input type="text" id="permanent_province" placeholder="Province" required>
            <input type="text" id="permanent_tole" placeholder="Tole" required>
          </div>
        </div>
        <div class="input-box">
          <label for="temporary_address">Temporary Address<span class="mandatory">*</span></label>
          <div class="row">
            <input type="text" id="temporary_district" placeholder="District" required>
            <input type="text" id="temporary_municipality" placeholder="VDC/Municipality" required>
            <input type="text" id="temporary_ward" placeholder="Ward Number" required>
          </div>
          <div class="row">
            <input type="text" id="temporary_province" placeholder="Province" required>
            <input type="text" id="temporary_tole" placeholder="Tole" required>
          </div>
          <div class="row">
            <label for="same_as_permanent">Same as Permanent Address</label>
            <input type="checkbox" id="same_as_permanent">
        </div>
    </div>
      
        <div class="button">
          <input type="button" class="back-button" onclick="showContactDetails()" value="Back">
          <input type="button" class="next-button" onclick="if(validateAddressDetails()) showFamilyDetails()" value="Next">
  
        </div>
      </div>
    </div>
      <!-- Address Details js -->
      <script>

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
    
            // Check if any required field is empty
            if (
                permanentDistrict === "" || permanentMunicipality === "" || permanentWard === "" || permanentProvince === "" || permanentTole === "" ||
                temporaryDistrict === "" || temporaryMunicipality === "" || temporaryWard === "" || temporaryProvince === "" || temporaryTole === ""
            ) {
                alert("Please fill in all required fields.");
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
                alert("Please ensure that the first letter of each input is uppercase.");
                return false;
            }
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
        alert("Please ensure that the fields do not contain special characters.");
        return false;
    }
    
    
        // Function to check if the first letter of a string is uppercase
        function isFirstLetterUppercase(string) {
            return /^[A-Z]/.test(string);
        }
    
        
    // Check if the Ward Number is at least 1 or 2 digits
    if (!isOneOrTwoDigits(permanentWard) || !isOneOrTwoDigits(temporaryWard)) {
        alert("Ward Number should be 1 or 2 digits.");
        return false;
    }

    // All validations passed
    return true;
}



       


// Function to check if the Ward Number is at least 1 or 2 digits
function isOneOrTwoDigits(input) {
    return /^\d{1,2}$/.test(input);
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
    </script>
</body>
  
    <!-- Family Details -->
    <link rel="stylesheet" href="{{asset('css/FamilyDetails.css')}}">
    <div id="familyDetailsContainer" class="container family-details-container" style="display: none;">
      <div class="containerfam">
        <div class="box-containerfam">
          <div class="headingfam">Edit Family Details</div>
          <div class="rowfam">
            <div class="input-boxfam">
              <label for="father_name">Father's Name<span class="mandatory">*</span></label>
              <input type="text" id="father_name" placeholder="Father's Name" required>
            </div>
            <div class="input-boxfam">
              <label for="mother_name">Mother's Name<span class="mandatory">*</span></label>
              <input type="text" id="mother_name" placeholder="Mother's Name" required>
            </div>
          </div>
          <div class="rowfam">
            <div class="input-boxfam">
              <label for="father_phone">Father's Phone Number<span class="mandatory">*</span></label>
              <input type="text" id="father_phone" placeholder="Father's Phone Number" required>
            </div>
            <div class="input-boxfam">
              <label for="mother_phone">Mother's Phone Number<span class="mandatory">*</span></label>
              <input type="text" id="mother_phone" placeholder="Mother's Phone Number" required>
            </div>
          </div>
          <div class="button-container">
            <input type="button" class="back-button" onclick="showAddressDetails()" value="Back">
            <input type="button" class="next-button" onclick="if(validateFamilyDetails()) loadEducationDetails()" value="Next">
  
          </div>
        </div>
      </div>
    </div>
   <!-- AddressDetails Js -->
<script>    
   // Function to validate family details form fields
   function validateFamilyDetails() {
       var fatherName = document.getElementById("father_name").value.trim();
       var motherName = document.getElementById("mother_name").value.trim();
       var fatherPhone = document.getElementById("father_phone").value.trim();
       var motherPhone = document.getElementById("mother_phone").value.trim();
   
       // Check if any required field is empty
       if (fatherName === "" || motherName === "" || fatherPhone === "" || motherPhone === "") {
           alert("Please fill in all required fields.");
           return false;
       }
   // Validate first letter of father's name
   if (fatherName[0] !== fatherName[0].toUpperCase()) {
        alert("First letter of father's name should be uppercase.");
        return false;
    }

    // Validate first letter of mother's name
    if (motherName[0] !== motherName[0].toUpperCase()) {
        alert("First letter of mother's name should be uppercase.");
        return false;
    }
        // Check if father's name contains special characters
    if (containsSpecialCharacters(fatherName)) {
        alert("Father's name should not contain special characters.");
        return false;
    }

    // Check if mother's name contains special characters
    if (containsSpecialCharacters(motherName)) {
        alert("Mother's name should not contain special characters.");
        return false;
    }

       // Validate father's phone number format
       if (!validatePhoneNumber(fatherPhone)) {
           alert("Please enter a valid phone number for father starting with '98' and containing exactly 10 digits.");
           return false;
       }
   
       // Validate mother's phone number format
       if (!validatePhoneNumber(motherPhone)) {
           alert("Please enter a valid phone number for mother starting with '98' and containing exactly 10 digits.");
           return false;
       }
   
       // All validations passed
       return true;
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
   
  </script>
   
  
   <!-- Education Details -->
  <link rel="stylesheet" href="{{asset('css/EducationDetails.css')}}">
  <div class="containeredu" style="display: none;" id="educationDetailsContainer">
    <div class="box-containeredu">
      <div class="headeredu">Edit Education Details</div>
      <div class="rowedu">
        <div class="input-boxedu">
          <label for="school_name">School Name<span class="mandatory">*</span></label>
          <input type="text" id="school_name" name="school_name" placeholder="Enter School Name">
        </div>
        <div class="input-boxedu citizenship-copy">
          <label for="see_grade_input">SEE Grade<span class="mandatory">*</span></label>
          <div class="input-groupedu">
            <input type="text" id="see_grade_input" name="see_grade_input" placeholder="Grade">
            <span class="grade-arrow">▼</span>
            <div class="grade-list">
              <div class="grade-list-item">A<sup>+</sup></div>
              <div class="grade-list-item">A</div>
              <div class="grade-list-item">B<sup>+</sup></div>
              <div class="grade-list-item">B</div>
              <div class="grade-list-item">C<sup>+</sup></div>
              <div class="grade-list-item">C</div>
              <div class="grade-list-item">D<sup>+</sup></div>
              <div class="grade-list-item">D</div>
              <div class="grade-list-item">E</div>
            </div>
          </div>
        </div>
      </div>
      <div class="rowedu">
        <div class="input-boxedu">
          <label for="college_name">College Name<span class="mandatory">*</span></label>
          <input type="text" id="college_name" name="college_name" placeholder="Enter College Name">
        </div>
        <div class="input-boxedu citizenship-copy">
          <label for="plus2_grade_input">+2 Grade<span class="mandatory">*</span></label>
          <div class="input-groupedu">
            <input type="text" id="plus2_grade_input" name="plus2_grade_input" placeholder="Grade">
            <span class="grade-arrow">▼</span>
            <div class="grade-list">
              <div class="grade-list-item">A<sup>+</sup></div>
              <div class="grade-list-item">A</div>
              <div class="grade-list-item">B<sup>+</sup></div>
              <div class="grade-list-item">B</div>
              <div class="grade-list-item">C<sup>+</sup></div>
              <div class="grade-list-item">C</div>
              <div class="grade-list-item">D<sup>+</sup></div>
              <div class="grade-list-item">D</div>
              <div class="grade-list-item">E</div>
            </div>
          </div>
        </div>
      </div>
      <div class="rowedu">
        <div class="input-boxedu">
          <label for="entrance_roll_no">Bachelor Entrance Roll no<span class="mandatory">*</span></label>
          <input type="text" id="entrance_roll_no" name="entrance_roll_no" placeholder="Enter Bachelor Entrance Roll Number">
        </div>
      </div>
      <div class="headeredu">Education Certificates</div>
      <div class="certificate-table">
        <table>
          <tr>
            <th>Document Name</th>
            <th>Upload File</th>
          </tr>
          <tr>
            <td>+2 Transcript Certificate<span class="mandatory">*</span></td>
            <td>
              <div class="photo-upload-container">
                <label for="transcript_certificate" class="upload-button">Choose File</label>
                <input type="file" id="transcript_certificate" name="transcript_certificate" accept="image/*" onchange="updateFileName(this, 'transcript-file-name')">
                <span id="transcript-file-name" class="no-file">No file chosen</span>
              </div>
            </td>
          </tr>
          <tr>
            <td>+2 Migration Certificate<span class="mandatory">*</span></td>
            <td>
              <div class="photo-upload-container">
                <label for="migration_certificate" class="upload-button">Choose File</label>
                <input type="file" id="migration_certificate" name="migration_certificate" accept="image/*" onchange="updateFileName(this, 'migration-file-name')">
                <span id="migration-file-name" class="no-file">No file chosen</span>
              </div>
            </td>
          </tr>
          <tr>
            <td>+2 Character Certificate<span class="mandatory">*</span></td>
            <td>
              <div class="photo-upload-container">
                <label for="character_certificate" class="upload-button">Choose File</label>
                <input type="file" id="character_certificate" name="character_certificate" accept="image/*" onchange="updateFileName(this, 'character-file-name')">
                <span id="character-file-name" class="no-file">No file chosen</span>
              </div>
            </td>
          </tr>
          <tr>
            <td>+2 Provisional Certificate<span class="mandatory">*</span></td>
            <td>
              <div class="photo-upload-container">
                <label for="provisional_certificate" class="upload-button">Choose File</label>
                <input type="file" id="provisional_certificate" name="provisional_certificate" accept="image/*" onchange="updateFileName(this, 'provisional-file-name')">
                <span id="provisional-file-name" class="no-file">No file chosen</span>
              </div>
            </td>
          </tr>
        </table>
      </div>
  
      <div class="button-container">
        <input type="button" class="back-button" onclick="showFamilyDetails()" value="Back">
        <input type="button" class="next-button" onclick="submitForm()" value="Submit">
      </div>
    </div>
  </div>
  <!-- JavaScript for education details -->
  
  <script>
    // Function to update the file name and hide "No file chosen" text
    function updateFileName(input, fileNameElementId) {
      var fileSpan = document.getElementById(fileNameElementId);
      if (input.files.length > 0) {
        fileSpan.textContent = input.files[0].name;
      } else {
        fileSpan.textContent = "No file chosen";
      }
    }
  
    // Function to validate form fields
    function validateForm() {
      var schoolName = document.getElementById("school_name").value.trim();
      var seeGrade = document.getElementById("see_grade_input").value.trim();
      var collegeName = document.getElementById("college_name").value.trim();
      var plus2Grade = document.getElementById("plus2_grade_input").value.trim();
      var entranceRollNo = document.getElementById("entrance_roll_no").value.trim();
      var transcriptFile = document.getElementById("transcript_certificate").files[0];
      var migrationFile = document.getElementById("migration_certificate").files[0];
      var characterFile = document.getElementById("character_certificate").files[0];
      var provisionalFile = document.getElementById("provisional_certificate").files[0];

      
      if (schoolName.length > 0 && schoolName[0] !== schoolName[0].toUpperCase()) {
        alert("First letter of school name should be capitalized.");
        return false;
    }
      // Check for special characters in school name
      if (containsSpecialCharacters(schoolName)) {
        alert("School name should not contain special characters.");
        return false;
    }

    // Check for special characters in college name
    if (containsSpecialCharacters(collegeName)) {
        alert("College name should not contain special characters.");
        return false;
    }

    // Validate first letter of college name
    if (collegeName.length > 0 && collegeName[0] !== collegeName[0].toUpperCase()) {
        alert("First letter of college name should be capitalized.");
        return false;
    }
  
      // Check if any required field is empty
      if (schoolName === "" || seeGrade === "" || collegeName === "" || plus2Grade === "" || entranceRollNo === "") {
        alert("Please fill in all required fields.");
        return false;
        
      }
  
      // Check if any education certificate file is not selected
      if (!transcriptFile || !migrationFile || !characterFile || !provisionalFile) {
        alert("Please upload all education certificates.");
        return false;
      }
  
      // Check file sizes
      var maxSize = 5 * 1024 * 1024; // 5MB
      if (transcriptFile.size > maxSize || migrationFile.size > maxSize || characterFile.size > maxSize || provisionalFile.size > maxSize) {
        alert("File size should not exceed 5MB.");
        return false;
      }
  
      // Validate grade inputs
      if (!validateGrade(seeGrade) || !validateGrade(plus2Grade)) {
        alert("Invalid grade input. Grades should be from A to E.");
        return false;
      }
  
      // All validations passed
      return true;
    }
  
// Function to check if a string contains special characters
function containsSpecialCharacters(str) {
    var regex = /[!@#$%^&*()_+={}\[\]|\\:;"'<>,.?/~`]/;
    return regex.test(str);
}
    // Function to validate grade inputs
    function validateGrade(grade) {
      // Regular expression to match valid grades (A, A+, B, B+, C, C+, D, D+, E)
      var gradeRegex = /^[A-E]([+-])?$/;
      return gradeRegex.test(grade);
    }
  
    // Function to perform form submission
    function submitForm() {
      // Validate the form
      if (validateForm()) {
        // Redirect to the login form
        window.location.href = "/studentdashboard";
      }
    }
  
    document.addEventListener("DOMContentLoaded", function () {
      const gradeArrows = document.querySelectorAll('.grade-arrow');
  
      gradeArrows.forEach(function (arrow) {
        arrow.addEventListener('click', function (event) {
          event.stopPropagation();
          const gradeList = arrow.parentElement.querySelector('.grade-list');
          gradeList.classList.toggle('show');
        });
      });
  
      document.querySelectorAll('.grade-list-item').forEach(item => {
        item.addEventListener('click', function (event) {
          event.stopPropagation(); // Stop event propagation to prevent it from reaching the arrow
          const grade = item.textContent;
          const inputBox = item.closest('.input-groupedu').querySelector('input[type="text"]');
          inputBox.value = grade;
          item.closest('.grade-list').classList.remove('show');
        });
      });
  
      window.addEventListener('click', function (event) {
        gradeArrows.forEach(function (arrow) {
          const gradeList = arrow.parentElement.querySelector('.grade-list');
          if (!arrow.contains(event.target) && !gradeList.contains(event.target)) {
            gradeList.classList.remove('show');
          }
        });
        // Hide grade list when clicking outside the dropdown or list items
        const gradeLists = document.querySelectorAll('.grade-list');
        gradeLists.forEach(function (gradeList) {
          if (!gradeList.contains(event.target)) {
            gradeList.classList.remove('show');
          }
        });
      });
    });
  
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
  
    function loadContactDetails() {
      $('#registrationFormContainer').slideUp(200); // Adjust the duration (in milliseconds)
      $('#contactDetailsContainer').slideDown(200); // Adjust the duration (in milliseconds)
    }
  
    function showRegistrationForm() {
      $('#contactDetailsContainer').slideUp(200); // Adjust the duration (in milliseconds)
      $('#registrationFormContainer').slideDown(200); // Adjust the duration (in milliseconds)
    }
  
    function loadAddressDetails() {
      $('#contactDetailsContainer').slideUp(200); // Adjust the duration (in milliseconds)
      $('#addressDetailsContainer').slideDown(200); // Adjust the duration (in milliseconds)
    }
  
    function showContactDetails() {
      $('#addressDetailsContainer').slideUp(200); // Adjust the duration (in milliseconds)
      $('#contactDetailsContainer').slideDown(200); // Adjust the duration (in milliseconds)
    }
  
    function showFamilyDetails() {
      $('#addressDetailsContainer').slideUp(200); // Adjust the duration (in milliseconds)
      $('#familyDetailsContainer').slideDown(200); // Adjust the duration (in milliseconds)
      $('#educationDetailsContainer').slideUp(200); // Ensure education details are hidden initially
    }
  
    function showAddressDetails() {
      $('#familyDetailsContainer').slideUp(200); // Adjust the duration (in milliseconds)
      $('#addressDetailsContainer').slideDown(200); // Adjust the duration (in milliseconds)
    }
  
    function loadEducationDetails() {
      $('#familyDetailsContainer').slideUp(200); // Adjust the duration (in milliseconds)
      $('#educationDetailsContainer').slideDown(200); // Adjust the duration (in milliseconds)
    }
  </script>
  
  </body>
  
  </html>
  
  