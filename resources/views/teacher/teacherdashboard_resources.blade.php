
            <!-- yaha se hatan hey -->
            @extends('layouts.master_teacherdashboard')

           

            @push('title')
            <h2 class="fs-2 m-0">Teacher Dashboard</h2>
            @endpush
            @section('main-section')
            <div class="body" id="contentBody">
                    <h2 class="px-4 hpart">Resources</h2>
            </div>
            <section>
                <div class="box">
                    <div class="d-flex justify-content-center p-2">
                        <h3 class="sub primary-text text-center">Choose Subject</h3>
                    </div>
                    <div class="container-fluid p-2">
                        <div class="col" id="tableContainer">
                            <table class="tb table rounded shadow-sm  table-hover" id="resourceTable">
                                <!-- Table for semester 1 -->
                                <thead>
                                    <tr>
                                        <th scope="col" width="5">#</th>
                                        <th scope="col" width="50">Course Code</th>
                                        <th scope="col" width="50">Subjects</th>
                                        <th scope="col" width="50" class=" p-2"> Action</th>
                                    </tr>
                                </thead>
                                <tbody id="resourceTableBody">
                                    <tr>
                                        <td>1</td>
                                        <td>cacs 012</td>
                                        <td>java</td>
                                        <td><button class="btn btn-secondary" id="addResource1">Add Resources</button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>CACS 031</td>
                                        <td>Another Subject</td>
                                        <td><button class="btn btn-secondary" id="addResource2">Add Resources</button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Yet Another Course Code</td>
                                        <td>Yet Another Subject</td>
                                        <td><button class="btn btn-secondary" id="addResource3">Add Resources</button></td>
                                    </tr>
                                </tbody>
            
                            </table>
                        </div>
                    </div>
                </div>
               
                        <form action="" class="p-2 " id="addResourceForm" style="display: none;">
                            <div  id="formContainer"class=" row justify-content-center ">
                                <div class="col-lg-6 col-md-8 col-sm-10 mt-2 border border-info border-2">
                                    <div class="input-group p-2">
                                        <span class="input-group-text">Title</span>
                                        <input type="text" class="form-control" id="resourceTitle" placeholder="Title for resource" aria-label="Example text with button addon" aria-describedby="button-addon1" required>
                                    </div>
                                    <div id="titleError" class="text-danger d-none p-2">Title is required</div>
                                    <div class="input-group p-2">
                                        <input type="file" class="form-control" id="resourceFile" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    </div>
                                    <div id="fileError" class="text-danger d-none p-2">File is required</div>
                                    <div class="input-group p-2">
                                        <span class="input-group-text">Expiry Date</span>
                                        <input type="datetime-local" class="form-control" id="resourceDate" aria-describedby="inputGroupFileAddon04" aria-label="Date" value="" min="" max="" required>  
                                    </div>
                                    <div id="dateError" class="text-danger d-none p-2">Select Expiry Date</div>
                                    <div  id="expiryDateError"class="text-danger  p-2 d-none ">
                                        <div id="expiryDateMinError">Expiry date must be at least 1 day.</div>
                                        <div id="expiryDateMaxError">Expiry date cannot be more than 6 months.</div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-center">
                                        <button class="btn btn-primary p-2" type="button" id="uploadResource">Upload Resource</button>
                                    </div>
                                </div>
                           
                            </div>
                            
                            
                            <div class="p-2 mt-5">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">File</th>
                                            <th scope="col">Expiry Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="displayResource">
                                   
                                    </tbody>
                                </table>
                            </div>
                        </form>  
                  
            </section>
            
         
    </div>
    <!-- /#page-content-wrapper -->
    </div>
      
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <script src="{{asset('teacher/js/teacherdashboard_resources.js')}}"></script>
            @endsection
