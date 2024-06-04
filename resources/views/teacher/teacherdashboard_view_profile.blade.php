
            <!-- yaha se hatan hey -->
            @extends('layouts.master_teacherdashboard')

            @push('title')
            <h2 class="fs-2 m-0">Teacher Dashboard</h2>
            @endpush
            @section('main-section')
            <div class="body" id="contentBody">
                <h2 class="px-4 hpart">Teacher Details</h2>
        </div>


        
       <div class="container-fluid px-4">


        <!-- Student Details Section -->
    <section class="section-box">
        <div>
            <div class="user-details-container">
                <div class="user_details">
                    <h5>First Name</h5>
                    <input type="text" value="Shree" readonly>
                </div>
               
                <div class="user_details">
                    <h5>Middle Name</h5>
                    <input type="text" value="krishna" readonly>
                </div>
            </div>
        
            <!-- Family Details -->
                <div>
                    <div class="user-details-container">
                        <div class="user_details">
                            <h5>Last Name</h5>
                            <input type="text" value="Maharjan" readonly>
                        </div>

                      

                        <div class="user_details">
                            <h5>Email</h5>
                            <input type="text" value="shree@gmail.com" readonly>
                        </div>
                    </div> 
                    <div class="user-details-container">
                        <div class="user_details">
                            <h5>Phone Number</h5>
                            <input type="text" value="9898989898" readonly>
                        </div>

                        

                        <div class="user_details">
                            <h5>Gender</h5>
                            <input type="text" value="Male" readonly>
                        </div>                            
                    </div> 
                    <div class="user-details-container">
                        <div class="user_details">
                            <h5>Date of Birth</h5>
                            <input type="text" value="09/23/2020" readonly>
                        </div>

                      
                        
                        <div class="user_details">
                            <h5>Quaification</h5>
                            <input type="text" value=" Master in Computer Application" readonly>
                        </div>                            
                    </div> 
                    <div class="user-details-container">
                        <div class="user_details">
                            <h5>Qualification</h5>
                            <input type="text" value="2 Years" readonly>
                        </div>

                      

                        <div class="user_details">
                            <h5>Subject of Experties</h5>
                            <input type="text" value="Java, Dot.Net " readonly>
                        </div>                            
                    </div> 
                </div>

                <!-- Education Detaiols -->
              
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
