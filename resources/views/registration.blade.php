<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <title>Registration Form</title>
  <link rel="stylesheet" href="{{asset('css/registration.css')}}">
</head>

<body style="background-image:url({{asset('img/blur_tu.png')}}) ">
  <header>
    <div class="logo"><a href="/registration">
      <img src="{{asset('img/logo.png')}}" alt="College Logo">
    </div></a>
    <div class="college-info">
      <h1>Ratna Rajyalaxmi Campus</h1>
      <p>Pradashanimarga, Kathmandu</p>
    </div>
    
  </header>
  <!-- Registration Form -->
  <form action="/" method="get" onsubmit="submitForm(event)">
  <div id="registrationFormContainer" class="containerregistration">
    <div class="box-containerregistration">
        <div class="headingregistration">Basic Information</div>
     
        <div class="rowregistration">
            <div class="input-boxregistration">
                <label for="fname">First Name<span class="mandatory">*</span></label>
                <input type="text" id="fname" name="fname" placeholder="Enter your First Name" required>
                <div id="error-fname" class="error-message" style="display: none;"></div>
            </div>
            <div class="input-boxregistration">
                <label for="mname">Middle</label>
                <input type="text" id="mname" name="mname" placeholder="Enter your Middle Name" required>
                <div id="error-mname" class="error-message" style="display: none;"></div>
            </div>
            <div class="input-boxregistration">
                <label for="lname">Last Name<span class="mandatory">*</span></label>
                <input type="text" id="lname" name="lname" placeholder="Enter your Last Name" required>
                <div id="error-lname" class="error-message" style="display: none;"></div>
            </div>
        </div>
          <div class="rowregistration">
          <div class="input-boxregistration">
          <label for="program">Program<span class="mandatory">*</span></label>
              <div class="custom-select-box">
                  <select id="program" name="program" required>
                      <option value="" disabled selected>Choose Program</option>
                      <option value="option1">BCA</option>
                      <option value="option2">BSW</option>
                      <option value="option3">BA</option>
                      <!-- Add more options as needed -->
                  </select>
              </div>
              <div id="error-program" class="error-message" style="display: none;"></div>
          </div>


          <div class="input-boxregistration">
          <label for="level">Level<span class="mandatory">*</span></label>
              <div class="custom-select-box">
                  <select id="level" name="level" required>
                      <option value="" disabled selected>Choose Level</option>
                      <option value="beginner">Bachelor</option>
                      <option value="intermediate">Masters</option>
                      <option value="advanced"></option>
                      <!-- Add more options as needed -->
                  </select>
              </div>
              <div id="error-level" class="error-message" style="display: none;"></div>
          </div>
      </div>
          
        <div class="input-boxregistration">
            <label for="dob">Date of Birth<span class="mandatory">*</span></label>
            <div class="dob-containerreg">
                <input type="dobreg" id="dob" name="dob" placeholder="DD/MM/YYYY" required>
                <i class="bi bi-calendar calendar-icon" id="calendar-icon"></i> <!-- Calendar icon -->
            </div>
            <div id="error-dob" class="error-message" style="display: none;"></div>
        </div>
        
        <div class="input-boxregistration">
            <label for="email">Email<span class="mandatory">*</span></label>
            <input type="emailreg" id="email" name="email" placeholder="Enter your Email" required>
            <div id="error-email" class="error-message" style="display: none;"></div>
        </div>
                 
      
        <div class="photo-box">
            <label for="student_photo">Student Photo<span class="mandatory">*</span></label>
            <input type="file" id="photo" name="photo" accept="image/*" onchange="updateFileName(this)" required>
            <div id="error-photo" class="error-message" style="display: none;"></div>
        </div>
        <div class="gender-box">
            <label for="gender" class="gen">Gender<span class="mandatory">*</span></label>
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
            <div id="error-gender" class="error-message" style="display: none;"></div>
        </div>
        <div class="button" style="display: flex; justify-content: flex-end;">
            <input type="button" class="next-button" onclick="validateAndProceed()" value="Next">
            
        </div>
    </div>
