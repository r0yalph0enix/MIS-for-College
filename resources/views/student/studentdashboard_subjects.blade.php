
            <!-- yaha se hatan hey -->
            @extends('layouts.master_studentdashboard')

           

            @push('title')
            <h2 class="fs-2 m-0">Student Dashboard</h2>
            @endpush
            @section('main-section')
            <div class="body" id="contentBody">
                <h2 class="px-4 hpart">Subjects</h2>
        </div>
        <section>
            <div class="box">
                <h3 class="sem">Choose Semester</h3>
                <div class="semester">
                    <h4>Semester</h4>  &emsp;
                    <select name="semester" class="select" id="selectOption" onchange="showTable()">
                        <option value="#">Choose</option>
                        <option value="1">First Semester</option>
                        <option value="2">Second Semester</option>
                        <option value="3">Third Semester</option>
                        <option value="4">Fourth Semester</option>
                        <option value="5">Fifth Semester</option>
                        <option value="6">Sixth Semester</option>
                        <option value="7">Seventh Semester</option>
                        <option value="8">Eighth Semester</option>

                    </select>
                </div>
                <div class="container-fluid px-4">
                    <div class="row my-5">
                        <div class="col">
                            <table class="tb table rounded shadow-sm  table-hover" id="dataTable" style="display:none;">
                                <thead>
                                    <tr>
                                        <th scope="col" width="5">#</th>
                                        <th scope="col" width="50">Subject Name</th>
                                        <th scope="col" width="50">Teacher</th>
                                        <th scope="col" width="50">Class Timing</th>
                                        <th scope="col" width="50">Classroom</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Computer Fundamental and Application(CACS 101)</td>
                                        <td>Shree Krishna Maharjan</td>
                                        <td>10:00 A.M</td>
                                        <td>Room 206</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Computer Fundamental and Application(CACS 101)</td>
                                        <td>Shree Krishna Maharjan</td>
                                        <td>10:00 A.M</td>
                                        <td>Room 206</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Computer Fundamental and Application(CACS 101)</td>
                                        <td>Shree Krishna Maharjan</td>
                                        <td>10:00 A.M</td>
                                        <td>Room 206</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Computer Fundamental and Application(CACS 101)</td>
                                        <td>Shree Krishna Maharjan</td>
                                        <td>10:00 A.M</td>
                                        <td>Room 206</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Computer Fundamental and Application(CACS 101)</td>
                                        <td>Shree Krishna Maharjan</td>
                                        <td>10:00 A.M</td>
                                        <td>Room 206</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> 
    
                </div>
            </div>
        </section>
       
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
// for displaying dropdown in semester
function showTable() {
  var selectElement = document.getElementById("selectOption");
  var selectedValue = selectElement.value;
  var table = document.getElementById("dataTable");

  if (selectedValue !== "") {
    table.style.display = "table"; // Show the table
  } else {
    table.style.display = "none"; // Hide the table if no option is selected
  }
}

// document.getElementById("course1").addEventListener("click", function(event) {
//   event.preventDefault(); // Prevent the default action of the link
  
//   var otherSection = document.getElementById("otherSection");
  
//   // Toggle the display of the other section
//   if (otherSection.style.display === "none") {
//     otherSection.style.display = "block";
//   } else {
//     otherSection.style.display = "none";
//   }
// });

// Get all elements with the class "course"
var courseElements = document.querySelectorAll(".course");

// Loop through each element and add event listener
courseElements.forEach(function(element) {
  element.addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default action of the link
    
    var courseId = this.id; // Get the ID of the clicked element
    var otherSection = document.getElementById("otherSection" + courseId); // Use the ID to identify the corresponding other section
    
    // Toggle the display of the other section
    if (otherSection.style.display === "none" || otherSection.style.display === "") {
      otherSection.style.display = "block";
    } else {
      otherSection.style.display = "none";
    }
  });
});

    </script>
        @endsection
