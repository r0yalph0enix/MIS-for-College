// Function to update the file name and hide "No file chosen" text
function updateFileName(input, fileNameElementId) {
  var fileSpan = document.getElementById(fileNameElementId);
  var uploadedFileName = sessionStorage.getItem(input.id + "_uploadedFileName");
  
  if (input.files && input.files.length > 0) {
      uploadedFileName = input.files[0].name;
      sessionStorage.setItem(input.id + "_uploadedFileName", uploadedFileName);
  }

  fileSpan.textContent = uploadedFileName !== null && uploadedFileName !== "" ? uploadedFileName : "No file chosen";
}

// Check session storage for file names when the page loads
window.onload = function() {
  var inputs = document.querySelectorAll('input[type="file"]');
  inputs.forEach(function(input) {
      var fileNameElementId = input.id + "_uploadedFileName";
      var uploadedFileName = sessionStorage.getItem(fileNameElementId);
      var fileSpan = document.getElementById(input.id.replace("_certificate", "-file-name"));
      fileSpan.textContent = uploadedFileName !== null && uploadedFileName !== "" ? uploadedFileName : "No file chosen";
  });
};



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

// Clear any previous error messages
var errorMessages = document.getElementsByClassName("error-message");
for (var i = 0; i < errorMessages.length; i++) {
  errorMessages[i].textContent = "";
}

// Check for capitalization in school name
if (schoolName.length > 0 && schoolName[0] !== schoolName[0].toUpperCase()) {
  insertErrorMessage("school_name_error", "First letter of school name should be capitalized.");
  return false;
}

// Check for special characters in school name
if (containsSpecialCharacters(schoolName)) {
  insertErrorMessage("school_name_error", "School name should not contain special characters.");
  return false;
}

// Check for special characters in college name
if (containsSpecialCharacters(collegeName)) {
  insertErrorMessage("college_name_error", "College name should not contain special characters.");
  return false;
}

// Validate capitalization in college name
if (collegeName.length > 0 && collegeName[0] !== collegeName[0].toUpperCase()) {
  insertErrorMessage("college_name_error", "First letter of college name should be capitalized.");
  return false;
}

// Check if school name is empty
if (schoolName === "") {
  insertErrorMessage("school_name_error", "Please fill in the school name.");
  return false;
}

// Check if SEE grade is empty
if (seeGrade === "") {
  insertErrorMessage("see_grade_input_error", "Please fill in the SEE grade.");
  return false;
}
// Validate grade inputs
if (!validateGrade(seeGrade)) {
  insertErrorMessage("see_grade_input_error", "Invalid grade input. Grades should be from A to E.");
  return false;
}

// Check if college name is empty
if (collegeName === "") {
  insertErrorMessage("college_name_error", "Please fill in the college name.");
  return false;
}

// Check if +2 grade is empty
if (plus2Grade === "") {
  insertErrorMessage("plus2_grade_input_error", "Please fill in the +2 grade.");
  return false;
}

if (!validateGrade(plus2Grade)) {
  insertErrorMessage("plus2_grade_input_error", "Invalid grade input. Grades should be from A to E.");
  return false;
}

// Check if entrance roll number is empty
if (entranceRollNo === "") {
  insertErrorMessage("entrance_roll_no_error", "Please fill in the entrance roll number.");
  return false;
}
// Check if transcript certificate file is not selected
if (!transcriptFile) {
  insertErrorMessage("transcript_certificate_error", "Please upload the transcript certificate.");
  return false;
}

// Check if migration certificate file is not selected
if (!migrationFile) {
  insertErrorMessage("migration_certificate_error", "Please upload the migration certificate.");
  return false;
}

// Check if character certificate file is not selected
if (!characterFile) {
  insertErrorMessage("character_certificate_error", "Please upload the character certificate.");
  return false;
}

// Check if provisional certificate file is not selected
if (!provisionalFile) {
  insertErrorMessage("provisional_certificate_error", "Please upload the provisional certificate.");
  return false;
}




// Check file sizes
var maxSize = 5 * 1024 * 1024; // 5MB
// Check file sizes for transcript certificate
if (transcriptFile.size > maxSize) {
  insertErrorMessage("transcript_certificate_error", "File size should not exceed 5MB.");
  return false;
}

// Check file sizes for migration certificate
if (migrationFile.size > maxSize) {
  insertErrorMessage("migration_certificate_error", "File size should not exceed 5MB.");
  return false;
}

// Check file sizes for character certificate
if (characterFile.size > maxSize) {
  insertErrorMessage("character_certificate_error", "File size should not exceed 5MB.");
  return false;
}

// Check file sizes for provisional certificate
if (provisionalFile.size > maxSize) {
  insertErrorMessage("provisional_certificate_error", "File size should not exceed 5MB.");
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
  function submitForm(event) {
    // Validate the form
    if (validateForm()) {
      // Redirect to the login form
      window.location.href = "/";
    }else{
      // Prevent form submission
      event.preventDefault();
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