</div>


    <script src={{asset('js/registration.js')}}></script>

 
    <!-- Contact details -->
    <link rel="stylesheet" href="{{asset('css/ContactDetails.css')}}">
    <div id="contactDetailsContainer" class="containercon" style="display: none;">
      <div class="box-containercon">
          <div class="headingcon">Contact Details</div>
          <div class="rowcon">
              <div class="input-boxcon">
                  <label for="citizen_num">Citizenship Number<span class="mandatory">*</span></label>
                  <input type="text" id="citizen_num" name="citizen_num" placeholder="Citizenship Number" required>
                  <div id="citizen_num_error" class="error-message"></div> <!-- Error message container for citizenship number -->
              </div>
              <div class="input-boxcon">
                  <label for="citizen_copy">Citizenship Copy<span class="mandatory">*</span></label>
                  <input type="file" id="citizen_copy" name="citizen_copy" accept="image/*" required>
                  <div id="citizen_copy_error" class="error-message"></div> <!-- Error message container for citizenship copy -->
              </div>
          </div>
          <div class="row">
              <div class="input-boxcon">
                  <label for="contact_num">Contact Phone Number<span class="mandatory">*</span></label>
                  <input type="text" id="contact_num" name="contact_num " placeholder="Enter Contact Phone Number" required>
                  <div id="contact_num_error" class="error-message"></div> <!-- Error message container for contact phone number -->
              </div>
              <div class="input-boxcon">
                  <label for="landline_num"> Landline Number</label>
                  <input type="text" id="landline_num" name="landline_num" placeholder="Enter Contact Landline Number">
                  <div id="landline_num_error" class="error-message"></div> <!-- Error message container for contact landline number -->
              </div>
          </div>
        <div class="button-containercon">
          <input type="button" class="back-button" onclick="showRegistrationForm()" value="Back">
          <input type="button" class="next-button" onclick="if(validateContactDetails()) loadAddressDetails()" value="Next">
  
        </div>
      </div>
    </div>
    <!-- Contact Details Js -->
  
    <script src={{asset('js/ContactDetails.js')}}></script>
     
     
      
    
    
    
    <!-- Address Details -->
   
    <link rel="stylesheet" href="{{asset('css/AddressDetails.css')}}">
    <div id="addressDetailsContainer" class="container address-details-container" style="display: none;">
      <!-- Add the "address-details-container" class to uniquely identify this section -->
      <div class="box-containeradd">
        <div class="headingadd">Address Details</div>
        <div class="input-box">
          <label for="permanent_address">Permanent Address<span class="mandatory">*</span></label>
          <div class="row">
            <div class="input-container">
              <input type="text" id="permanent_district" name="permanent_district" placeholder="District" required>
              <div id="permanent_district_error" class="error-message"></div> <!-- Error message container for permanent district -->
            </div>
            <div class="input-container">
              <input type="text" id="permanent_municipality" name="permanent_municipality" placeholder="VDC/Municipality" required>
              <div id="permanent_municipality_error" class="error-message"></div> <!-- Error message container for permanent municipality -->
            </div>
            <div class="input-container">
              <input type="text" id="permanent_ward" name="permanent_ward" placeholder="Ward Number" required>
              <div id="permanent_ward_error" class="error-message"></div> <!-- Error message container for permanent ward -->
            </div>
          </div>
          <div class="row">
            <div class="input-container">
              <input type="text" id="permanent_province" name="permanent_province" placeholder="Province" required>
              <div id="permanent_province_error" class="error-message"></div> <!-- Error message container for permanent province -->
            </div>
            <div class="input-container">
              <input type="text" id="permanent_tole" name="permanent_tole" placeholder="Tole" required>
              <div id="permanent_tole_error" class="error-message"></div> <!-- Error message container for permanent tole -->
            </div>
          </div>
        </div>
        <!-- Temporary Address Input Box -->
        <!-- Add the "input-box" class to uniquely identify each input box -->
        <div class="input-box">
          <label for="temporary_address">Temporary Address<span class="mandatory">*</span></label>
          <div class="row">
            <div class="input-container">
              <input type="text" id="temporary_district" name="temporary_district" placeholder="District" required>
              <div id="temporary_district_error" class="error-message"></div> <!-- Error message container for temporary district -->
            </div>
            <div class="input-container">
              <input type="text" id="temporary_municipality" name="temporary_municipality" placeholder="VDC/Municipality" required>
              <div id="temporary_municipality_error" class="error-message"></div> <!-- Error message container for temporary municipality -->
            </div>
            <div class="input-container">
              <input type="text" id="temporary_ward" name="temporary_ward" placeholder="Ward Number" required>
              <div id="temporary_ward_error" class="error-message"></div> <!-- Error message container for temporary ward -->
            </div>
          </div>
          <div class="row">
            <div class="input-container">
              <input type="text" id="temporary_province" name="temporary_province" placeholder="Province" required>
              <div id="temporary_province_error" class="error-message"></div> <!-- Error message container for temporary province -->
            </div>
            <div class="input-container">
              <input type="text" id="temporary_tole" name="temporary_tole" placeholder="Tole" required>
              <div id="temporary_tole_error" class="error-message"></div> <!-- Error message container for temporary tole -->
            </div>
          </div>
        </div>
        <!-- Navigation Buttons -->
        <div class="row">
          <label for="same_as_permanent" class="permaddress">Same as Permanent Address</label>
          <input type="checkbox" id="same_as_permanent">
        </div>
    <div class="button">
      <input type="button" class="back-button" onclick="showContactDetails()" value="Back">
      <input type="button" class="next-button" onclick="if(validateAddressDetails()) showFamilyDetails()" value="Next">
    </div>
  </div>
</div>


      <!-- Address Details js -->

