<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
     <!-- link of css for jquery data table -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
     <!-- link of js for jquery data table -->
     <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
     <!--  commented because student profile option dropdown was not working-->
     <!-- <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->
     <script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
     <script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
     <!-- External link of css -->
     <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
     <link rel="stylesheet" href={{asset('teacher/css/teacher_dashboard.css')}} />
     <!-- External link of js -->
     <script defer src={{asset('teacher/js/jquery.js')}}></script>  
     <script defer src={{asset('teacher/js/teacherdashboard_resources.js')}}></script>  
     <title>Teacher Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"> 
                <a href="/teacherdashboard">
                <img src="{{asset('img/logo.png')}}" alt="" width="35px" style="margin: 0px 10px 0px 0px; "></a>RR Campus </div>
            <div class="list-group list-group-flush my-3">
                <a href="/teacherdashboard" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="/teacherdashboard_students" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa fa-user me-2"></i>Students</a>
                <a href="/teacherdashboard_internalevaluation" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa fa-book me-2"></i>Internal Evaluation</a>
                <a href="/teacherdashboard_resources" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa fa-server me-2"></i>Resources</a>
                <a href="/teacherdashboard_comment&query" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa fa-comments me-2"></i>Comment/Query</a>
                <a href="{{asset('teacher/img/Help.pdf')}}" target="_blank" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa fa-info me-2"></i>Help</a>                
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    @stack('title')
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
               
                <!-- student profile -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i>Teacher
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/teacherdashboard_view_profile">View Profile</a></li>
                            <li><a class="dropdown-item" href="/teacherdashboard_edit_profile">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="/teacherdashboard_password_reset">Reset Password</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Logout</a></li>
                        </ul>
                         <!-- logout popup box -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Are you sure,you want to logout?</h5>
                        <button type="button" class="btn-close"data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"data-bs-dismiss="modal"> No </button>
                        <a href="/"><button type="button" class="btn btn-primary btn-danger">yes</button></a>
                        </div>
                    </div>
                </div>
            </div>
                        <!-- Notification icon -->
 <li class="nav-item">
    <a class="nav-link" href="#" id="notificationIcon">
        <i class="fas fa-bell"></i>
        <!-- Replace the badge with a red dot -->
        <span class="red-dot"></span>
    </a>
  </li>
  
                        
                        
                      </ul>
                  </div>
                  <!-- Notification Box -->
  <div id="notificationBox" style="display: none;">
      <div id="notificationHeading">Notifications (12)</div> <!-- Replace "12" with the actual number of notifications -->
      <ul>
          <li>BCA department meeting scheduled for next Tuesday at 2:00 PM.</li>
          <li>Reminder: Submit project proposals by the end of the week.</li>
          <li>Guest lecture on 'Artificial Intelligence in Business' tomorrow at 11:00 AM.</li>
          <li>BCA department picnic planned for next Saturday. Get your tickets!</li>
          <li>Deadline approaching: Final exam timetable to be released soon.</li>
          <li>BCA department meeting scheduled for next Tuesday at 2:00 PM.</li>
          <li>Reminder: Submit project proposals by the end of the week.</li>
          <li>Guest lecture on 'Artificial Intelligence in Business' tomorrow at 11:00 AM.</li>
          <li>BCA department picnic planned for next Saturday. Get your tickets!</li>
          <li>Deadline approaching: Final exam timetable to be released soon.</li>
          <li>BCA department picnic planned for next Saturday. Get your tickets!</li>
          <li>Deadline approaching: Final exam timetable to be released soon.</li>
          <!-- Add more notifications as needed -->
      </ul>
  </div>
              </nav>
                
            </nav>
            @yield('main-section')
            <!-- yaha se hatan hey -->
            {{-- <div class="body" id="contentBody">
                    <h2 class="px-4 hpart">Summary Report</h2>
            </div>
           <div class="container-fluid px-4 box">
                <div class="summarybox row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">N/A</h3>
                                <p class="fs-5">Total Subject</p>
                            </div>
                            <i
                                class="fa fa-book fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">N/A</h3>
                                <p class="fs-5">Total Teacher</p>
                            </div>
                            <i class="fa fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3"></h3>
                    <div class="col">
                        <!-- quote of the day -->
                        <div class="card1">
                            <div class="card-name">Quote of the month</div>
                            <div class="quote">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 330 307" height="80" width="80">
                                <path fill="currentColor" d="M302.258 176.221C320.678 176.221 329.889 185.432 329.889 203.853V278.764C329.889 297.185 320.678 306.395 302.258 306.395H231.031C212.61 306.395 203.399 297.185 203.399 278.764V203.853C203.399 160.871 207.902 123.415 216.908 91.4858C226.323 59.1472 244.539 30.902 271.556 6.75027C280.562 -1.02739 288.135 -2.05076 294.275 3.68014L321.906 29.4692C328.047 35.2001 326.614 42.1591 317.608 50.3461C303.69 62.6266 292.228 80.4334 283.223 103.766C274.626 126.69 270.328 150.842 270.328 176.221H302.258ZM99.629 176.221C118.05 176.221 127.26 185.432 127.26 203.853V278.764C127.26 297.185 118.05 306.395 99.629 306.395H28.402C9.98126 306.395 0.770874 297.185 0.770874 278.764V203.853C0.770874 160.871 5.27373 123.415 14.2794 91.4858C23.6945 59.1472 41.9106 30.902 68.9277 6.75027C77.9335 -1.02739 85.5064 -2.05076 91.6467 3.68014L119.278 29.4692C125.418 35.2001 123.985 42.1591 114.98 50.3461C101.062 62.6266 89.6 80.4334 80.5942 103.766C71.9979 126.69 67.6997 150.842 67.6997 176.221H99.629Z"></path>
                              </svg>
                            </div>
                            <div class="body-text">If you are good at something never do it for free.</div>
                            <div class="authors">- by Joker <br> <span>(Hollywood supervillian)</span>   <svg height="" width="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0H24V24H0z" fill="none"></path><path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"></path></svg>
                            </div>
                            </div>
                        <!-- up to here -->
                    </div>
                </div> 

            </div>
        </div> --}}
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

        /*function loadContent(url){
            fetch(url)
            .then(Response => Response.text())
            .then(data =>{
                document.getElementById('contentBody').innerHTML = data;
            })
            .catch(error => console.error('Error loading content',error));
        }*/


        function toggleNotificationBox() {
          var notificationBox = document.getElementById("notificationBox");
          if (notificationBox.style.display === "none" || notificationBox.style.display === "") {
              notificationBox.style.display = "block";
  
              var badge = document.getElementById("badge");
              if (badge) {
                  badge.style.display = "none";
              }
          } else {
              notificationBox.style.display = "none";
          }
      }
  // Get the notification icon element
const notificationIcon = document.getElementById('notificationIcon');

// Add click event listener to the notification icon
notificationIcon.addEventListener('click', function() {
    // Get the red dot element
    const redDot = document.querySelector('.red-dot');
    
    // Check if the red dot exists
    if (redDot) {
        // Remove the red dot
        redDot.remove();
    }
});

      // Function to close the notification box when clicking outside of it
      document.body.addEventListener('click', function(event) {
          var notificationBox = document.getElementById("notificationBox");
          if (!notificationBox.contains(event.target) && event.target.id !== "notificationIcon") {
              notificationBox.style.display = "none";
          }
      });
  
      // Add event listener to the notification icon
      document.getElementById("notificationIcon").addEventListener("click", function(event) {
          event.stopPropagation(); // Stop event propagation to prevent closing the box immediately
          toggleNotificationBox();
      });
    </script>
</body>

</html>