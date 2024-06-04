
            <!-- yaha se hatan hey -->
            @extends('layouts.master_studentdashboard')

            @push('title')
            <h2 class="fs-2 m-0">Student Dashboard</h2>
            @endpush
            @section('main-section')
            <div class="body" id="contentBody">
                <h2 class="px-4 hpart">Student Details</h2>
        </div>


        
       <div class="container-fluid px-4">


        <!-- Student Details Section -->
    <section class="section-box">
        <h3 class="bet"><span>Basic Information</span></h3>
        <div class="profile-photo">
            <img src="{{asset('img/tu.jpeg')}}" alt="Profile Photo" onclick="openPopup()">                
        </div> 
        
        <div id="popup-container" class="popup-container">
            <img id="popup-image" class="popup-image" src="" alt="Popup Image">
            <span class="close-popup" onclick="closePopup()">&times;</span>
        </div>
        
        <div>
            <div class="user-details-container">
                <div class="user_details">
                    <h5>First Name</h5>
                    <input type="text" value="Ram" readonly>
                </div>
                <div class="user_details">
                    <h5>Middle Name</h5>
                    <input type="text" value="" readonly>
                </div>
                <div class="user_details">
                    <h5>Last Name</h5>
                    <input type="text" value="Limbu" readonly>
                </div>
            </div>
            <div class="user-details-container">
                <div class="user_details">
                    <h5>Email</h5>
                    <input type="text" value="Limbu@gmail.com" readonly>
                </div>
                <div class="user_details">
                    <h5>Date of Birth</h5>
                    <input type="text" value="20-20-1999" readonly>
                </div>
                <div class="user_details">
                    <h5>Gender</h5>
                    <input type="text" value="Male" readonly>
                </div>
            </div>
        </div>
                <!-- Contact Details -->
        <div>
                    <h3 class="bet"><span>Contact Details</span></h3><br>
            <div class="user-details-container">
                <div class="user_details">
                    <h5>Citizienship Number</h5>
                    <input type="text" value="22-22-22-22222" readonly>
                </div>
                <div class="user_details">
                    <h5>Phone numebr</h5>
                    <input type="text" value="9811111111" readonly>
                </div>
                <div class="user_details">
                    <h5>Landline numebr</h5>
                    <input type="text" value="98xxxxxxxx" readonly>
                </div>
            </div>
        </div><br>          
            <!-- Address Details -->
                <div>
                    <h3 class="bet"><span>Address Details</span></h3>
                       <h5 style="text-align:center">Permanent Address</h5>
                       <div class="center-container">
                        <table class="address_table">
                        <tr>
                            <td>Kathmandu</td>
                            <td>New Road</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>Bagmati</td>
                            <td>Titre</td>
                        </tr>
                        </table>
                        </div>
                        <h5 style="text-align:center">Temporary Address</h5>
                        <div class="center-container">
                            <table class="address_table">
                            <tr>
                                <td>Kathmandu</td>
                                <td>New Road</td>
                                <td>33</td>
                            </tr>
                            <tr>
                                <td>Bagmati</td>
                                <td>Titre</td>
                            </tr>
                            </table>
                            </div>
                </div>

                <!-- Family Details -->
                <div>
                    <h3 class="bet"><span>Family Details</span></h3>
                    <div class="user-details-container">
                        <div class="user_details">
                            <h5>Father's Name</h5>
                            <input type="text" value="ramkrishna Limbu" readonly>
                        </div>
                        <div class="user_details">
                            <h5>Mother's Name</h5>
                            <input type="text" value="Sita Limbu" readonly>
                        </div>
                    </div> 
                    <div class="user-details-container">
                        <div class="user_details">
                            <h5>Father's Phone Numebr</h5>
                            <input type="text" value="9866554433" readonly>
                        </div>
                        <div class="user_details">
                            <h5>Mother's Phone Number</h5>
                            <input type="text" value="9822114999" readonly>
                        </div>                            
                    </div> 
                </div>

                <!-- Education Detaiols -->
                <div>
                    <h3 class="bet"><span>Education Details</span></h3>
                    <div class="user-details-container">
                        <div class="user_details">
                            <h5>School Name</h5>
                            <input type="text" value="SCL" readonly>
                        </div>
                        <div class="user_details">
                            <h5>SEE Grade</h5>
                            <input type="text" value="A" readonly>
                        </div>
                    </div> 
            
                    <div class="user-details-container">
                        <div class="user_details">
                            <h5>College Name</h5>
                            <input type="text" value="CLZ" readonly>
                        </div>
                        <div class="user_details">
                            <h5>+2 Grade</h5>
                            <input type="text" value="A" readonly>
                        </div>                            
                    </div>
                    <div >
                        <div class="user_detail">
                            <div class="user_details input">
                            <h5>Bachelor Entrance Roll no</h5>
                            <input type="text" value="59887676" readonly>
                        </div>
                        </div>
                        <h5 style="text-align:center">Educaiton Certificates</h5>
                        <table class="certificate_table">
                            <tr>
                                <th>Document Name</th>
                                <th>View Document</th>
                            </tr>
                            <tr>
                                <td>+2 Transcript Certificate</td>
                                <td><a href="#" class="view-file-link" data-file="+2.jpg">View File</a></td> 
                            </tr>
                            <tr>
                                <td>+2 Migration Certificate</td>
                                <td><a href="#" class="view-file-link" data-file="bibash.jpg">View File</a></td>
                            </tr>
                            <tr>
                                <td>+2 Character Certificate</td>
                                <td><a href="#" class="view-file-link" data-file="bibash.jpg">View File</a></td>
                            </tr>
                            <tr>
                                <td>+2 Provisional Certificate</td>
                                <td><a href="#" class="view-file-link" data-file="+2.jpg">View File</a></td>
                            </tr>                                                                    
                        </table>
                        
                        <div id="popup-container" class="popup-container">
                            <img id="popup-image" class="popup-image" src="" alt="Popup Image">
                            <span class="close-popup" onclick="closePopup()">&times;</span>
                        </div>                      
                       <!-- <div id="file-display"></div> -->
                    </div>                                             
                </div>  
    </section>
        </div>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

// JS for photo popup from education details
document.querySelectorAll('.view-file-link').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        const filePath = item.getAttribute('data-file');
        showPopup(filePath);
    });
});

function showPopup(filePath) {
    const popupImage = document.getElementById('popup-image');
    popupImage.src = filePath;
    const popupContainer = document.getElementById('popup-container');
    popupContainer.style.display = 'block';
}

function closePopup() {
    const popupContainer = document.getElementById('popup-container');
    popupContainer.style.display = 'none';
}


// JS for profile photo
function openPopup() {
    var popupContainer = document.getElementById("popup-container");
    var popupImage = document.getElementById("popup-image");
    var profilePhoto = document.querySelector(".profile-photo img");

    popupImage.src = profilePhoto.src;
    popupContainer.style.display = "block";
}

function closePopup() {
    var popupContainer = document.getElementById("popup-container");
    popupContainer.style.display = "none";
}
</script>

            @endsection