<script src={{asset('js/AddressDetails.js')}}></script>



  
    <!-- Family Details -->
    <link rel="stylesheet" href="{{asset('css/FamilyDetails.css')}}">
    <div id="familyDetailsContainer" class="container family-details-container" style="display: none;">
      <div class="containerfam">
        <div class="box-containerfam">
          <div class="headingfam">Family Details</div>
          <div class="rowfam">
            <div class="input-boxfam">
              <label for="father_name">Father's Name<span class="mandatory">*</span></label>
              <input type="text" id="father_name" name="father_name" placeholder="Father's Name" required>
              <div id="father_name_error" class="error-message"></div> <!-- Error message container for father's name -->
            </div>
            <div class="input-boxfam">
              <label for="mother_name">Mother's Name<span class="mandatory">*</span></label>
              <input type="text" id="mother_name" name="mother_name" placeholder="Mother's Name" required>
              <div id="mother_name_error" class="error-message"></div> <!-- Error message container for mother's name -->
            </div>
          </div>
          <div class="rowfam">
            <div class="input-boxfam">
              <label for="father_phone">Father's Phone Number<span class="mandatory">*</span></label>
              <input type="text" id="father_phone" name="father_phone" placeholder="Father's Phone Number" required>
              <div id="father_phone_error" class="error-message"></div> <!-- Error message container for father's phone number -->
            </div>
            <div class="input-boxfam">
              <label for="mother_phone">Mother's Phone Number<span class="mandatory">*</span></label>
              <input type="text" id="mother_phone" name="mother_phone" placeholder="Mother's Phone Number" required>
              <div id="mother_phone_error" class="error-message"></div> <!-- Error message container for mother's phone number -->
            </div>
          </div>
    
          <div class="button-container">
            <input type="button" class="back-button" onclick="showAddressDetails()" value="Back">
            <input type="button" class="next-button" onclick="if(validateFamilyDetails()) loadEducationDetails()" value="Next">
  
          </div>
        </div>
      </div>
    </div>
   <!-- FamilyDetails Js -->
   
    <script src={{asset('js/FamilyDetails.js')}}></script>

   
  
  
   <!-- Education Details -->
   <link rel="stylesheet" href="{{asset('css/EducationDetails.css')}}">
  <div class="containeredu" style="display: none;" id="educationDetailsContainer">
    <div class="box-containeredu">
      <div class="headeredu">Education Details</div>
      <div class="rowedu">
        <div class="input-boxedu">
          <label for="school_name">School Name<span class="mandatory">*</span></label>
          <input type="text" id="school_name" name="school_name" placeholder="Enter School Name">
          <div id="school_name_error" class="error-message"></div> <!-- Error message container for school name -->
        </div>
        <div class="input-boxedu citizenship-copy">
          <label for="see_grade_input">SEE Grade<span class="mandatory">*</span></label>
          <div class="custom-select-box">
          <select id="see_grade_input" name="see_grade_input">
  <option value="">Select Grade</option>
  <option value="A+">A+</option>
  <option value="A">A</option>
  <option value="B+">B+</option>
  <option value="B">B</option>
  <option value="C+">C+</option>
  <option value="C">C</option>
  <option value="D+">D+</option>
  <option value="D">D</option>
  <option value="E">E</option>
</select>
            <div id="see_grade_input_error" class="error-message"></div> <!-- Error message container for SEE grade -->
          </div>
        </div>
      </div>
      <div class="rowedu">
        <div class="input-boxedu">
          <label for="college_name">College Name<span class="mandatory">*</span></label>
          <input type="text" id="college_name" name="college_name" placeholder="Enter College Name">
          <div id="college_name_error" class="error-message"></div> <!-- Error message container for college name -->
        </div>
        <div class="input-boxedu citizenship-copy">
          <label for="plus2_grade_input">+2 Grade<span class="mandatory">*</span></label>
          <div class="custom-select-box">
            <select id="plus2_grade_input" name="plus2_grade_input">
  <option value="">Select Grade</option>
  <option value="A+">A+</option>
  <option value="A">A</option>
  <option value="B+">B+</option>
  <option value="B">B</option>
  <option value="C+">C+</option>
  <option value="C">C</option>
  <option value="D+">D+</option>
  <option value="D">D</option>
  <option value="E">E</option>
</select>
            <div id="plus2_grade_input_error" class="error-message"></div> <!-- Error message container for +2 grade -->
          </div>
        </div>
      </div>
      <div class="rowedu">
        <div class="input-boxedu">
          <label for="entrance_roll_no">Bachelor Entrance Roll no<span class="mandatory">*</span></label>
          <input type="text" id="entrance_roll_no" name="entrance_roll_no" placeholder="Enter Bachelor Entrance Roll Number">
          <div id="entrance_roll_no_error" class="error-message"></div> <!-- Error message container for entrance roll number -->
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
              <div id="transcript_certificate_error" class="error-message"></div> <!-- Error message for transcript certificate -->
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
              <div id="migration_certificate_error" class="error-message"></div>
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
              <div id="character_certificate_error" class="error-message"></div>
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
              <div id="provisional_certificate_error" class="error-message"></div>
            </td>
          </tr>
        </table>
      </div>
  
      <div class="button-container">
        <input type="button" class="back-button" onclick="showFamilyDetails()" value="Back">
        
        <button class="next-button" onclick="submitForm()" >Submit</button>
      </div>
    </div>
 
  </div>
</form>
  <!-- JavaScript for education details -->
  <script>
   
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
    <script src={{asset('js/EducationDetails.js')}}></script>

  </body>
  
  </html>
  
  