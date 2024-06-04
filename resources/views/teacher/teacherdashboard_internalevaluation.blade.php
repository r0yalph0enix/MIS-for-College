
            <!-- yaha se hatan hey -->
            @extends('layouts.master_teacherdashboard')

           

            @push('title')
            <h2 class="fs-2 m-0">Teacher Dashboard</h2>
            @endpush
            @section('main-section')
            <div class="body" id="contentBody">
                <h2 class="px-4 hpart">Internal Marks</h2>
        </div>
        <section>
            <div class="box">
                                  
                <div class="container1">
                    <form action="" class="p-2" id="SelectSubjectAndBatch">
                        <div class="d-flex justify-content-center p-2">
                            <h3 class="sub primary-text text-center">Choose Subject and batch </h3>
                        </div>
                        <div id="formContainer1" class="d-flex justify-content-center">
                            <div class="col-lg-8 col-md-10 col-sm-12 mt-3 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="d-flex justify-content-center">Select Subject</h5>
                                        <select class="form-select" id="subjectSelect" size="1" aria-label="size 2 select example" required>
                                            <option value="">Select Subject</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="5">Five</option>
                                            <option value="6">Six</option>
                                            <option value="7">Seven</option>
                                            <option value="8">Eight</option>
                                            <option value="9">Nine</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a subject.
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h5 class="d-flex justify-content-center">Select Batch</h5>
                                        <select class="form-select" id="batchSelect" size="1" aria-label="size 1 select example" required>
                                            <option value="">Select Batch</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a batch.
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                    <button class="btn btn-primary btn-outline-info" type="button" id="CriteriaButton">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form>
                        <div id="criteria" class="CriteriaContainer21 flex-column" style="display: none;">
                            <div class="text-center">
                                <h4 class="mb-3"> Set Internal Evaluation Criteria</h4>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">Full Marks</span>
                                    <input type="number" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Please fill full marks
                                    </div>
                                </div>
                            </div>
                            <div>
                                <table id="dataTable" class="table" id="tbl1">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Criteria Title </th>
                                            <th scope="col">Marks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Existing rows will be inserted here -->
                                    </tbody>
                                </table>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mr-3">
                                    <button type="button" class="btn btn-success" onclick="addRow()">Add Row</button>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto mt-3 mb-3">
                                    <button class="btn btn-primary btn-outline-info" type="button" id="saveButton" onclick="save()">SAVE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form> 
                        <div id="StudentTable" class="CriteriaContainer3 flex-column "style="display:none">
                            <table id="dataTable" class="table" id="tbl1">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Criteria</th>
                                        <th scope="col">Marks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Criterion 1</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Criterion 2</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Criterion 3</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Criterion 4</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Criterion 5</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Criterion 6</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Criterion 7</td>
                                        <td>40</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Criterion 8</td>
                                        <td>45</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Criterion 9</td>
                                        <td>50</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Criterion 10</td>
                                        <td>55</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        


                    </form>
                </div>
                
                  
            </div>
           
                    
              
        </section>
        
     
</div>

</div>
  
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> --}}
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>

<script src="{{asset('teacher/js/teacherdashboard_internalevaluation.js')}}"></script>
        @endsection
