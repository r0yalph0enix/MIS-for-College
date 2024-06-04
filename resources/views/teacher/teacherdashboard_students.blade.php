
            <!-- yaha se hatan hey -->
            @extends('layouts.master_teacherdashboard')

           

            @push('title')
            <h2 class="fs-2 m-0">Teacher Dashboard</h2>
            @endpush

            @section('main-section')
            <div class="body" id="contentBody">
                <h2 class="px-4 hpart">Students</h2>
        </div>
        <div class="container-fluid px-4">
            <div class="row my-5">
                <div class="col">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Full Name</th>
                                <th>Roll No</th>
                                <th>Section</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Diwash Bhandari</td>
                                <td>2019-A-91</td>
                                <td>A</td>
                                <td>diwashbhandari2@gmail.com</td>
                                <td ><li class="li"><a class="action" href="/teacherdashboard_studentdetails">Details</a></li></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Diwash Bhandari</td>
                                <td>2019-A-91</td>
                                <td>A</td>
                                <td>diwashbhandari2@gmail.com</td>
                                <td><li class="li"><a class="action" href="/teacherdashboard_studentdetails">Details</a></li></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Diwash Bhandari</td>
                                <td>2019-A-91</td>
                                <td>A</td>
                                <td>diwashbhandari2@gmail.com</td>
                                <td><li class="li"><a class="action" href="/teacherdashboard_studentdetails">Details</a></li></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Diwash Bhandari</td>
                                <td>2019-A-91</td>
                                <td>A</td>
                                <td>diwashbhandari2@gmail.com</td>
                                <td><li class="li"><a class="action" href="/teacherdashboard_studentdetails">Details</a></li></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Diwash Bhandari</td>
                                <td>2019-A-91</td>
                                <td>A</td>
                                <td>diwashbhandari2@gmail.com</td>
                                <td><li class="li"><a class="action" href="/teacherdashboard_studentdetails">Details</a></li></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Diwash Bhandari</td>
                                <td>2019-A-91</td>
                                <td>A</td>
                                <td>diwashbhandari2@gmail.com</td>
                                <td><li class="li"><a class="action" href="/teacherdashboard_studentdetails">Details</a></li></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Diwash Bhandari</td>
                                <td>2019-A-91</td>
                                <td>A</td>
                                <td>diwashbhandari2@gmail.com</td>
                                <td><li class="li"><a class="action" href="/teacherdashboard_studentdetails">Details</a></li></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Diwash Bhandari</td>
                                <td>2019-A-91</td>
                                <td>A</td>
                                <td>diwashbhandari2@gmail.com</td>
                                <td><li class="li"><a class="action" href="/teacherdashboard_studentdetails">Details</a></li></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Diwash Bhandari</td>
                                <td>2019-A-91</td>
                                <td>A</td>
                                <td>diwashbhandari2@gmail.com</td>
                                <td><li class="li"><a class="action" href="/teacherdashboard_studentdetails">Details</a></li></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Diwash Bhandari</td>
                                <td>2019-A-91</td>
                                <td>A</td>
                                <td>diwashbhandari2@gmail.com</td>
                                <td><li class="li"><a class="action" href="/teacherdashboard_studentdetails">Details</a></li></td>
                            </tr>
                            
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SN</th>
                                <th>Full Name</th>
                                <th>Roll No</th>
                                <th>Section</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div> 

        </div>
    </div>
        @endsection
